@extends('frontend.layouts.app')
@section('content')
    <section class="">
        <div class="px-4 py-6 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
                <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
                    <div class="max-w-xl mb-6">
                        <h1 class="text-sm font-bold text-main">ECOMMERCE AND RETAIL APPS</h1>
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-black sm:text-6xl sm:leading-none">
                            for <span class="text-main">Salesforce</span>
                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            Get a mobile app for your online store without writing a line of code. Thanks to our
                            integration with Salesforce, launching a first-class ecommerce app has never been that easy.
                        </p>
                    </div>
                    <div class="flex flex-col w-full sm:w-auto sm:flex-row p-4">
                        <a href=""
                           class="flex flex-row items-center hover:opacity-80 text-white justify-center w-full px-4 py-4 mb-4 text-sm font-bold bg-custom leading-6 capitalize duration-100 transform rounded-lg shadow cursor-pointer focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 focus:outline-none sm:mb-0 sm:w-auto sm:mr-4 md:pl-8 md:pr-6 xl:pl-12 xl:pr-10   hover:shadow-lg hover:-translate-y-1">
                            Or calculate your ROI
                            <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"
                                     class="w-5 h-5 fill-current"><path fill="currentColor"
                                                                        d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                                </svg>
                            </span>
                        </a>

                        <a href=""
                           class="flex  items-center justify-center w-full px-4 py-4 text-sm font-bold leading-6 capitalize duration-100 transform border-2 rounded-lg cursor-pointer border-custom  focus:ring-4 focus:custom focus:ring-opacity-50 focus:outline-none sm:w-auto sm:px-6 border-text  hover:shadow-lg hover:bg-custom hover:text-white hover:-translate-y-1">
                            Book a demo
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:w-1/2">
                    <div class="relative w-full p-3 rounded  md:p-8">
                        <div class="rounded-lg text-black w-full">
                            <img class="" src="{{asset('assets/sales-force/salesforce-Int.png')}}">
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
        @include('frontend.sales-force.brand-carosel')
    </section>

     <section>
         @include('frontend.sales-force.proven-app')
     </section>

     <section>
         @include('frontend.sales-force.expand-brand')
     </section>

     <section>
         @include('frontend.sales-force.plugin-integration')
     </section>

 <section>
     @include('frontend.sales-force.premium-app-experience')
 </section>

    <section>
        @include('frontend.sales-force.native-app')
    </section>

 <section>
     @include('frontend.sales-force.wow-customers')
 </section>

 <section>
     @include('frontend.sales-force.native-checkout')
 </section>

    <section>
        @include('frontend.sales-force.webstore')
    </section>

 <section>
     @include('frontend.sales-force.quotes')
 </section>

 <section>
     @include('frontend.sales-force.proven-app-jmango')
 </section>

 <section>
     @include('frontend.sales-force.no-code')
 </section>

 <section>
     @include('frontend.sales-force.jmango')
 </section>

@endsection
