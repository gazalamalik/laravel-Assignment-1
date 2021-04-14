@extends('layouts.app')

@section('content')
<br><br>
<span class="border border-light">

<div class="jumbotron text-center border border-light " >
   <h1>Hey Welcome User click login if new user then please click ragister button</h1>
       <p>this is the laravel application form page </p>
       <p>  
              <a class="btn btn-primary btn-1g" href="/login" role="button">Login</a>
              <a class="btn btn-primary btn-1g" href="/ragister" role="button">Ragister</a>
              <a class="btn btn-primary btn-1g" href="/index" role="button">Cancel</a>
        </p>
</div>
</span>
    
 @endsection