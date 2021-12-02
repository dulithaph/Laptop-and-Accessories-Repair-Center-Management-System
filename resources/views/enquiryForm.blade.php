@extends('layouts.myapp')

@section('content')

<div class="col-md-12 sm-12 mb-5 mt-3 ">
</div>
<h1>Give your valuable feedback to us...</h1>
<div class="container">
<br><br>
@foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                {{$error}}
                </div>

                @endforeach

           <!--     @if(Session::has('status'))
                <span style="color:green">{{Session::get('status')}}</span>
                @endif
-->
<form method="post" action="{{route('enquiryForm.save')}}">
@csrf
<div class="row">
<div class="col-md-6">
<div class="form-group">
    <label for="name">Full Name</label>
    <input type="text"name="name" class="form-control" id="name" placeholder="Your Name" value="{{old('name')}}" required>
  </div>
</div>
</div>

<div class="row">
<div class="col-md-4">
<div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="john.doe@gmail.com" value="{{old('email')}}" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
</div>
<div class="col-md-2">
  <div class="form-group">
    <label for="number">Phone Number</label>
    <input type="text" name="phone_number" class="form-control" id="number" placeholder="0710000000" value="{{old('phone_number')}}" required>
  </div>
  </div>
  <div class="col-md-2"></div>
  <div class="col-md-2">
  <img src="/images/thumbs_up.png" alt="Responsive image">
  </div>
  </div>

<div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label for="message">Message</label>
    <textarea name="message" class="form-control" rows="5" placeholder="Your Message" value="{{old('message')}}" required></textarea>
</div>
</div>
<div class="col-md-1"></div>
  <div class="col-md-4">
  <h3>Your feedback help others to make better shopping choices.</h3>
  </div>
</div>
<div class="row">
    <div class="col-md-6">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
  </div>
</form>






@endsection