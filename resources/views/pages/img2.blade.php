@extends('layouts.app')

@section('content')
<h1>{{$title ?? ''}}</h1>
    <!-- NAVIGATION CODE-->

    <div class="container">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="/">go back</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
     </button>
  
     </nav>
    <br>
      
        
    <div><h1 style="color:green">demo for bootstrap classes </h1></div> 
        
    <b>Bootstrap 4 Floating utility class</b> 
        <br> 
  
              <div class="float-left"> 
                This div floats to the left. 
             </div> 
        <br> 
        <div class="float-right"><img src="img/pick2.jpeg" class="pull-left"> 

          <blockquote>
          This div floats to the right <br>and the name is malik .do you<br> have any problem to face the hall<br> tjakjd jgfber jhsfh 
        </blockquote>
      </div> 
        <br> 
        <div class="float-none"> 
          This div does not float. 
      </div> 
    </div> 

    
@endsection