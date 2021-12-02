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

                <div class="col-md-4">
                    <h6><span style='color:rgb(8, 8, 8)'>IT Patner Repair Center</span><h6>
                    <h6><span style='color:rgb(8, 8, 8)'>777 First Lane</span><h6>
                    <h6><span style='color:rgb(8, 8, 8)'>Colombo</span><h6>
                         
                </div>

                <div class="col-md-4">  
                </div> 

                <div class="col-md-4">  
                </div> 
             </div>

            
             
             <div class="row  justify-content-center mt-4">
                <div class="col-md-4"> 
                    <h5> <b> Bill To </b><h6>
                        <h6><span style='color:rgb(8, 8, 8)'>{{$customer[0]->csname}}</span></h6>
                        <h6><span style='color:rgb(8, 8, 8)'>{{$customer[0]->email}}</span></h6>
                        <h6><span style='color:rgb(8, 8, 8)'>{{$customer[0]->contactNo}}</span></h6>
                </div> 
                

                 <div class="col-md-4">
                    <h5> <b> Ship To </b><h6>
                        <h6><span style='color:rgb(8, 8, 8)'>{{$customer[0]->email}}</span></h6>
                        <h6><span style='color:rgb(8, 8, 8)'>{{$customer[0]->contactNo}}</span></h6>
                 </div>

                <div class="col-md-4">
                    <h5> <b> Item Code# </b><span style='color:rgb(8, 8, 8)'>{{$customer[0]->itemCode}}</span><h5>
                        <h5> <b> Item Brand </b><span style='color:rgb(8, 8, 8)'>{{$customer[0]->item}}</span><h5>
                        <h5> <b> Submition Date </b><span style='color:rgb(8, 8, 8)'>{{$customer[0]->created_at}}</span><h5>   
                 </div>

             </div>

    
            <div class="row  mt-4">
            <div class="col-md-12">     
             <form action="{{route('insertbill')}}" method="post" >
                @csrf

                <div class="row  justify-content-center">
                <div class="col-md-4">  

                <div class="form-group">
                  <label for="exampleFormControlInput1">Item Code</label>
                  <input type="text" class="form-control" id="itemCode" name="itemCode" placeholder="" value="{{$customer[0]->itemCode}}" required>
                </div>

                

                  <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="email" value="{{$customer[0]->email}}" required>
                  </div>
                  
                </div>


                 <div class="col-md-4">
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Total Bill</label>
                    <input type="text" class="form-control" id="totalbill" name="totalbill" placeholder="Total">
                  </div>
                  
                
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Comment</label>
                  <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
                </div>
                
                 </div>



                 <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Payment</label>
                        <select class="form-control" name="payment" id="payment" placeholder="Payment">
                          <option value="PAID">PAID</option>
                          <option value="NOT PAID">NOT PAID</option>
                        </select>
                      </div>

                      <div class="from-group mt-5">
                        <div class="row  justify-content-center">
                            <div class="col-md-6">   
                        <button class="btn btn-secondary btn-sm" type="insert">Submit Bill</button>
                            </div>
                            <div class="col-md-6">   
                        <button class="btn btn-secondary btn-sm" type="insert">Send Mail</button>
                            </div>
                        </div>
                    </div>

                 </div>


                 </div>
              </form>
            </div>

            

            </div>


          </div>
      </div>
    </div>   
          

</body>
</html>