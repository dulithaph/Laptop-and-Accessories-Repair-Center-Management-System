<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Mail\FeedbackMail;
use Illuminate\Support\Facades\Mail;
use DB;


class EnquiryController extends Controller
{
  public function index()
  {
      return view('enquiryForm');
  }

  public function store(Request $request)
  {
    $data = $this->validate($request, [
          'name'=>'required',
          'email'=>'required',
          'phone_number'=>'required',
          'message'=>'required'
      ]);

      $enquiry = New Enquiry();
      $enquiry ->name = $request->name;
      $enquiry ->email = $request->email;
      $enquiry ->phone_number = $request->phone_number;
      $enquiry ->message = $request->message;

     
     if($enquiry->save()==true){

      $admin_email = "hdulitha@gmail.com";

      Mail::to($admin_email)->send(new FeedbackMail($data));

     return redirect('home')->with('status','Your feedback was send successfully!');

     }else{
         echo "Error";
         return back();
     }
  
  }

 public function viewfeedbackform(){
     return view('enquiryForm');
 }

public function customerfeedbacks(){
  return view('enquiryview');
} 

public function customers(){
  $customer = DB::select('select * from enquiries');
  return view('enquiryview',['customer'=>$customer]);
}

public function myfeedbacks(){
return view('myfeedbacks');
}

public function viewfeedbacks(Request $request){
//$enquiry = Enquiry::where('email',$enquiry->email);
//$enquiry = New Enquiry();
//$enquiry ->email = $request->email;
$email=$request->email;
$data = Enquiry::find($email);
$data->email=$email;
$data=Enquiry::all();
return view('viewfeedbacks')->with('enquiries',$data);
}



/*new*/

public function insertds(Request $details){
       
    $config = ['table' => 'stores','length'=>5,'prefix'=>'22'];
    $itemcode = IdGenerator::generate($config);

    Store::create(['id'=>$itemcode,'csname'=>$details->csname,'contactNo'=>$details->contactNo,'email'=>$details->email,'item'=>$details->item,'itemCode'=>$itemcode,'status'=>$details->status]);
    return redirect('storeData')->with('status','Successfuly Inserted');
    
}



public function get_customercode(){
     
  //  ['stores'=>$itemcode['itemCode']]
   
    $itemcode = Store::latest()->first();
    $stores = ($itemcode['id']);

    return redirect('storeData')->with('status',$stores);
  }



public function viewStoreUs(){
    return view('storeone');
}


public function viewcustomer(){
    return view('customeredit');
}

public function viewgetdata(){
    return view('getdata');
}


public function getpayment(){
  return view('payment');
}

public function getcs(){
return view('getcs');
}




public function getData(){
   //$stores =  Store::whereDate('created_at', Store::raw('CURDATE()'))->get();
    //$stores = Store::where('csname','anjali')->get();
    // return $students;
    $stores = Store::all();
    return view('getstore')->with(['stores'=>$stores]);
}


public function getPhonesData(){
     $phonesdata = Store::where('item','OTHER')->get();
     
     return view('getstore')->with(['stores'=>$phonesdata]);
 }



 public function getlapdata(){
    $lapdata = Store::where('item','laptop')->get();
      return view('getstore')->with(['stores'=>$lapdata]);
  }



 



 public function gettodaydata(){
   $todaydata = Store::where('created_at','>=',Carbon::now()->subdays(1))->get();
     return view('getstore')->with(['stores'=>$todaydata]);
 }




 public function getlastweek(){
    $previous_week = strtotime("-1 week +1 day");
    $start_week = strtotime("last sunday midnight",$previous_week);
    $end_week = strtotime("next saturday",$start_week);
    $start_week = date("Y-m-d",$start_week);
    $end_week = date("Y-m-d",$end_week);
   
    $lastweek = Store::whereBetween('created_at', [$start_week, $end_week])->get();
    return view('getstore')->with(['stores'=>$lastweek]);
 }

 public function last10days(){
    $last_15_days = Store::where('created_at','>=',Carbon::now()->subdays(10))->get();
    return view('getstore')->with(['stores'=>$last_15_days]);
 }


 public function edit_function($id)
  {

   $customer = DB::select('select * from stores where id = ?',[$id]);
   return view('customeredit',['customer'=>$customer]);
  }

  public function edit_functiontwo($id)
  {

   $customer = DB::select('select * from stores where id = ?',[$id]);
   return view('customereditcontact',['customer'=>$customer]);
  }



  public function bill_function($id)
  {

   $customer = DB::select('select * from stores where id = ?',[$id]);
   return view('customerbill',['customer'=>$customer]);
  }



  public function update_function(Request $request,$id)
  {
     $csname = $request->input('csname');
     $contactNo = $request->input('contactNo');
     $email = $request->input('email');
     $item = $request->input('item');
     $itemCode = $request->input('itemCode');
     $status = $request->input('status');
     //$created_at = $request->input('created_at');

     DB::update('update stores set csname = ?, contactNo = ?, email = ?, item = ?, itemCode = ?, status = ?  where id = ?'
    ,[$csname, $contactNo, $email, $item, $itemCode, $status,  $id]);

    return redirect('getDa')->with('status','Data Updated');
   
  }

  public function update_functiontwo(Request $request,$id)
  {
     
     $contactNo = $request->input('contactNo');
     $email = $request->input('email');
     
     //$created_at = $request->input('created_at');

     DB::update('update stores set  contactNo = ?, email = ?  where id = ?'
    ,[ $contactNo, $email,  $id]);

    return redirect('getpayment')->with('status','Data Updated');
   
  }


  

}






   
