<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Sms;
use App\Member;
use Laracasts\Flash\Flash;


class MessageController extends Controller
{

    private $SMS_SENDER = "Revelation Manager";
    private $RESPONSE_TYPE = 'json';
    private $SMS_USERNAME = 'doubleasam';
    private $SMS_PASSWORD = '1737657m2817';


    public function getUserNumber(Request $request)
    {
        $mobile_phone = $request->input('mobile_phone');

        if(!$mobile_phone)  {
            return redirect()->back()->with('message', 'Field cannot be empty');
        }

        $message = $request->input('message');
        // $message = "A message has been sent to you from Revelation manager, on test mode";

        $this->initiateSmsActivation($mobile_phone, strip_tags($message));
//        $this->initiateSmsGuzzle($mobile_phone, $message);

        Flash::success ('Message has been sent successfully');
        return redirect()->back()->with('message', 'Message has been sent successfully');
    }



     public function create()
    {
        // $sms_thing = SMS::all();
        $member = Member::all();
        return view ('sms.sms_create', compact ('member'));
    }


    public function initiateSmsActivation($mobile_phone, $message){
        $isError = 0;
        $errorMessage = true;

        //Preparing post parameters
        $postData = array(
            'username' => $this->SMS_USERNAME,
            'password' => $this->SMS_PASSWORD,
            'message' => $message,
            'sender' => $this->SMS_SENDER,
            'recipient' => $mobile_phone,
//            'response' => $this->RESPONSE_TYPE
        );

        $url = "http://www.estoresms.com/smsapi.php?";
//        $url = "http://portal.bulksmsnigeria.net/api/";

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
        ));


        //Ignore SSL certificate verification
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


        //get response
        $output = curl_exec($ch);


        //Print error if any
        if (curl_errno($ch)) {
            $isError = true;
            $errorMessage = curl_error($ch);
        }
        curl_close($ch);


        if($isError){
            return array('error' => 1 , 'message' => $errorMessage);
        }else{
            return array('error' => 0 );
        }
    }

    public function initiateSmsGuzzle($mobile_phone, $message)
    {
        $client = new Client();

        $response = $client->post('http://portal.bulksmsnigeria.net/api/?', [
            'verify'    =>  false,
            'form_params' => [
                'username' => $this->SMS_USERNAME,
                'password' => $this->SMS_PASSWORD,
                'message' => $message,
                'sender' => $this->SMS_SENDER,
                'mobiles' => $mobile_phone,
            ],
        ]);


        $response = json_decode($response->getBody(), true);
    }


    public function usingnexmo() 
    {
        Nexmo::message()->send([
        'to'   => '08143202358',
        'from' => 'Revelation Manger',
        'text' => 'Hello this is a test Message .'
        ]);
    }

}
