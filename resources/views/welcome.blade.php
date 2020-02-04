<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
          *{box-sizing: border-box;}
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                margin: 0;
            }



            .flex-center {
                width: 100%;
                align-items: center;
                float: right;
                justify-content: center;

            }

            .position-ref {
                position: relative;
            }

            .top-right {
                width:98%;
                height: 35px;
                line-height: 35px;
                margin: 5px 1%;
                position:relative;
                float: right;
                text-align: right;
                background: #dadada;
                border-radius: 3px 3px 2px 2px;
            }

            .content {
                width: 98%;
                margin: 15px 1%;
                text-align: center;
                background: #ecf8ff;
                float: right;
                padding: 10px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .studyH1{background: #eaebe8;border-radius: 3px;}
        </style>
    </head>
    <body>
        <div class="flex-center">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif





            <div class="content">
              <div class="">
                @guest
                    <button type="button" name="button" onclick="window.location.href='/register'">SABT</button>
                  @else
                    <button type="button" name="button" onclick="window.location.href='/register'">exit</button>
                @endguest
                <br>
                @auth
                    {{ auth()->user()->name }}
                @endauth

              </div>
              <div class="">
                <br>
                <hr><br>
                    <a href="/email">ارسال ایمیل</a>
                <br><hr>
              </div>

                <div class="">
                  <button type="button"  onclick="window.location.href='{{ route('shop.login') }}'">ورود به فروشگاه</button>
                  <button type="button"  onclick="window.location.href='{{ route('shop.register') }}'">ثبت فروشگاه</button>

                </div>
                <br><hr>
                <div class="studyFlex">
                  <h1 class="studyH1">آمورش flex</h1>
                  <button type="button" class="btn btn-info"  onclick="window.location.href='/flex'">flex</button>
                  <button type="button" class="btn btn-info"  onclick="window.location.href='/flex2'">flex لرن تاپ</button>

                </div>
                <br><hr>
                <div class="studyPhp">
                  <h1 class="studyH1">آموزش php</h1>
                  <button type="button" class="btn btn-info"  onclick="window.location.href='{{ route('phpinfo') }}'">phpinfo</button>
                  <button type="button" class="btn btn-info"  onclick="window.location.href='{{ route('gettype') }}'">gettype</button>

                </div>

            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    </body>
</html>
