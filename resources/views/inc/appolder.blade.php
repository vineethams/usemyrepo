<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','LSAPP')}}</title>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
        
    </head>
    <body>
      @include('inc.navbar')
      <div class="container">
         @include('inc.messages')
         @yield('content')
      </div> 
       <script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
      <script>CKEDITOR.replace('article-ckeditor');</script>


    </body>
</html>