@extends('layouts.app')

@section('content')
  <h1><center>{{$title ?? ''}} </center> </h1>
    <!-- NAVIGATION CODE-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.html"><b>go back</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>
<br>

<!-- login code-->


  <div class="container">
    <div class="row">
      
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            {!! Form::open(['url' => 'foo/bar']) !!}
  
          <!-- <form class="form-signin">
          -->              <div class="form-label-group">
                Email* <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                
              </div>
              <br>

              <div class="form-label-group">
                Password*:<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
               
              </div><br>

              <div class="custom-control custom-checkbox mb-3">
                Remember password:<input type="checkbox" class="custom-control-input" id="customCheck1">
                
              </div><br>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit"><a href="index.html"style="color: black;">Sign in</button>

              <br>for new user<a href="ragister.html">click here</a>
             <hr class="my-4"> 
              
              
            

            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
   
    
  @endsection
