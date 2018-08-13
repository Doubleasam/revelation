<?php

namespace App\Http\Controllers;

use App\Member;
use App\Email;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $member = Member::paginate(2);
        $member = Member::all();
        return view('member.index', compact('member'));
        // return view ('member.data');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'first_name'=> 'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'gender'=> 'required',
            'marital_status'=> 'required',
            'status'=> 'required',
            'mobile_phone'=> 'required',
            'address'=> 'required',
            'email'=> 'required',
            'dob'=> 'required',
            'photo'=> 'required | image|mimes:jpeg,png,jpg,gif,svg|max:700',
        ]);
         

        if ($request->hasFile('photo')) {
            // $request->photo->store('public');
            $imageName= $request->photo->store('public');
        }

        $member = new Member;
        $member->first_name = $request->first_name;
        $member->middle_name = $request->middle_name;
        // $member->photo = $request->photo;
        $member->photo = $imageName;
        $member->last_name = $request->last_name;
        $member->gender = $request->gender;
        $member->marital_status = $request->marital_status;
        $member->status = $request->status;
        $member->mobile_phone = $request->mobile_phone;
        $member->address = $request->address;
        $member->email = $request->email;
        $member->dob = $request->dob;
        $member->save();

        return redirect (route('member.index'));
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
        $member = Member::where('id', $id)->get();
        return view ('member.edit', compact('member'));
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
          $this->validate($request, [
            'first_name'=> 'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'gender'=> 'required',
            'marital_status'=> 'required',
            'status'=> 'required',
            'mobile_phone'=> 'required',
            'address'=> 'required',
            'email'=> 'required',
            'dob'=> 'required',
            'photo'=> 'required | image|mimes:jpeg,png,jpg,gif,svg|max:700',
        ]);
         

        if ($request->hasFile('photo')) {
            // $request->photo->store('public');
            $imageName= $request->photo->store('public');
        }

        $member = Member::find($id);
        $member->first_name = $request->first_name;
        $member->middle_name = $request->middle_name;
        // $member->photo = $request->photo;
        $member->photo = $imageName;
        $member->last_name = $request->last_name;
        $member->gender = $request->gender;
        $member->marital_status = $request->marital_status;
        $member->status = $request->status;
        $member->mobile_phone = $request->mobile_phone;
        $member->address = $request->address;
        $member->email = $request->email;
        $member->dob = $request->dob;
        $member->save();

        return redirect (route('member.index'));
        // return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Member::where ('id', $id)->delete();
        // return redirect()->back();
        return redirect (route ('member.index'));
    }
}
