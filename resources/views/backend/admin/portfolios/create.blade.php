@extends('backend.layouts.master')
@section('title','Portfolio')
@section('content')
    {{--        {{dd($brands)}}--}}
    <main class="workspace">
        @include('backend.layouts.toaster')
            <form action="{{route('admin_store_portfolio')}}" method="POST" enctype="multipart/form-data" id="addportfolio">
                @csrf
                <!-- Breadcrumb -->
                <section class="breadcrumb">
                    <h1>Portfolio</h1>
                    <ul>
                        <li><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                        <li class="divider la la-arrow-right"></li>
                        <li><a href="{{route('admin_portfolio')}}">Privacy</a></li>
                        <li class="divider la la-arrow-right"></li>
                        <li>Add Portfolio</li>
                    </ul>
                </section>

                <div class=" lg:-mx-4">

                    <div class="lg:w-1/1 xl:w-1/1 lg:px-4">
                        <div class="card p-5">
                            <div class="flex gap-6">
                                <div class="mb-5 xl:w-1/2">
                                    <label class="label block mb-2 " for="title">Project Title</label>
                                    <input id="title" type="text" class="form-control " name="project_title">
                                    <input type="hidden" name="slug" id="slug">
                                </div>
                                <div class="mb-5 xl:w-1/2">
                                    <label class="label block mb-2" for="title">Select Category</label>
                                    <div class="custom-select">
                                        <select class="form-control" name="category_id">
                                            <option value="">Select</option>
                                            @foreach($categories as $index => $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="mb-5 xl:w-1/2">
                                    <label class="label block mb-2 " for="title">Android Application</label>
                                    <input id="android_application_link" type="url" class="form-control " name="android_application_link">
                                </div>
                                <div class="mb-5 xl:w-1/2">
                                    <label class="label block mb-2 " for="title">IOS Application</label>
                                    <input id="ios_application_link" type="url" class="form-control " name="ios_application_link">
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="mb-5 xl:w-1/2">
                                    <label class="label block mb-2 " for="title">Web Address</label>
                                    <input id="web_address_link" type="url" class="form-control " name="web_address_link">
                                </div>
                                <div class="mb-5 xl:w-1/2">
                                    <label class="label block mb-2 " for="title">Services</label>
                                    <textarea id="services" type="url" class="form-control " name="services"></textarea>
                                </div>
                            </div>
                            <div class="flex gap-6">
                                <div class="mb-5 xl:w-1/2">
                                    <label class="label block mb-2 " for="title">Description</label>
                                    <textarea id="description" type="text" class="form-control " name="description"></textarea>
                                </div>
                                <div class="mb-5 xl:w-1/2 ">
                                    <label class="label block mb-2" for="image">Main Image</label>
                                    <input type="file" name="main_image" class="block w-full text-sm text-gray-500 file:py-2 file:px-6 file:rounded file:border-1 file:border-primary-400">
                                </div>

                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2 " for="title">Extra Description</label>
                                <textarea id="editor" class="form-control ckeditor" name="extra_description"></textarea>
                            </div>

{{--                            <table class="table table-auto table_hoverable w-full " id="dynamicAddRemove">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th class="text-left uppercase">Content</th>--}}
{{--                                    <th class="text-left uppercase">action</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>--}}
{{--                                        <label class="input-group text-base font-normal" for="customFile">--}}
{{--                                            <div class="file-name input-addon input-addon-prepend input-group-item w-full overflow-x-hidden"> No file chosen</div>--}}
{{--                                            <input id="customFile" type="file" class="hidden" name="about_images[]" accept=".png">--}}
{{--                                            <div class="input-group-item btn btn_primary uppercase">Choose File</div>--}}
{{--                                        </label>--}}
{{--                                        <textarea type="text" name="about_description[]" placeholder="Enter Description" class="form-control" /></textarea>--}}
{{--                                    </td>--}}
{{--                                    <td><button type="button" name="add" id="dynamic-ar" class="btn-primary">Add More</button></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
                        </div>
                        <div class="card mt-5 p-5">
                            <h3>Add Portfolio</h3>
                            <button class="mt-5 btn btn_outlined btn_secondary uppercase" type="submit">Submit</button>
                        </div>
                    </div>

                </div>
            </form>
        @include('backend.layouts.footer')
    </main>
@endsection
@section('script')
    <script type="text/javascript">
        var i = 0;
        $("#dynamic-ar").click(function () {
            ++i;
            $("#dynamicAddRemove").append('<tr><td><label class="input-group text-base font-normal" for="customFile">' +
                ' <div class="file-name input-addon input-addon-prepend input-group-item w-full overflow-x-hidden"> No file chosen</div>' +
                '<input id="customFile" type="file" class="hidden" name="about_images[]" accept=".png">'+
                '<div class="input-group-item btn btn_primary uppercase">Choose File</div>'+
                '</label>'+
                '<textarea type="text" name="about_description[]" placeholder="Enter Description" class="form-control" /></textarea></td><td><button type="button" class="btn-danger remove-input-field">Remove</button></td></tr>'
            );
        });
        $(document).on('click', '.remove-input-field', function () {
            $(this).parents('tr').remove();
        });
    </script>
    <script src="{{asset('js-validation/jquery.min.js')}}"></script>
    <script src="{{asset('js-validation/bootstrap.min.js')}}"></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest('App\Http\Requests\AddPortfolio', '#addportfolio'); !!}


@endsection


