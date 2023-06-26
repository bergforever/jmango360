@extends('frontend.layouts.app')
@section('content')
    <section>
    <div class="relative flex flex-col items-center max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 p-8">
        <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
            <div class="text-left">
                <h2
                    class="text-4xl font-extrabold leading-10 tracking-tight text-gray-800 sm:text-5xl sm:leading-none md:text-6xl">
                    Maximize Your Brand’s
                    <span class="font-bold text-main">Mobile Revenue</span>

                </h2>
                <p class="max-w-md mx-auto mt-3 text-base text-gray-900 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    The easiest way to launch a premium mobile app for your webstore, both B2B and B2C. We’ll help you drive mobile revenue – from start to finish.                </p>
                <div class="mt-5 sm:flex md:mt-8">
                    <div class="">
                        <button class="bg-main rounded-full lg:px-10 lg:py-5 md:px-10 md:py-5 px-4 py-3 lg:mb-0 md:mb-0 mb-4  text-white font-semibold">
                            <div class="flex gap-3 justify-center items-center">
                                <span class="">Book a demo</span>
                                <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                      </svg>
                                  </span>
                            </div>
                        </button>
                    </div>
                    <div class="mt-3  sm:mt-0 sm:ml-3">
                        <button class="hover:text-white lg:px-10 lg:py-5 md:px-10 md:py-5 px-4 py-3 text-black hover:bg-main hover:border-main border border-black rounded-full font-semibold">
                            <div class="flex gap-3 justify-center items-center">
                                <span class="lg:text-xl md:text-xl text-lg">Calculate mobile app ROI</span>
                                <span>
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 15l3-3m0 0l-3-3m3 3h-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                      </svg>
                                  </span>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
            <div class="relative w-full p-3 rounded  md:p-8">
                <div class="rounded-lg bg-white text-black w-full">
                    <video autoplay loop muted>
                        <source src="{{asset('assets/video/Jmango_product-features_Segmented-1.mp4')}}" type="video/mp4" />
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
    </section>
    <section>
        @include('frontend.home.carosel')
    </section>
    <section>
        @include('frontend.home.premium-mobile')
    </section>
    <section>
        @include('frontend.home.graph-chart')
    </section>
    <section>
        @include('frontend.home.proven-app')
    </section>
    <section>
        @include('frontend.home.native-app')
    </section>
    <section>
        @include('frontend.home.customer-review')
    </section>
    <section>
        @include('frontend.home.clients-review')
    </section>
    <section>
        @include('frontend.home.mobile-visitors')
    </section>
    <section>
        @include('frontend.home.favourite-ecommerce')
    </section>
    <section>
        @include('frontend.home.premium-quality')
    </section>

    <section>
        @include('frontend.home.improve-B2B')
    </section>

    <section>
        @include('frontend.home.eco-system')
    </section>

    <section>
        @include('frontend.home.brand')
    </section>

    <section>
        @include('frontend.home.jmango')
    </section>
@endsection




