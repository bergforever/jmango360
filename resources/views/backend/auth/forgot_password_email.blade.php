
{{--<h1>{{$link}}</h1>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Forgot Mail </title>--}}
{{--    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">--}}
{{--    @vite('resources/css/app.css')--}}
{{--</head>--}}
{{--<body>--}}
{{--<div class="flex items-center justify-center min-h-screen p-5 bg-blue-100 min-w-screen">--}}
{{--    <div class="max-w-xl p-8 text-center text-gray-800 bg-white shadow-xl lg:max-w-3xl rounded-3xl lg:p-12">--}}
{{--        <h3 class="text-2xl">Thanks for signing up for Websitename!</h3>--}}
{{--        <div class="flex justify-center">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-green-400" fill="none"--}}
{{--                 viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"--}}
{{--                      d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />--}}
{{--            </svg>--}}
{{--        </div>--}}

{{--        <p>We're happy you're here. Let's get your email address verified:</p>--}}
{{--        <div class="mt-4">--}}
{{--            {{dd($link)}}--}}
{{--            <a href="{{$link}}">--}}
{{--            <button class="px-2 py-2 text-blue-200 bg-blue-600 rounded">Click to Forgot Password</button>--}}
{{--            </a>--}}
{{--            <p class="mt-4 text-sm">If you’re having trouble clicking the "Verify Email Address" button, copy--}}
{{--                and--}}
{{--                paste--}}
{{--                the URL below--}}
{{--                into your web browser:--}}
{{--                <a href="#" class="text-blue-600 underline">http://localhost:8000/email/verify/3/1ab7a09a3</a>--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

    <!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>forgot | ECOMMERCE</title>
    <meta name="description" content="Reset Password Email Template.">
    <style type="text/css">
        a:hover {text-decoration: underline !important;}
    </style>
</head>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0" class="text-lowercase">
<!--100% body table-->
<table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
       style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
    <tr>
        <td>
            <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                   align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <a href="{{url('/')}}" title="logo" target="_blank">
{{--                            <img width="60" src="{{asset('images/logo.png')}}" title="logo" alt="logo">--}}
                        </a>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-24 h-24 text-green-400" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                                              d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                    </svg>
                    </td>
                </tr>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td>
                        <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                               style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td style="padding:0 35px;">
                                    <h3 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">
                                        you have requested to reset your password</h3>
                                    <span></span>
                                                                            <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                                                        <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                                                            We can not just send you your old password. A unique link to reset your password has been created for you. To reset your password, click
                                                                            following link and follow the instructions.
                                                                        </p>
                                    <a href="{{$link}}"
                                       style="background:#ffc800;text-decoration:none !important; font-weight:500; margin-top:35px; color:#fff;text-transform:lowercase; font-size:14px;padding:10px 24px;display:inline-block;border-radius:50px;">reset your password</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="height:40px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                <tr>
                    <td style="height:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align:center;">
                        <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>Ecommerce</strong></p>
                    </td>
                </tr>
                <tr>
                    <td style="height:80px;">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% body table-->
</body>

</html>
