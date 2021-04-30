<?php

namespace App\Http\Controllers;

use App\Vfi;
use App\User;
use App\Exports\VfisExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    } 

    /**
     * Show the application admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     */

    public function index()
    {         
        //$user_id = auth()->user()->id;
        //$user = User::find($user_id);
        $vfis = Vfi::all();
        return view('admin', ['vfis'=>$vfis,'layout'=>'show']);    
    }

     public function show($id)
     {
        Vfi::find($id);
        //$user_id = auth()->user()->id;
        //$user = User::find($user_id);
        $vfis = Vfi::all() ;
        return view('vfi',['vfis'=>$vfis,'vfi'=>$vfi,'layout'=>'show']);
    }

    public function create()
    {
       $vfis = Vfi::all() ;
       return view('create',['vfis'=>$vfis,'layout'=>'create']);
    }

    public function store(Request $request)
    {  $messages = [];
       $this->validate($request, [
           'TelNo' => 'required|regex:/(0)[0-9]{9}/',
           'LengthofMembershipinVFi'=> 'required|integer',
           'firstName'=> 'required|unique:v_fis| |min:2',
           'secondName'=> 'required|unique:v_fis| |min:2',
           'Email'=> 'required|unique:v_fis| |email',
         ], $messages);
    
        $vfi = new Vfi() ;
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
        $vfi->save();
        
        Session::flash('message', 'Thank you for your response!');
        
        return redirect('/');
       }

       public function statusindex()
       {
           $vfis = Vfi::all();
           return view('vfis',compact('vfis'));
       }

       public function changeStatus(Request $request)
       {
           $vfi = Vfi::find($request->user_id);
           $vfi->status = $request->status;
           $vfi->save();
       
           return response()->json(['success'=>'Status change successfully.']);
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

     //Export VFi data
     public function export()
     {
        return Excel::download(new VfisExport(), 'vfis.xlsx');
     }
}
