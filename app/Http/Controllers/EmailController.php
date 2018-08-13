<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailtrap;
use App\Member;
use App\Email;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $email = Email::all();
        $member = Member::all();
        return view ('email.email_indexthings', compact ('member', 'email'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $member = Member::all();
        return view ('email.email_create', compact ('member'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            
             $member = Member:: select('email')->get();

                     
                $email = new Email;
                $email->email = $request->get('email');
               $email->subject = $request->get('subject');
               $email->save();

             Mail::send('email.email',
              array('email' => $request->get('email'), 'subject' => $request->get('subject'), ), 

        function($message) use ($email)
        {
            $message->from('doubleasam92@gmail.com');
            $message->to($email->email)->subject('Email Mesage');
        });





             // second option

    //     foreach (Member::all() as $member) {
    //             $body = $request->message;
    //             $body = str_replace('{firstName}', $member->first_name, $body);
    //             $body = str_replace('{mobilePhone}', $member->mobile_phone, $body);
    //             $body = str_replace('{email}', $member->email, $body);
    //             $email = $member->email;
    //             if (!empty($email)) {
    //                 Mail::raw($body, function ($message) use ($request, $email) {
    //                     $message->to($email);
    //                     $headers = $message->getHeaders();
    //                     $message->setContentType('text/html');
    //                      $message->setSubject($request->subject);
    //             });
    //     }
    // }



       
            
        
        
        

  
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
