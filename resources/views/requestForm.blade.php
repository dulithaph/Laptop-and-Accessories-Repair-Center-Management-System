@extends('layouts.myapp')

@section('content')

<div class="col-md-12 sm-12 mb-5 mt-3 ">
</div>
<h1>Let us know your need...</h1>
<div class="container">

@foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                {{$error}}
                </div>

                @endforeach

<form method="post" action="{{route('requestForm.save')}}">
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
  <div class="col-md-3"></div>
  <div class="col-md-2">
  <img src="/images/request.png" alt="Responsive image" style="width:6rem">
  </div>
  </div>

<div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label for="requestservice">Request a Service</label>
    <textarea name="requestservice" class="form-control" rows="5" placeholder="Your Request" value="{{old('requestservice')}}" required></textarea>
</div>
</div>
<div class="col-md-2"></div>
  <div class="col-md-4">
  <h3>We are ready to fullfill your needs with the best of our ability.</h3>
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