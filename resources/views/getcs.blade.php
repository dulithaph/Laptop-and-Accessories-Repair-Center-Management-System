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

    <div class=" col-md-12 mt-5">  
    </div>
    

    <div class="container mt-4">
    <div class="row">
       

          <div class="card col-md-12 " style="width: 18rem;">
            <div class="row  justify-content-center"> 
                <div class="col-md-4"></div>    
                 <div class="col-md-5  mt-3"><h4 class="text-secondary" >We Provide better Service</h4> <hr></div>
                <div class="col-md-3 mt-2"><h1>INVOICE</h1></div>
            </div> 

   
            <div class="row  justify-content-center">
                <div class="col-md-6">
                   <p><h5> Customer Name:  <span style='color:rgb(97, 96, 95)'>{{$customer[0]->csname}}</span><h6>
                        <h6>Item: <span style='color:rgb(97, 96, 95)'>{{$customer[0]->item}}</span><h6>
                         <h6>Item Code: <span style='color:rgb(97, 96, 95)'>{{$customer[0]->itemCode}}</span><h6>
                            <h6>Date: <span style='color:rgb(97, 96, 95)'>{{$customer[0]->created_at}}</span><h6>
                                <h6>Status: <span style='color:rgb(97, 96, 95)'>{{$customer[0]->status}}</span><h6>
                </div>

                <div class="col-md-4"> 

                     <p>{{$customer[0]->item}}</p>
                     <p>{{$customer[0]->created_at}}</p> </div>

            </div>
            
    
 
