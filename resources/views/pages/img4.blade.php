@extends('layouts.app')

@section('content')
<h1>{{$title ?? ''}}</h1>
    <!-- NAVIGATION CODE-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">go back</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
</nav>
<br>


<!-- IMAGES GAILERY CODE-->
<div class="container">
    <div class="row">
            
            
        <div class="float-right">
              <img src="img/pick4.jpeg"/ class="center-block"> 
          
              <blockquote>
                 This div floats to the right <br>and the name is malik .do you<br> have any problem to face the hall<br> tjakjd jgfber jhsfh 
              </blockquote>
        </div> 
    </div>
</div>

 <br><br>
 @endsection