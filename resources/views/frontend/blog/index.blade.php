
@extends('frontend.layouts.app')
@section('title', 'Blogs')
@section('content')
    <section>
        @include('frontend.blog.header')
    </section>
<section>
    @include('frontend.blog.main-section')
</section>

    <section>
        @include('frontend.blog.contact-us')
    </section>
@endsection

