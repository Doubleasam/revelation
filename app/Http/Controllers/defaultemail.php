<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mailtrap;
use App\Member;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Mail::to('doubleasam92@gmail.com')->send(new Mailtrap());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = Member::all();
        return view ('email.email_indexthings', compact ('member'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $member = Member::all();
        return view ('email.email_create', compact ('member'));
        
            // $member = Member::all();
            // $email->firstname= Input::get('firstname');
            // $email->email =INput::get('email');
            // $email->save();


            // Mail::send('email.email', array('firstname'=>Input::get('firstname')), function($message){
            //         $message->to(Input::get('email'), Input::get('firstname'))->subject('WElcome to REvelation Manager');
            // });

            // return Redirect::to ('email.email_indexthings')->with('mesage', 'Thanks for using Revelation mannager');
        
        
        

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
