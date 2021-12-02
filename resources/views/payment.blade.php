@extends('layouts.myapp')

@section('content')
<div class=" col-md-12 mt-5" ></div>


<div class="container mt-4">
  <div class="row justify-content-center">

 <div class=" col-md-3 mt-3" >
 </div>
<div class=" col-md-9 mt-5" ></div>
</div>
</div> 

<br>
  

<div class="container">
  <div class="row justify-content-center">

  <div class=" col-md-4 mt-2" >
  @if(isset($details))
  @foreach($details as $storee)
      <h2> Hi  <b> {{$storee->csname}} </b> ,</h2> <hr> <br>
  <h2>My details</h2>
  <h6>Item : {{$storee->item}}</h6>
  <h6>Item Code : {{$storee->itemCode}}</h6>
  </div>

<div class="col-md-4 mt-4"> 
  <h6>WE provide Best service</h6> <hr> <br>
  <h2>Contacts</h2>
  <h6>Phone No : {{$storee->contactNo}}</h6>
  <h6>Email : {{$storee->email}}</h6>
</div>

<div class="col-md-4 mt-4"> 
  <h6>Best Customer Service</h6> <hr> <br>
  <h2>Submit Date</h2>
  <h6>Submition :{{$storee->created_at}}</h6>
  <h6>Details Updated : {{$storee->updated_at}}</h6>
</div>

</div>
</div>




<div class="container mt-4">
  <div class="row">
     

        <div class="card col-md-12 " style="width: 18rem;">
          <div class="row  justify-content-center"> 
            <div class="col-md-2  mt-3"><h4 class="text-secondary" >Current Status</h4> <hr></div>
              <div class="col-md-10"></div>    
          </div> 

 
          <div class="row  justify-content-center">
              <div class="col-md-2">
              <h6> Details Updated : <br> <br> <span style='color:rgb(96, 83, 173)'> {{$storee->updated_at}} </span></h6> 
              </div>

              <div class="col-md-2"></div>

              <div class="col-md-8"> 
                <h6> STATUS : <b>  {{$storee->status}}</h6>
          
              </div>
          </div>   

          <div class=" col-md-12 mt-5" ></div>
              

        </div>
        </div>

        <div class=" col-md-12 mt-5" > 
          <div class="row ">   
        <form>
        <button> <a href="click_edittwo/{{$storee->id}}"  class="btn btn-secondary btn-sm">Update Your Contact</a> </button>
        </form>
        </div>
        </div>


  @endforeach 
    
  @endif






 