<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    

    <title>IT Patner</title>
    <style>
        body, html {
          height: 100%;
          margin: 0;
        }
        
        .bg {
          /* The image used */
          background-image: url("pic17.png");
        
          /* Full height */
          height: 100%; 
        
          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
        </style>




</head>
<body class="bg">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">IT Patner Repair Center</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav mr-auto">
                @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                        @else
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('storeData') }}">Tech Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('storeData') }}">Shop Store</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    
                @endif
                
              </ul>
              <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>   
    </div>
    <div class="container ">
        @yield('content')
    </div>

<script src= "{{asset('js/app.js')}}"></script>
<script src="{{ asset('js/sweetalert.js')}}"></script> 





<script>
 @if (session('status'))
 const el = document.createElement('div')
el.innerHTML = " CUSTOMER  <a href='{{route('getcscode')}}'>code</a>    SendMail  <a href='{{route('sendbill')}}'>send</a>"

   swal({
  title: '{{session('status')}}',
  //text: " ",
  icon: "success",
  button: "OK",
  content: el,
   });
                        
                    @endif

</script>
@yield('scripts')

</body>
</html>