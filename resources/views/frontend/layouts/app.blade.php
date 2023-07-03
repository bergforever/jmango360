<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/flowbite.css')}}">


    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
<div class='loading h-1 w-[0%] bg-custom transition-all duration-200 absolute z-40 top-0 '></div>
    @include('frontend.layouts.navbar')
    @yield('content')
    @include('frontend.layouts.footer')

    <script src="{{asset('assets/js/flowbite.js')}}"></script>
    <script src="{{asset('assets/js/loading-bar.js')}}"></script>

</body>
</html>
