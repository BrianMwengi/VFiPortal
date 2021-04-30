<?php

namespace App\Http\Controllers;

use App\Vfi;
use App\User;
use App\Mail\VisitorContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class EditorController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:writer');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {  
        $vfis = Vfi::all();
        return view('writer',['vfis'=>$vfis,'layout'=>'show']);      
    }

    public function show($id)
    {
        Vfi::find($id);
        //$user_id = auth()->user()->id;
        //$user = User::find($user_id);
        $vfis = Vfi::all() ;
        return view('vfi',['vfis'=>$vfis,'vfi'=>$vfi,'layout'=>'show']);
    }

    public function edit($id)
    {   

        $vfi = Vfi::find($id);
        $vfis = Vfi::all() ;
        return view('edit',['vfis'=>$vfis,'vfi'=>$vfi,'layout'=>'edit']);
    }

    public function update(Request $request, $id)
    {
        $vfi = Vfi::find($id);
        $vfi->Gender = $request->input('Gender') ;
        $vfi->firstName = $request->input('firstName') ;
        $vfi->secondName = $request->input('secondName') ;
        $vfi->MaritalStatus = $request->input('MaritalStatus') ;
        $vfi->TelNo= $request->input('TelNo') ;
        $vfi->TownofResidence = $request->input('TownofResidence') ;
        $vfi->Fellowshipifattendingany = $request->input('Fellowshipifattendingany') ;
        $vfi->MinistryInvolvedin= $request->input('MinistryInvolvedin') ;
        $vfi->ChurchYouattend = $request->input('ChurchYouattend') ;
        $vfi->Profession = $request->input('Profession') ;
        $vfi->LengthofMembershipinVFi = $request->input('LengthofMembershipinVFi') ;
        $vfi->Email = $request->input('Email') ;
        $vfi->user_id = auth()->user()->id;
        $vfi->save() ;
        return redirect('/home') ;
    } 

    //Handle Contact Form
    public function showContactForm()
    {
        return view('contact');
    }

  
    public function submitContactForm(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        Mail::to('mwengibrian@gmail.com')->send(new VisitorContact($data));

        Session::flash('message', 'Thank you for your email');
        return redirect()->route('contact.show');
  }
}



