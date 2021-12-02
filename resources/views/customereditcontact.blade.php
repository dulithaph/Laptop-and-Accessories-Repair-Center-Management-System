<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>Document</title>

 @extends('layouts.myapp')
</head>
<body>

    <div class=" col-md-12 mt-5"></div>
    <div class=" col-md-12 mt-5"></div>
    <div class=" col-md-12 mt-5"></div>
    <div class=" col-md-12 mt-5"></div>
    
    

    <div class="container">
    

    <div class="row">
        <div class=" col-md-2"></div>
    <div class="jumbotron  col-md-8  text-light bg-secondary"> 
        <div class="row justify-content-center "><h3 >UPDATE CONTACT</h3></div>
  
        <form action="/updatetwo/{{ $customer[0]->id}}" method="post" >
    @csrf


    <div class="form-group">
        <label for="exampleFormControlInput1">Contact Number</label>
        <input type="text" class="form-control" id="contactNo" name="contactNo"  value="{{$customer[0]->contactNo}}" placeholder="ContactNo">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="text" class="form-control" id="email" name="email"  value="{{$customer[0]->email}}" placeholder="email">
      </div>

      <div class="container mt-5">
        <div class="row justify-content-center">
        <button class="btn btn-primary " type="submit">Update</button>
        </div>
      </div>
  </form>
</div>
<div class=" col-md-2"></div>
</div>

</div>
</body>
</html>