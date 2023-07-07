@extends('backend.layouts.master')
@section('title','Profile')
@section('content')


<!-- Workspace -->
<main class="workspace">

    <!-- Breadcrumb -->
    <section class="breadcrumb">
        <h1>Profile</h1>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li class="divider la la-arrow-right"></li>
            <li><a href="#">Profile</a></li>
        </ul>
    </section>

    <div class="lg:flex lg:-mx-4">

        <!-- Categories -->
        <div class="lg:w-1/4 lg:px-4">
            <div class="card p-5">
                <h3>Photo</h3>
                <div class="mt-5 leading-normal">
                   <span class=" w-32 h-32 rounded-r-lg"><img src="{{auth_data()['image']}}"></span>
                    <hr class="my-2">
                    <p class="flex items-center text-gray-700 dark:text-gray-500 hover:text-primary">
                         <h3>{{auth_data()['name']}}</h3>
                        <h4>{{auth_user()->email}}</h4>
                    </p>
                </div>
            </div>
        </div>

        <div class="lg:w-1/2 xl:w-3/4 lg:px-4">
            <form action="{{route('update_profile')}}" method="POST">
                @csrf
            <div class="card p-5">
                <div class="mb-5 xl:w-1/2">
                    <label class="label block mb-2" for="title">Name</label>
                    <input id="name" type="text" class="form-control" name="name" value="{{auth_data()['name']}}">
                </div>

{{--                <div class="mb-5 xl:w-1/2 ">--}}
{{--                    <label class="label block mb-2" for="image">Image</label>--}}
{{--                    <label class="input-group text-base font-normal" for="customFile">--}}
{{--                        <div--}}
{{--                            class="file-name input-addon input-addon-prepend input-group-item w-full overflow-x-hidden">--}}
{{--                            No file chosen</div>--}}
{{--                        <input type="hidden" name="image" value="{{auth_data()['image']}}">--}}
{{--                        <input id="customFile" type="file" class="hidden" name="image">--}}
{{--                        <div class="input-group-item btn btn_primary uppercase">Choose File</div>--}}
{{--                    </label>--}}
{{--                </div>--}}
            </div>
            <div class="card mt-5 p-5">
                <h3>Update Profile</h3>
                <button class="mt-5 btn btn_outlined btn_secondary uppercase" type="submit">Update</button>
            </div>
            </form>
        </div>

    </div>

@include('backend.layouts.footer')
</main>
@endsection
