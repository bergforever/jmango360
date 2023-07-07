@extends('backend.layouts.master')
@section('title','Setting')
@section('content')
    {{--        {{dd($brands)}}--}}
    @if($setting == null)
    <main class="workspace">
{{--        @include('backend.layouts.toaster')--}}
        <form action="{{route('admin_settings_store')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <!-- Breadcrumb -->
            <section class="breadcrumb">
                <h1>Setting</h1>
                <ul>
                    <li><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li><a href="{{route('admin_settings')}}">Setting</a></li>
                </ul>
            </section>

            <div class=" lg:-mx-4">
                <!-- Content -->

                <div class="w-full lg:px-4">
                    <div class="card p-5">
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">App Name</label>
                                <input id="name" type="text" class="form-control " name="app_name">
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <div class="mb-5 xl:w-1/3">
                                <label class="label block mb-2 " for="title">FaceBook Link</label>
                                <input id="name" type="url" class="form-control " name="facebook_link">
                            </div>
                            <div class="mb-5 xl:w-1/3">
                                <label class="label block mb-2 " for="title">Instagram Link</label>
                                <input id="name" type="url" class="form-control " name="instagram_link">
                            </div>
                            <div class="mb-5 xl:w-1/3">
                                <label class="label block mb-2 " for="title">Twitter Link</label>
                                <input id="name" type="url" class="form-control " name="twitter_link">
                            </div>
                            <div class="mb-5 xl:w-1/3">
                                <label class="label block mb-2 " for="title">LinkedIn Link</label>
                                <input id="name" type="url" class="form-control " name="linkedin_link">
                            </div>
                        </div>
                    </div>

                    <div class="card mt-5 p-5">
                        <h3>Add Setting</h3>
                        <button class="mt-5 btn btn_outlined btn_secondary uppercase" type="submit">submit</button>
                    </div>
                </div>
            </div>
        </form>
        @include('backend.layouts.footer')
    </main>
    @else
        <main class="workspace">
{{--            @include('backend.layouts.toaster')--}}
            <form action="{{route('admin_update_settings')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <!-- Breadcrumb -->
                <section class="breadcrumb">
                    <h1>Setting</h1>
                    <ul>
                        <li><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                        <li class="divider la la-arrow-right"></li>
                        <li><a href="{{route('admin_settings')}}">Setting</a></li>
                    </ul>
                </section>

                <div class=" lg:-mx-4">
                    <!-- Content -->

                    <div class="w-full lg:px-4">
                        <div class="card p-5">
                            <div class="flex gap-6">
                                <div class="mb-5 xl:w-1/2">
                                    <label class="label block mb-2 " for="title">App Name</label>
                                    <input id="name" type="text" class="form-control " name="app_name" value="{{$setting->app_name}}">
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <div class="mb-5 xl:w-1/3">
                                    <label class="label block mb-2 " for="title">FaceBook Link</label>
                                    <input id="name" type="url" class="form-control " name="facebook_link" value="{{$setting->facebook_link}}">
                                </div>
                                <div class="mb-5 xl:w-1/3">
                                    <label class="label block mb-2 " for="title">Instagram Link</label>
                                    <input id="name" type="url" class="form-control " name="instagram_link" value="{{$setting->instagram_link}}">
                                </div>
                                <div class="mb-5 xl:w-1/3">
                                    <label class="label block mb-2 " for="title">Twitter Link</label>
                                    <input id="name" type="url" class="form-control " name="twitter_link" value="{{$setting->twitter_link}}">
                                </div>
                                <div class="mb-5 xl:w-1/3">
                                    <label class="label block mb-2 " for="title">LinkedIn Link</label>
                                    <input id="name" type="url" class="form-control " name="linkedin_link" value="{{$setting->linkedin_link}}">
                                </div>
                            </div>
                        </div>

                        <div class="card mt-5 p-5">
                            <h3>update Setting</h3>
                            <button class="mt-5 btn btn_outlined btn_secondary uppercase" type="submit">submit</button>
                        </div>
                    </div>
                </div>
            </form>
            @include('backend.layouts.footer')
        </main>
        @endif
@endsection


