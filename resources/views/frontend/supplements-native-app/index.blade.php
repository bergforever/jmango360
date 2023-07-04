@extends('frontend.layouts.app')
@section('content')
    <section class="">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
                <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
                    <div class="max-w-xl mb-6">
                        <h1 class="text-main font-bold text-sm">LAUNCH YOUR OWN MOBILE APP</h1>
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-black sm:text-6xl sm:leading-none">
                            Boost repeat purchases
                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            Our app platform is designed to build beautiful apps that drive repeat purchases and
                            loyalty. Grow your vitamine & supplement store today. Fast development, for a flexible
                            monthly plan. It’s that simple.
                        </p>
                    </div>
                    <div class="flex flex-col w-full sm:w-auto sm:flex-row p-4 gap-y-6">
                        <a href=""
                           class="flex  items-center justify-center w-full px-4 py-4 text-sm font-bold leading-6 capitalize duration-100 transform border-2 rounded-lg cursor-pointer border-custom  focus:ring-4 focus:custom focus:ring-opacity-50 focus:outline-none sm:w-auto sm:px-6 border-text  hover:shadow-lg hover:bg-custom hover:text-white hover:-translate-y-1">
                            Book a demo
                        </a>
                        <a href=""
                           class="flex flex-row items-center hover:opacity-80 text-white justify-center w-full px-4 py-4 mb-4 text-sm font-bold bg-custom leading-6 capitalize duration-100 transform rounded-lg shadow cursor-pointer focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 focus:outline-none sm:mb-0 sm:w-auto sm:ml-4 md:pl-8 md:pr-6 xl:pl-12 xl:pr-10   hover:shadow-lg hover:-translate-y-1">
                            Or calculate your ROI
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"
                                     class="w-5 h-5 fill-current"><path fill="currentColor"
                                                                        d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                                </svg>
                            </span>
                        </a>


                    </div>
                </div>
                <div class="flex items-center justify-center lg:w-1/2">
                    <div class="relative w-full p-3 rounded  md:p-8">
                        <div class="rounded-lg text-black w-full">
                            <img class="rounded-3xl" src="{{asset('assets/supplement-img/Vitamins-hero-1140x683.png')}}">
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
                    <path d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z"></path>
                </svg>
            </a>
        </div>
    </section>

    <section>
        @include('frontend.supplements-native-app.graph-chart')
    </section>

    <section>
        @include('frontend.supplements-native-app.mobile-visitors')
    </section>

    <section>
        @include('frontend.supplements-native-app.seamless-ux')
    </section>

    <section>
        @include('frontend.supplements-native-app.native-app')
    </section>

    <section>
        @include('frontend.supplements-native-app.native-checkout')
    </section>

    <section>
        @include('frontend.supplements-native-app.loyalty-ux')
    </section>

    <section>
        @include('frontend.supplements-native-app.webstore')
    </section>

    <section>
        @include('frontend.supplements-native-app.favourite-ecommerce')
    </section>

    <section>
        @include('frontend.supplements-native-app.marketing-support')
    </section>

    <section>
        @include('frontend.supplements-native-app.second-quotes')
    </section>

    <section>
        @include('frontend.supplements-native-app.carosel')
    </section>

    <section>
        @include('frontend.supplements-native-app.jmango')
    </section>
@endsection




