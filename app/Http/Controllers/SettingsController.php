<?php

namespace App\Http\Controllers;

use App\Setting;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting:: all();
        return view ('settings.create', compact ('settings'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       //  Setting::where('setting_key', 'church_name')->update(['setting_value' => $request->church_name]);
       //  Setting::where('setting_key', 'church_email')->update(['setting_value' => $request->church_email]);
       //  Setting::where('setting_key', 'church_website')->update(['setting_value' => $request->church_website]);
       //  Setting::where('setting_key', 'company_address')->update(['setting_value' => $request->company_address]);
       // Setting::where('setting_key', 'church_mobile_phone')->update(['setting_value' => $request->church_mobile_phone]);
       
      

       $settings= Setting::find($id);
        $settings->church_name = $request->church_name; 
        $settings->church_website = $request->church_website;
        $settings->church_address = $request->church_address;
        $settings->church_mobile_phone = $request->church_mobile_phone;
        $settings->save();

         return redirect (route('settings.index'));
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
       //  Setting::where('setting_key', 'church_name')->update(['setting_value' => $request->church_name]);
       //  Setting::where('setting_key', 'church_email')->update(['setting_value' => $request->church_email]);
       //  Setting::where('setting_key', 'church_website')->update(['setting_value' => $request->church_website]);
       //  Setting::where('setting_key', 'company_address')->update(['setting_value' => $request->company_address]);
       // Setting::where('setting_key', 'church_mobile_phone')->update(['setting_value' => $request->church_mobile_phone]);
       // return redirect (route('settings.index'));



        $settings= Setting::find($id);
        $settings->church_name = $request->church_name; 
        $settings->church_website = $request->church_website;
        $settings->church_address = $request->church_address;
        $settings->church_mobile_phone = $request->church_mobile_phone;
        $settings->save();

         return redirect (route('settings.index'));
      
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
