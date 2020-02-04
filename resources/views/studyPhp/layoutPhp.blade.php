<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

    <title>@yield('title')</title>
    <style media="screen">
      header{width: 100%; text-align: left; margin-bottom: 5px; background: #b5c5c7;}
    </style>
  </head>
    <body>
  <div class="container">


    <header>
      <button type="button" class="btn" name="button" onclick="window.location.href='/'">بازگشت</button>
    </header>
    <main>
      @yield('content')
    </main>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


  </body>
</html>
