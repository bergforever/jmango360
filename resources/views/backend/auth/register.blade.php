<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    @section('title','Register')
    @include('backend.layouts.style')
</head>

<body>
@php
    $settings = db_table('settings')->documents();
    foreach ($settings as $setting) {
        $setting = db_table('settings')->document($setting->id())->snapshot();
    }
    $setting_count = iterator_count($settings);
    //now year
    $year = date('Y');
@endphp
<!-- Top Bar -->
<section class="top-bar">

    <!-- Brand -->
    <span class="brand">@if($setting_count==0) demo @elseif($setting_count==1 &&  $setting->data()['app_name'] == null) Demo @else {{$setting->data()['app_name']}} @endif</span>

    <nav class="flex items-center ltr:ml-auto rtl:mr-auto">

        <!-- Dark Mode -->
        <label class="switch switch_outlined" data-toggle="tooltip" data-tippy-content="Toggle Dark Mode">
            <input id="darkModeToggler" type="checkbox">
            <span></span>
        </label>

        <!-- Fullscreen -->
        <button id="fullScreenToggler" type="button"
                class="hidden lg:inline-block btn-link ltr:ml-5 rtl:mr-5 text-2xl leading-none la la-expand-arrows-alt"
                data-toggle="tooltip" data-tippy-content="Fullscreen"></button>

        <!-- Login -->
        <a href="{{route('login')}}" class="btn btn_primary uppercase ltr:ml-5 rtl:mr-5">Login</a>
    </nav>
</section>

<div class="container flex items-center justify-center mt-20 py-10">
    <div class="w-full md:w-1/2 xl:w-1/3">
        @if (Session::has('error'))
            <div class="alert alert_outlined alert_primary mt-5">
                <strong class="uppercase"><bdi>Warning!</bdi></strong>
                {{ Session::get('error') }}
                <button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
            </div>
        @endif
            @if (Session::has('message'))
                <div class="alert alert_outlined alert_primary mt-5">
                    <strong class="uppercase"><bdi>Successfully!</bdi></strong>
                    {{ Session::get('message') }}
                    <button type="button" class="dismiss la la-times" data-dismiss="alert"></button>
                </div>
            @endif
        <div class="mx-5 md:mx-10">
            <h2 class="uppercase">Create Your Account</h2>
            <h4 class="uppercase">Let's Roll</h4>
        </div>
        <form class="card mt-5 p-5 md:p-10" action="{{route('register')}}" method="POST" enctype="multipart/form-data" id="registeruser">
            @csrf
            <input id="role" type="hidden" name="role" value="client">
            <div class="mb-5">
                <label class="label block mb-2" for="name">Name</label>
                <input id="name" type="text" class="form-control" placeholder="Enter Name" name="name">
            </div>
            <div class="mb-5">
                <label class="label block mb-2" for="email">Email</label>
                <input id="email" type="text" class="form-control" placeholder="example@example.com" name="email">
            </div>
            <div class="mb-5">
                <label class="label block mb-2" for="password">Password</label>
                <label class="form-control-addon-within">
                    <input id="password" type="password" class="form-control border-none" value="12345" name="password">
                    <span class="flex items-center ltr:pr-4 rtl:pl-4">
                            <button type="button" class="btn btn-link la la-eye text-gray-600 text-xl leading-none"
                                    data-toggle="password-visibility"></button>
                        </span>
                </label>
            </div>
{{--            image--}}
            <div class="mb-5">
                <label class="label block mb-2" for="image">Image</label>
                <label class="input-group text-base font-normal" for="customFile">
                    <div
                        class="file-name input-addon input-addon-prepend input-group-item w-full overflow-x-hidden">
                        No file chosen</div>
                    <input id="customFile" type="file" class="hidden" name="image">
                    <div class="input-group-item btn btn_primary uppercase">Choose File</div>
                </label>
            </div>
            <div class="flex">
                <button type="submit" class="btn btn_primary ltr:ml-auto rtl:mr-auto uppercase">Register</button>
            </div>
        </form>
    </div>
</div>
@include('backend.layouts.script')
</body>

    <!-- Javascript Requirements -->
    <script src="{{asset('js-validation/jquery.min.js')}}"></script>
    <script src="{{asset('js-validation/bootstrap.min.js')}}"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\RegisterUser', '#registeruser'); !!}

</html>
