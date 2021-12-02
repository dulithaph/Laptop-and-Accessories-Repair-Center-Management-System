<?php

namespace App\Http\Controllers;

use App\Models\RequestService;
use Illuminate\Http\Request;
use App\Mail\RequestMail;
use Illuminate\Support\Facades\Mail;
use DB;


class RequestServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('requestForm');
    }
    public function store(Request $request)
    {
      $data = $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'phone_number'=>'required',
            'requestservice'=>'required'
        ]);

        $requests = New RequestService();
        $requests ->name = $request->name;
        $requests ->email = $request->email;
        $requests ->phone_number = $request->phone_number;
        $requests ->requestservice = $request->requestservice;

       
       if($requests->save()==true){

        $admin_email = "hdulitha@gmail.com";

        Mail::to($admin_email)->send(new RequestMail($data));

       return redirect('home')->with('status','Your request was send successfully!');

       }else{
           echo "Error";
           return back();
       }
    
    }

    public function viewrequestform(){
        return view('requestForm');
    }
}
