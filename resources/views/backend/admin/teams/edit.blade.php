@extends('backend.layouts.master')
@section('title','Team')
@section('content')
    {{--        {{dd($brands)}}--}}
    <main class="workspace">
        @include('backend.layouts.toaster')
        <form action="{{route('admin_update_team',$team->id)}}" method="POST" enctype="multipart/form-data" id="updateteam">
            @csrf
            <!-- Breadcrumb -->
            <section class="breadcrumb">
                <h1>Product</h1>
                <ul>
                    <li><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li><a href="{{route('admin_team')}}">Product</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li>Add Product</li>
                </ul>
            </section>

            <div class=" lg:-mx-4">

                <!-- Content -->

                <div class="w-full lg:px-4">
                    <div class="card p-5">
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Member Name</label>
                                <input id="name" type="text" class="form-control " name="name" value="{{$team->name}}">
                            </div>
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2" for="title">Team Member Post</label>
                                <input id="post" type="text" class="form-control" name="post" value="{{$team->post}}">
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Services</label>
                                <input id="services" type="text" class="form-control " name="services" value="{{$team->services}}">
                            </div>
                            <div class="mb-5 xl:w-1/2 ">
                                <label class="label block mb-2" for="image">Member Image</label>
                                <input type="file" name="member_image" onchange="loadFile(event)" class="block w-full text-sm text-gray-500 file:py-2 file:px-6 file:rounded file:border-1 file:border-primary-400">
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Facebook Link</label>
                                <input id="facebook_link" type="url" class="form-control " name="facebook_link" value="{{$team->facebook_link}}">
                            </div>
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Twitter Link</label>
                                <input id="twitter_link" type="url" class="form-control " name="twitter_link" value="{{$team->twitter_link}}">
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Instagram Link</label>
                                <input id="instagram_link" type="url" class="form-control " name="instagram_link" value="{{$team->instagram_link}}">
                            </div>
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">LinkedIn Link</label>
                                <input id="linkedin_link" type="url" class="form-control " name="linkedin_link" value="{{$team->linkedin_link}}">
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Member Image</label>
                                <img src="{{$team->image_member}}" alt="No image" id="output">
                            </div>
                        </div>
                    </div>
                    <div class="card mt-5 p-5">
                        <h3>Update Member</h3>
                        <button class="mt-5 btn btn_outlined btn_secondary uppercase" type="submit">submit</button>
                    </div>
                </div>
            </div>
        </form>
        @include('backend.layouts.footer')
    </main>
@endsection

@section('script')
    <!-- Javascript Requirements -->
    <script src="{{asset('js-validation/jquery.min.js')}}"></script>
    <script src="{{asset('js-validation/bootstrap.min.js')}}"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\UpdateTeam', '#updateteam'); !!}
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection

