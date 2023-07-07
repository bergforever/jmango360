@extends('backend.layouts.master')
@section('title','create team')
@section('content')
    {{--        {{dd($brands)}}--}}
    <main class="workspace">
        @include('backend.layouts.toaster')
        <form action="{{route('admin_store_team')}}" method="POST" enctype="multipart/form-data" id="addteam">
            @csrf
            <!-- Breadcrumb -->
            <section class="breadcrumb">
                <h1>Product</h1>
                <ul>
                    <li><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li><a href="{{route('admin_team')}}">Team</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li>Add Team</li>
                </ul>
            </section>

            <div class=" lg:-mx-4">

                <!-- Content -->

                <div class="w-full lg:px-4">
                    <div class="card p-5">
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Member Name</label>
                                <input id="name" type="text" class="form-control " name="name">
                            </div>
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2" for="title">Team Member Post</label>
                                <input id="post" type="text" class="form-control" name="post">
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Services</label>
                                <input id="services" type="text" class="form-control " name="services">
                            </div>
                            <div class="mb-5 xl:w-1/2 ">
                                <label class="label block mb-2" for="image">Member Image</label>
                                <input type="file" name="member_image" onchange="loadFile(event)" class="block w-full text-sm text-gray-500 file:py-2 file:px-6 file:rounded file:border-1 file:border-primary-400">
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Facebook Link</label>
                                <input id="facebook_link" type="url" class="form-control " name="facebook_link">
                            </div>
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Twitter Link</label>
                                <input id="twitter_link" type="url" class="form-control " name="twitter_link">
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Instagram Link</label>
                                <input id="instagram_link" type="url" class="form-control " name="instagram_link">
                            </div>
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">LinkedIn Link</label>
                                <input id="linkedin_link" type="url" class="form-control " name="linkedin_link">
                            </div>
                        </div>
                        <div class="flex gap-6">
                            <div class="mb-5 xl:w-1/2">
                                <label class="label block mb-2 " for="title">Member Image</label>
                                <img  id="output">
                            </div>
                        </div>
                    </div>

                    <div class="card mt-5 p-5">
                        <h3>Add Member</h3>
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
    {!! JsValidator::formRequest('App\Http\Requests\AddTeam', '#addteam'); !!}
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

