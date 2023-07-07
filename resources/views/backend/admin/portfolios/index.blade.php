@extends('backend.layouts.master')
@section('title','Portfolio')
@section('content')

    <!-- Workspace -->

    <main class="workspace overflow-hidden relative">
        @include('backend.layouts.toaster')
        <!-- Breadcrumb -->
        <section class="breadcrumb lg:flex items-start">
            <div>
                <h1>Portfolio</h1>
                <ul>
                    <li><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li><a href="{{route('admin_portfolio')}}">Portfolio</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li>List</li>
                </ul>
            </div>

            <div class="lg:flex items-center ltr:ml-auto rtl:mr-auto mt-5 lg:mt-3">
                <div class="flex mt-5 lg:mt-0">
                    <!-- Add New -->
                    <a href="{{route('admin_create_portfolio')}}">
                        <button class="btn btn_primary uppercase ltr:ml-2 rtl:mr-2">Add Portfolio</button>
                    </a>
                </div>
            </div>
        </section>

        <!-- List -->

        <div class="card p-5">
            <div class="overflow-x-auto">
                <table class="table table-auto table_hoverable w-full " id="myTable">
                    <thead>
                    <tr>
                        <th class="ltr:text-left rtl:text-right uppercase">#</th>
                        <th class="text-center uppercase">Image</th>
                        <th class="text-center uppercase">title</th>
                        <th class="text-center uppercase">category</th>
                        <th class="uppercase">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($portfolios as $index => $portfolio)
                    <tr>
                        <td>{{++$index}}</td>
                        <td class="text-center"><img src="{{$portfolio->image_main}}" width="50px"></td>
                        <td class="">{{$portfolio->project_title}}</td>
                        <td class="">{{$portfolio->category->name}}</td>
                        <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                            <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                            <span >
                                <a href="{{route('admin_edit_portfolio',$portfolio->id)}}">
                                <button class="btn btn-icon btn_outlined btn_secondary" type="button"  data-toggle="tooltip" data-placement="left" title="Edit"><span class="la la-pen-fancy"></span></button>
                            </a>
                            </span>
                                <span class="ml-2">
                                <button class="btn btn-icon btn_outlined btn_danger" type="button" data-toggle="modal" data-target="#delete{{$portfolio->id}}" data-toggle="tooltip" data-placement="left" title="Delete"><span class="la la-trash-alt"></span></button>
                                </span>
                            </div>
                        </td>
                    </tr>
                    {{--Delete Category Modal--}}
                    <div id="delete{{$portfolio->id}}" class="modal" data-animations="fadeInDown, fadeOutUp">
                        <div class="modal-dialog max-w-2xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title">Delete Portfolio</h2>
                                    <button type="button" class="close la la-times" data-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    Do you really want to delete these records? This process cannot be undone.
                                </div>
                                <div class="modal-footer">
                                    <div class="flex ltr:ml-auto rtl:mr-auto">
                                        <button type="button" class="btn btn_secondary uppercase" data-dismiss="modal">Close</button>
                                        <form action="{{route('admin_delete_portfolio',$portfolio->id)}}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn_danger ltr:ml-2 rtl:mr-2 uppercase">Delete</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('backend.layouts.footer')
    </main>
@endsection



