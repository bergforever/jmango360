@extends('backend.layouts.master')
@section('title','Dashboard')
@section('content')
    <!-- Workspace -->
    <main class="workspace overflow-hidden">

        <!-- Breadcrumb -->
        <section class="breadcrumb">
            <h1>Dashboard</h1>
            <ul>
                <li><a href="#">Login</a></li>
                <li class="divider la la-arrow-right"></li>
                <li>Dashboard</li>
            </ul>
        </section>

        <div class="lg:flex lg:-mx-4">
            <div class="lg:w-1/2 lg:px-4">

                <!-- Summaries -->
                <div class="lg:flex lg:-mx-4">
                    <div class="lg:w-1/3 lg:px-4">
                        <div
                            class="card px-4 py-8 text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                            <span class="text-primary text-5xl leading-none la la-first-order"></span>
                            <p class="mt-2">Orders</p>
                            {{--<div class="text-primary mt-5 text-3xl leading-none">{{$total_order}}</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('backend.layouts.footer')
    </main>
@endsection
<!-- Scripts -->

