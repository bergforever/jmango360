@extends('backend.layouts.master')
@section('title','Contacts')
@section('content')

    <!-- Workspace -->

    <main class="workspace overflow-hidden relative">
        @include('backend.layouts.toaster')
        <!-- Breadcrumb -->
        <section class="breadcrumb lg:flex items-start">
            <div>
                <h1>Contact</h1>
                <ul>
                    <li><a href="{{route('admin_dashboard')}}">Dashboard</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li><a href="{{route('admin_contact')}}">Contact</a></li>
                    <li class="divider la la-arrow-right"></li>
                    <li>List</li>
                </ul>
            </div>
        </section>

        <!-- List -->

        <div class="card p-5">
            <div class="overflow-x-auto">
                <table class="table table-auto table_hoverable w-full " id="myTable">
                    <thead>
                    <tr>
                        <th class="ltr:text-left rtl:text-right uppercase">#</th>
                        <th class="text-center uppercase">Name</th>
                        <th class="text-center uppercase">Email</th>
{{--                        <th class="text-center uppercase">Phone</th>--}}
                        <th class="text-center uppercase">Subject</th>
                        <th class="text-center uppercase">Message</th>
                        <th class="uppercase">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $index => $contact)
                        <tr>
                            <td class="text-left">{{++$index}} </td>
                            <td class="text-left">{{$contact->name}} </td>
                            <td class="text-left"><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></td>
{{--                            <td class="text-left">{{$contact->phone}}</td>--}}
                            <td class="text-left">{{$contact->subject}}</td>
                            <td class="text-left">{{$contact->message}}</td>
                            <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                                <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                                <span class="ml-2">
                                <button class="btn btn-icon btn_outlined btn_danger" type="button" data-toggle="modal" data-target="#delete{{$contact->id}}" data-toggle="tooltip" data-placement="left" title="Delete"><span class="la la-trash-alt"></span></button>
                                </span>
                                </div>
                            </td>
                        </tr>
                        {{--Delete Category Modal--}}
                        <div id="delete{{$contact->id}}" class="modal" data-animations="fadeInDown, fadeOutUp">
                            <div class="modal-dialog max-w-2xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Delete Contact</h2>
                                        <button type="button" class="close la la-times" data-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        Do you really want to delete these records? This process cannot be undone.
                                    </div>
                                    <div class="modal-footer">
                                        <div class="flex ltr:ml-auto rtl:mr-auto">
                                            <button type="button" class="btn btn_secondary uppercase" data-dismiss="modal">Close</button>
                                            <form action="{{route('admin_contact_destory',$contact->id)}}" method="POST" >
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




