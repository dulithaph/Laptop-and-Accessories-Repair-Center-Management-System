@extends('layouts.myapp')
    
 
  
@section('content') 
<div>

<div class=" col-md-12 mt-5"></div>



<div class=" col-md-12 mt-5">
  <h3 align="center">Create Invoice
  </h3>
</div>

<div class="panel panel-default">
<div class="panel-body">
 <div class="form-group">
  <input type="text" name="search" id="search" class="form-control" placeholder="Enter Item Code" />
 </div>
 
 <div class="table-responsive">
  <h3 align="center">Total Data : <span id="total_records"></span><br>
    </h3>

    
   <div class="container justify-content-center" >
  <table class="table table-striped table-bordered">
   <thead>
    <tr>
        <th bgcolor ="LightGray">Name</th>
        
        <th bgcolor ="LightGray">itemCode</th>
        
        <th>Create Bills</th>
    </tr>
   </thead>
   <tbody>

   </tbody>
  </table>
   </div>
    

 </div>
</div>    
</div>
</div>




<script>
$(document).ready(function(){

fetch_customer_data();

function fetch_customer_data(query = '')
{
$.ajax({
url:"{{ route('bill_search.action') }}",
method:'GET',
data:{query:query},
dataType:'json',
success:function(data)
{
$('tbody').html(data.table_data);
$('#total_records').text(data.total_data);
}
})
}

$(document).on('keyup', '#search', function(){
var query = $(this).val();
fetch_customer_data(query);
});
});
</script>
@endsection