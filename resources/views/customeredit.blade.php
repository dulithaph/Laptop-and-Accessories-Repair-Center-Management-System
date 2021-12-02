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
    

    <div class="container">
    

    <div class="row">
        <div class=" col-md-2"></div>
    <div class="jumbotron  col-md-8 "> 
        <div class="row justify-content-center "><h3>UPDATE STATUS</h3></div>
  
    <form action="/update/{{ $customer[0]->id}}" method="post" >
    @csrf

    <div class="form-group">
        <label for="exampleFormControlTextarea1">status</label>
        <input type="text" class="form-control" id="status" name="status" value="{{$customer[0]->status}}" >
      </div>

    <div class="form-group">
      <label for="exampleFormControlInput1">Customer Name</label>
    <input type="text" class="form-control" id="csname" name="csname" value="{{$customer[0]->csname}}" placeholder="customer name">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Contact Number</label>
        <input type="text" class="form-control" id="contactNo" name="contactNo"  value="{{$customer[0]->contactNo}}" placeholder="ContactNo">
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="text" class="form-control" id="email" name="email"  value="{{$customer[0]->email}}" placeholder="email">
      </div>



      <div class="form-group">
        <label for="exampleFormControlInput1">Item</label>
        <select class="form-control" name="item" id="item" value="{{$customer[0]->item}}" placeholder="Laptop Brand">
          <option value="ASUS">{{$customer[0]->item}}</option>
          <option value="HP">HP</option>
          <option value="DELL">DELL</option>
          <option value="ACER">ACER</option>
          <option value="ACER">ASUS</option>
          <option value="OTHER">OTHER</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Item Code</label>
        <input type="text" class="form-control" id="itemCode" name="itemCode" value="{{$customer[0]->itemCode}}" placeholder="item Code">
      </div>

        <button class="btn btn-secondary btn-sm" type="submit">update Data</button>
    
  </form>
</div>
<div class=" col-md-2"></div>
</div>

</div>
</body>
</html>