<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Invoice;
use App\Models\Enquiry;
use App\Models\User;
use App\Models\lastid;
use Carbon\Carbon;
use DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Input;
use Redirect;


class storeus extends Controller
{
    public function insertds(Request $details){
       
        $config = ['table' => 'stores','length'=>5,'prefix'=>'22'];
        $itemcode = IdGenerator::generate($config);

        Store::create(['id'=>$itemcode,'csname'=>$details->csname,'contactNo'=>$details->contactNo,'email'=>$details->email,'item'=>$details->item,'itemCode'=>$itemcode,'status'=>$details->status]);

        return redirect('storeData')->with('status','Successfuly Inserted');
          
    }

    public function insertbill(Request $details){
       

      Invoice::create(['itemCode'=>$details->itemCode,'email'=>$details->email,'totalbill'=>$details->totalbill,'comment'=>$details->comment,'payment'=>$details->payment]);

      return Redirect::back()->with('status','Successfuly Inserted');
        
  }


  public function sendbill(Request $request){

    
    $detail = [
      'title'=>'Confirming Payment',
       'body'=>'Your Payment is Confirmed'
  ]; 
  

  \Mail::to('hdulitha@gmail.com')->send(new \App\Mail\BillsMail($detail));
   
    return redirect('storeData'); 

  }


    
    public function get_customercode(){
         
      //  ['stores'=>$itemcode['itemCode']]
       
        $itemcode = Store::latest()->first();
        $email = Store::latest()->first();
        $stores = ($itemcode['id']);
        $mail = ($email['id']);
        
        
        $detail = [
          'title'=>' Below is your item code.'  ,
           'body'=>$email['email'] ,
           'stores'=>$itemcode['itemCode']
      ];
      
      
      \Mail::to($email['email'])->send(new \App\Mail\TestMail($detail));

        return redirect('storeData')->with('status',$stores);
      }



    public function viewStoreUs(){
        return view('storeone');
    }

    public function viewNew(){
      return view('new');
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


    public function search(){
        $q = Input::get ( 'q' );
        $storee = Store::where('itemCode','LIKE','%'.$q.'%')->orWhere('email','LIKE','%'.$q.'%')->get();
        if(count($storee) > 0)
            return view('payment')->withDetails($storee)->withQuery ( $q );
        else return view ('payment')->withMessage('No Details found. Try to search again !');
    }

    
    public function searchfeedback(){
      $email = Input::get ( 'email' );
      $enquirye = Enquiry::where('email','LIKE','%'.$email.'%')->get();
      if(count($enquirye) > 0)
          return view('myfeedbacks')->withDetails($enquirye)->withQuery ( $email );
      else return view ('myfeedbacks')->withMessage('No Details found. Try to search again !');
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
