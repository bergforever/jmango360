

<title>@yield('title')</title>

<!-- Generics -->
<link rel="icon" href="{{asset('asset/logo_upgrade32.png')}}" sizes="32x32">
<link rel="icon" href="{{asset('asset/logo_upgrade32.png')}}" sizes="128x128">
<link rel="icon" href="{{asset('asset/logo_upgrade32.png')}}" sizes="192x192">

<!-- Android -->
<link rel="shortcut icon" href="{{asset('asset/logo_upgrade32.png')}}" sizes="196x196">
{{--@vite('resources/css/app.css')--}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- iOS -->
<link rel="apple-touch-icon" href="{{asset('backend/assets/images/favicon/favicon-152.png')}}" sizes="152x152">
<link rel="apple-touch-icon" href="{{asset('backend/assets/images/favicon/favicon-167.png')}}" sizes="167x167">
<link rel="apple-touch-icon" href="{{asset('backend/assets/images/favicon/favicon-180.png')}}" sizes="180x180">

<link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}" />
{{--data table link--}}

<link href="{{asset('datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('datatable/css/buttons.dataTables.min.css')}}" />
@yield('style')

