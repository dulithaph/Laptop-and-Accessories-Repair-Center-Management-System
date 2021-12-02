@extends('layouts.myapp')

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  </head>
  <body>
  
 

<div class="jumbotrone bg" style="height: 850px; padding-top: 150px;">

<div class="container"> 


<div class="col-md-12 sm-12  ">
</div>


    <div class="row justify-content-center">

         <div class="row justify-content-center  col-md-4">

            <div class="card" style="width: 18rem;">
                <img src="pic12.jpg" class="card-img-top" alt="index">
                <div class="card-body">
                  <h5 class="card-title">Repair center Orders</h5>
                  <p class="card-text"></p>
                  <a href="{{route('gettodayda')}}" class="btn btn-secondary">Today Orders</a>
                <a href="{{route('getlastweekda')}}" class="btn btn-secondary">Last Week</a> </br></br>
                
                </div>
              </div>

              <div class="card mt-5" style="width: 18rem;">
                <img src="tt22.jpg" class="card-img-top" alt="indexe">
                <div class="card-body">
                  <h5 class="card-title">Top Brands</h5>
                  <p class="card-text"></p>
                <a class="btn btn-secondary"  href="{{route('getDa')}}">Laptops</a>
                  <a class="btn btn-secondary" href="{{route('getphonesda')}}">Others</a>
                </div>
              </div>
               
        </div>
           

      

        <div class="row justify-content-center  col-md-4">

          <div class="card" style="width: 18rem; height: 19rem;">
              <img src="pic13.png" class="card-img-top" alt="index">
              <div class="card-body">
                <h5 class="card-title">Bill & Discount</h5>
                <p class="card-text"></p>
                <a href="{{route('billsearch')}}"class="btn btn-secondary">Create Bill</a>
              <a href="{{route('getlastweekda')}}" class="btn btn-secondary">Discount</a> </br></br>
              
              </div>
            </div>

            <div class="card mt-5" style="width: 18rem;">
              <img src="phones.jpg" class="card-img-top" alt="indexe">
              <div class="card-body">
                <h5 class="card-title">Accesaries</h5>
                <p class="card-text"></p>
              <a class="btn btn-secondary"  href="{{route('getDa')}}">Hardware</a>
                <a class="btn btn-secondary" href="{{route('getphonesda')}}">Software</a>
              </div>
            </div>
             
      </div>
         

      <div class="row justify-content-center  col-md-4">

        <div class="card" style="width: 18rem; height: 19rem;">
            <img src="pic18.jpg" class="card-img-top" alt="index">
            <div class="card-body">
              <h5 class="card-title">Search Bills</h5>
              <p class="card-text"></p>
              <form action="/search" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" class="form-control" name="q" placeholder="Enter item code"> <span class="input-group-btn">
                        <button type="submit" class="btn btn-secondary ">
                          Submit
                        </button>
                    </span>
                </div>
            </form>
            
            </div>
          </div>

          <div class="card mt-5" style="width: 18rem;">
            <img src="pic4.png" class="card-img-top" alt="indexe">
            <div class="card-body">
              <h5 class="card-title">Available ITEMS</h5>
              <p class="card-text"></p>
            <a class="btn btn-secondary"  href="{{route('getDa')}}">Check</a>
              <a class="btn btn-secondary" href="{{route('getphonesda')}}">All</a>
            </div>
          </div> 


      </div>  



        
        
           
         

    </div>

</div>
</div>



