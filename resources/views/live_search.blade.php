



    @extends('layouts.myapp')
    
 
  
    @section('content') 
  <div>

    <div class=" col-md-12 mt-5"></div>
    
    

    <div class=" col-md-12 mt-5">
      <h3 align="center">Customer Data
      </h3>
    </div>

   <div class="panel panel-default">
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Customer Data" />
     </div>
     
     <div class="table-responsive">
      <h3 align="center">Total Data : <span id="total_records"></span><br>
        <div class="row justify-content-center">
          <div class="col-md-6">
          <hr>  
           <a class="btn btn-secondary btn-sm" href="{{route('getDa')}}">Edit CS Data</a>
          <hr>
          </div>
           
          <div class="col-md-6">
            <hr>
            <a class="btn btn-secondary btn-sm" href="{{route('getdata')}}">More Option</a> 
            <hr>  
          </div>
          </div> </h3>

      <table class="table table-striped table-bordered">
       <thead>
        <tr>
            <th bgcolor ="LightGray">Name</th>
            <th>number</th>
            <th>email</th>
            <th>item</th>
            <th bgcolor ="LightGray">itemCode</th>
            <th>status</th>
            <th>Date</th>
        </tr>
       </thead>
       <tbody>

       </tbody>
      </table>
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
   url:"{{ route('live_search.action') }}",
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