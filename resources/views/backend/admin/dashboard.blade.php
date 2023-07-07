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


    @include('backend.layouts.footer')
</main>
@endsection
<!-- Scripts -->
