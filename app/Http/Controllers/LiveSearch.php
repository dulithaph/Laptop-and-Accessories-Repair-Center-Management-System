<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use DB;
use Input;

class LiveSearch extends Controller
{
    
  


    function index()
    {
     return view('live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('stores')
       ->where('csname', 'like', '%'.$query.'%')
       ->orWhere('contactNo', 'like', '%'.$query.'%')
       ->orWhere('email', 'like', '%'.$query.'%')
       ->orWhere('item', 'like', '%'.$query.'%')
       ->orWhere('itemCode', 'like', '%'.$query.'%')
       ->orWhere('status', 'like', '%'.$query.'%')
       ->orWhere('created_at', 'like', '%'.$query.'%')
       ->orderBy('id', 'desc')
       ->get();
         
      }
      else
      {
       $data = DB::table('stores')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
        <td>'.$row->csname.'</td>
         <td>'.$row->contactNo.'</td>
         <td>'.$row->email.'</td>
         <td>'.$row->item.'</td>
         <td>'.$row->itemCode.'</td>
         <td>'.$row->status.'</td>
         <td>'.$row->created_at.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }

    

}
