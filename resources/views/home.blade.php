@extends('layouts.app')

@section('content')
<div class="col-md-12 sm-12 mb-4 mt-4 ">
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                
            </div>

<!--<input type="submit" class="btn btn-dark" value="Send Feedback"/>-->

<div class="col-md-12 sm-12 mb-2 mt-2 "></div>
    <div class="row justify-content-center">
          <div class="row justify-content-center  col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="/images/feedback.jpg" class="card-img-top" alt="index" style="height: 12rem">
                <div class="card-body">
                  <h5 class="card-title">To send a feedback, Click</h5>
                  <p class="card-text"></p>
                  <a href="{{route('viewfeedbackform')}}" class="btn btn-secondary">Feedback</a></br></br>
                </div>
              </div>
              <div class="card mt-5" style="width: 18rem; height:21rem">
                <img src="/images/myfeedback.png" class="card-img-top" alt="indexe" style="height: 12rem">
                <div class="card-body">
                  <h5 class="card-title">To view your feedbacks,</h5>
                  <form action="/searchfeedback" method="POST" role="searchfeedback">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="email" class="form-control" name="email" placeholder="Email address"> <span class="input-group-btn">
            <button type="submit" class="btn btn-secondary ">
              Submit
            </button>
        </span>
    </div>
</form>
                
                </div>
              </div>
        </div>

          <div class="row justify-content-center  col-md-6">
            <div class="card" style="width: 18rem;">
                <img src="/images/img1.jpg" class="card-img-top" alt="index" style="height: 12rem">
                <div class="card-body">
                  <h5 class="card-title">To view your item repair status,</h5>
                  
  <form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q" placeholder="Enter your item code"> <span class="input-group-btn">
            <button type="submit" class="btn btn-secondary ">
              Submit
            </button>
        </span>
    </div>
</form>
 </div>
</div>
<div class="card mt-5" style="width: 18rem;">
                <img src="/images/service.jpg" class="card-img-top" alt="indexe" style="height: 12rem">
                <div class="card-body">
                  <h5 class="card-title">To request a servics, Click</h5>
                  <p class="card-text"></p>
                  <p class="card-text"></p>
                  <a href="{{route('viewrequestform')}}" class="btn btn-secondary">Request</a></br></br>
                </div>
              </div>
 </div>
 
</div>
        </div>
    </div>
</div>
@endsection

