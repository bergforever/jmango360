@extends('frontend.layouts.app')
@section('content')
    {{--<section class="">
    <div class="relative flex flex-col items-center max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 p-8">
        <div class="flex items-center py-5 md:w-2/3 md:pb-20 md:pt-10 md:pr-10">
            <div class="text-left">
                <h2
                    class="text-4xl font-extrabold leading-10 tracking-tight text-white sm:text-5xl sm:leading-none md:text-6xl">
                    Sell where your shoppers are. On
                    <span class="font-bold text-main">Mobile</span> Launch an
                    <span class="font-bold text-main">eCommerce app</span>

                </h2>
                <p class="max-w-md mx-auto mt-3 text-base text-white sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    70% of consumers prefer shopping in-app. Put your brand in their hands and drive new revenues with
                    your own ecommerce app. Launched in less than 30 days, fully-featured, for an affordable monthly
                    plan.
                </p>
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
                        <button class="hover:text-white lg:px-4 lg:py-5 md:px-10 md:py-5 px-4 py-3 text-white hover:bg-main hover:border-main border border-white rounded-full font-semibold">
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
        <div class="flex items-center py-5 md:w-1/3 md:pb-20 md:pt-10 md:pl-10">
            <div class="relative w-full p-3 rounded  md:p-8">
                <div class="rounded-lg text-black w-full">
                    <img src="{{asset('assets/native-img/subdued-showcase-home.png')}}">
                </div>
            </div>
        </div>
    </div>
    </section>--}}

    <section class="">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
                <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
                    <div class="max-w-xl mb-6">
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-black sm:text-6xl sm:leading-none">
                            Create mobile moments that sell
                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            In the fast-paced world of online fashion, only ease and convenience can win the hearts of
                            clothes-hungry shoppers. Give customers the best mobile shopping experience available with
                            JMango360. Start driving in-app revenue today.
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
                            <img class="rounded-3xl" src="{{asset('assets/fashion-img/fashion-2021-09-03-02-28-11-utc-scaled-1140x760.jpg')}}">
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
        @include('frontend.fashion-native-app.expand-brand')
    </section>

    <section>
        @include('frontend.fashion-native-app.carosel')
    </section>

    <section>
        @include('frontend.fashion-native-app.native-app')
    </section>
    <section>
        @include('frontend.fashion-native-app.proven-app')
    </section>

    <section>
        @include('frontend.fashion-native-app.seamless-ux')
    </section>

    <section>
        @include('frontend.fashion-native-app.webstore')
    </section>


    <section>
        @include('frontend.fashion-native-app.brand-carosel')
    </section>

    <section>
        @include('frontend.fashion-native-app.no-code')
    </section>

    <section>
        @include('frontend.fashion-native-app.roi-calculator')
    </section>

    <section>
        @include('frontend.fashion-native-app.jmango')
    </section>
@endsection




