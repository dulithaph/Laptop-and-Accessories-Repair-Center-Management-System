@extends('layouts.myapp')

@section('content')
<div class=" col-md-12 mt-4" ></div>
<div class="container mt-3">
<div class="row justify-content-center">
<div class=" col-md-9 mt-4" ></div>
</div>
</div>
<br>
<div class=" col-md-12 mt-2" ></div>
<div class="container mt-2">
<div class="row justify-content-center">

<div class=" col-md-6 mt-2" >
<h1><b>Your Feedbacks...</h1> <hr>
</div></div>
</div>
@if(isset($details))
  @foreach($details as $enquirye)
<div class="container">
  <div class="row justify-content-center">
  <div class=" col-md-2 mt-2"></div>

</div>
</div>

<div class="container mt-4">
  <div class="row">
        <div class="card col-md-12 " style="width: 18rem;">
        <div class="row  justify-content-center"> </div>
          <div class="row  justify-content-center"> 
            
              <div class="col-md-12 mt 5">
                <h6>Submitted Date and Time: {{$enquirye->created_at}}</h6>
              </div>    
          </div>  
          <div class="row  justify-content-center">
              <div class="col-md-12 mt-4"> 
                <h6>Feedback: {{$enquirye->message}}</h6>
          
              </div>
          </div>   

          <div class=" col-md-12 mt-4" ></div>
        </div>
        </div>
        </div>


  @endforeach 
    
  @endif