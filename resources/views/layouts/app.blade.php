<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('navStyle.css')}}">
   
    <title>{{config('app.name', 'Bootstrap_Assignment')}}</title> 

  </head>

    <body>
      @include('inc.navbar')
      
      <div>
         @yield('content')
      </div>
    </body>
</html>