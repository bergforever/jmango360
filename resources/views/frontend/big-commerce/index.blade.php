@extends('frontend.layouts.app')
@section('content')
    <section class="">
        <div class="px-4 py-6 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
                <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
                    <div class="max-w-xl mb-6">
                        <h1 class="text-sm font-bold text-main">BUILD A PREMIUM MOBILE SHOPPING APP</h1>
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-black sm:text-5xl sm:leading-none">
                            for your <span class="text-main">BigCommerce</span> store
                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            Offer your customers the best mobile experience and drive 3x more conversions with a
                            feature-rich and powerful mobile iOS & Android app. With our plugin, built for BigCommerce,
                            we’ll have your ecommerce app up and running in no time!
                        </p>
                    </div>
                    <div class="flex flex-col w-full sm:w-auto sm:flex-row p-4">
                        <a href=""
                           class="flex  items-center justify-center w-full px-4 py-4 text-sm font-bold leading-6 capitalize duration-100 transform border-2 rounded-lg cursor-pointer border-custom  focus:ring-4 focus:custom focus:ring-opacity-50 focus:outline-none sm:w-auto sm:px-6 border-text  hover:shadow-lg hover:bg-custom hover:text-white hover:-translate-y-1">
                            Book a demo
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:w-1/2">
                    <div class="relative w-full p-3 rounded md:p-8">
                        <div class="rounded-lg  text-black w-full">
                            <img class="" src="{{asset('assets/big-commerce/BC_int.png')}}">
                        </div>
                    </div>
                </div>
            </div>
            <a
                href="/"
                aria-label="Scroll down"
                class="flex items-center justify-center w-10 h-10 mx-auto text-gray-600 duration-300 transform border border-gray-400 rounded-full hover:text-deep-purple-accent-400 hover:border-deep-purple-accent-400 hover:shadow hover:scale-110"
            >
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                    <path
                        d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
                </svg>
            </a>
        </div>
    </section>

    <section>
        @include('frontend.big-commerce.proven-app')
    </section>

    <section>
        @include('frontend.big-commerce.expand-brand')
    </section>

    <section>
        @include('frontend.big-commerce.plugin-integration')
    </section>

    <section>
        @include('frontend.big-commerce.seamless-ux')
    </section>

    <section>
        @include('frontend.big-commerce.wow-customers')
    </section>

    <section>
        @include('frontend.big-commerce.native-checkout')
    </section>

    <section>
        @include('frontend.big-commerce.mobile-visitors')
    </section>

    <section>
        @include('frontend.big-commerce.no-code')
    </section>

    <section>
        @include('frontend.big-commerce.brand-carosel')
    </section>

    <section>
        @include('frontend.big-commerce.second-quotes')
    </section>

@endsection
