<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>لوحة بيانات الجمعيات</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            body{
                background-image: url("/ataa.jpg");
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <img src="logo.jpeg" width="200px" style="padding-bottom: 20px; border-radius: 50%;">
                <br>
                <span style="font-size: 70px; font-weight: bold; color: white">لوحة بيانات الجمعيات</span>
                <br>
                <h1 style="color: white">
                    <span>متجر عطاء في تطبيق نعناع</span>
                </h1>
                <br>
                @if (Route::has('login'))
                    @if (Auth::check())
                        <a style="color: white" href="{{ url('/home') }}">لوحة البيانات</a>
                    @else
                        <a style="
                        color: #27ae60;
                        padding: 10px 15px 10px 15px;
                        background: white;
                        font-weight: bold;
                        font-size: 20px;
                        border-radius: 10px;
                        text-decoration: none;
                        font-style: normal" href="{{ url('/login') }}">سجل دخولك من هنا</a>
                    @endif
                @endif
            </div>
        </div>
    </body>
</html>
