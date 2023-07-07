@extends('backend.layouts.master')
@section('title','Category')
@section('content')

    <!-- Workspace -->
    <main class="workspace overflow-hidden relative">
        @include('backend.layouts.toaster')
        <!-- Breadcrumb -->
        <section class="breadcrumb lg:flex items-start">
            <div>
                <h1>Category</h1>
                <ul>
                    <li><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li><a href="{{route('admin_category')}}">Category</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li>List</li>
                </ul>
            </div>
            <div class="lg:flex items-center ltr:ml-auto rtl:mr-auto mt-5 lg:mt-3">
                <div class="flex mt-5 lg:mt-0">
                    <!-- Add New -->
                    <button class="btn btn_primary uppercase ltr:ml-2 rtl:mr-2" data-toggle="modal"
                            data-target="#addcategory">Add New</button>
                </div>
            </div>
        </section>

        <!-- List -->
        @if($errors->has('name'))
            <span class="invalid-feedback" role="alert">
            <small class="text-danger">name field is required </small>
        </span>
        @endif
        <div class="card p-5">
            <div class="overflow-x-auto">
                <table class="table table-auto table_hoverable w-full " id="myTable">
                    <thead>
                    <tr>
                        <th class="ltr:text-left rtl:text-right uppercase">#</th>
                        <th class="text-center uppercase">category name</th>
                        <th class="uppercase ltr:text-left rtl:text-right">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $index => $category)
                        <tr>
                            <td>{{++$index}}</td>
                            <td >{{$category->name}} </td>
                            <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                                <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                            <span >
                                <button class="btn btn-icon btn_outlined btn_secondary" type="button" data-toggle="modal" data-target="#update{{$category->id}}" data-toggle="tooltip" data-placement="left" title="Edit"><span class="la la-pen-fancy"></span></button>
                            </span>
                                    <span class="ml-2">
                                <button class="btn btn-icon btn_outlined btn_danger" type="button" data-toggle="modal" data-target="#delete{{$category->id}}" data-toggle="tooltip" data-placement="left" title="Delete"><span class="la la-trash-alt"></span></button>
                                </span>
                                </div>
                            </td>
                        </tr>
                        {{--Delete Category Modal--}}
                        <div id="delete{{$category->id}}" class="modal" data-animations="fadeInDown, fadeOutUp">
                            <div class="modal-dialog max-w-2xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Delete Category</h2>
                                        <button type="button" class="close la la-times" data-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you really want to delete these records? This process cannot be undone.
                                    </div>
                                    <div class="modal-footer">
                                        <div class="flex ltr:ml-auto rtl:mr-auto">
                                            <button type="button" class="btn btn_secondary uppercase" data-dismiss="modal">Close</button>
                                            <form action="{{route('admin_category_delete',$category->id)}}" method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn_danger ltr:ml-2 rtl:mr-2 uppercase">Delete</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--Edite Category Modal--}}
                        <div id="update{{$category->id}}" class="modal" data-animations="fadeInDown, fadeOutUp">
                            <div class="modal-dialog modal-dialog_centered max-w-2xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">update Category</h2>
                                        <button type="button" class="close la la-times" data-dismiss="modal"></button>
                                    </div>
                                    <form  action="{{route('admin_category_update',$category->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <div class="modal-body">
                                            <div class="lg:flex lg:-mx-4">

                                                <div class=" lg:px-4">
                                                    <div class="card p-5">
                                                        <h3>Category</h3>
                                                        <div class="relative mt-5">
                                                            <label
                                                                class="label absolute block bg-white dark:bg-gray-900 border rounded border-gray-300 dark:border-gray-700 top-0 ltr:ml-4 rtl:mr-4 px-2 font-heading"
                                                                for="input-2">Category Name</label>
                                                            <input id="input-2" type="text" class="form-control mt-2 pt-5" placeholder="Enter text here" name="name" value="{{$category->name}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="flex ltr:ml-auto rtl:mr-auto">
                                                <button type="button" class="btn btn_secondary uppercase" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn_primary ltr:ml-2 rtl:mr-2 uppercase">update Category</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Add Category Modal -->
        <div id="addcategory" class="modal" data-animations="fadeInDown, fadeOutUp">
            <div class="modal-dialog modal-dialog_centered max-w-2xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Add Category</h2>
                        <button type="button" class="close la la-times" data-dismiss="modal"></button>
                    </div>
                    <form  action="{{route('admin_category_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="lg:flex lg:-mx-4">

                                <div class=" lg:px-4">
                                    <div class="card p-5">
                                        <h3>Name</h3>
                                        <div class="relative mt-5">
                                            <label
                                                class="label absolute block bg-white dark:bg-gray-900 border rounded border-gray-300 dark:border-gray-700 top-0 ltr:ml-4 rtl:mr-4 px-2 font-heading"
                                                for="input-2">Category Name</label>
                                            <input id="input-2" type="text" class="form-control mt-2 mb-1 pt-5" placeholder="Enter text here" name="name">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="flex ltr:ml-auto rtl:mr-auto">
                                <button type="button" class="btn btn_secondary uppercase" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn_primary ltr:ml-2 rtl:mr-2 uppercase">Add Category</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @include('backend.layouts.footer')
    </main>
@endsection


