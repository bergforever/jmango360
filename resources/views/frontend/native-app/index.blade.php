@extends('frontend.layouts.app')
@section('content')
    <section class="bg-[#0f1111]">
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
    </section>
    <section>
        @include('frontend.native-app.carosel')
    </section>
    <section>
        @include('frontend.native-app.native-app')
    </section>
    <section>
        @include('frontend.native-app.proven-app')
    </section>

    <section>
        @include('frontend.native-app.webstore')
    </section>

    <section>
        @include('frontend.native-app.expand-brand')
    </section>

    <section>
        @include('frontend.native-app.seamless-ux')
    </section>

    <section>
        @include('frontend.native-app.no-code')
    </section>

    <section>
        @include('frontend.native-app.brand-carosel')
    </section>

    <section>
        @include('frontend.native-app.roi-calculator')
    </section>

    <section>
        @include('frontend.native-app.jmango')
    </section>
@endsection




