@extends('frontend.layouts.app')
@section('content')
    <section class="">
    <div class="relative flex flex-col items-center max-w-screen-xl px-4 mx-auto md:flex-row sm:px-6 p-8">
        <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pr-10">
            <div class="text-left">
                <div class="text-black">JMANGO360 EXPLAINED</div>
                <h2
                    class="text-4xl font-extrabold leading-10 tracking-tight text-main sm:text-5xl sm:leading-none md:text-6xl">
                    App features

                </h2>
                <p class="max-w-md mx-auto mt-3 text-base text-black sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                    Learn about the core and advanced app features you’ll have access to. From segmented push
                    notifications to custom UI and all the different check-out options.
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
                </div>
            </div>
        </div>
        <div class="flex items-center py-5 md:w-1/2 md:pb-20 md:pt-10 md:pl-10">
            <div class="relative w-full p-3 rounded  md:p-8">
                <div class="rounded-lg text-black w-full">
                    <img class="rounded-2xl" src="{{asset('assets/feature-img/features-1140x811.png')}}">
                </div>
            </div>
        </div>
    </div>
    </section>



    <section>
        @include('frontend.features.plans')
    </section>

    <section>
        @include('frontend.features.smart-app')
    </section>

    <section>
        @include('frontend.features.screen-design')
    </section>
    <section>
        @include('frontend.features.carosel')
    </section>
    <section>
        @include('frontend.features.customize-ui-app')
    </section>

    <section>
        @include('frontend.features.push-notification')
    </section>

    <section>
        @include('frontend.features.rich-notification')
    </section>

    <section>
        @include('frontend.features.segment-notification')
    </section>

    <section>
        @include('frontend.features.coupon-notification')
    </section>

    <section>
        @include('frontend.features.card-notification')
    </section>

    <section>
        @include('frontend.features.product-onboarding-messages')
    </section>
@endsection




