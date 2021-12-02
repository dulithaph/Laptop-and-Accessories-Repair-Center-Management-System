
@extends('layouts.myapp')


<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  </head>
  <body>
  
 

<div class="jumbotrone bg" style="height: 850px; padding-top: 150px;">

<div class="container"> 
<div class="col-md-12 sm-12  mt-2 ">
</div>

    <div class="row justify-content-center ">

        <div class="col-md-6 ">
            <div class="card">
                <div class="card-body">
                  
                   
                    <form action="{{route('insertds')}}" method="post" >
                        @csrf
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Customer Name</label>
                          <input type="text" class="form-control" id="csname" name="csname" placeholder="customer name">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Contact Number</label>
                            <input type="text" class="form-control" id="contactNo" name="contactNo" placeholder="ContactNo">
                          </div>

                          <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email">
                          </div>

                          <div class="form-group">
                          <label for="exampleFormControlInput1">Item</label>
                          <select class="form-control" name="item" id="item" placeholder="Laptop Brand">
                            <option value="ASUS">ASUS</option>
                            <option value="HP">HP</option>
                            <option value="DELL">DELL</option>
                            <option value="ACER">ACER</option>
                            <option value="OTHER">OTHER</option>
                          </select>
                        </div>

                          
                        
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">status</label>
                          <textarea class="form-control" id="status" name="status" rows="3"></textarea>
                        </div>
                        <div class="from-group">
                            <button class="btn btn-secondary btn-sm" type="insert">insert</button>
                        </div>
                      </form>
                </div>
            </div>
           </div>

          
           
          <div class=" col-md-6">
             
            <div class="row justify-content-center text-white bg-dark">
              <h1>Repair center</h1>
            </div>

            <div class="row justify-content-center mt-5">
              
            </div>
            

            <div class="row justify-content-center mt-5">
              <div class="card mt-4" style="width: 18rem;">
                <img src="pic7.png" class="card-img-top" alt="indexe">
                <div class="card-body">
                  <h5 class="card-title">Options</h5>
                  <p class="card-text"></p>
                  <hr>  
                  <a class="btn btn-secondary btn-sm" href="{{route('livesearch')}}">Get all details</a>
                  
                  <a class="btn btn-secondary btn-sm" href="{{route('getdata')}}">More option</a>
                 <hr>
                 <hr>
                 
                <hr>  
                </div>
              </div>
              
            </div>
  
              
            

            
             
            

    </div>

    </div>
</div>
  </body>
  