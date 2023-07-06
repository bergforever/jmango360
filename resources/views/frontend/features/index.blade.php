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
                        <a href=""
                           class="flex  items-center justify-center w-full px-4 py-4 text-sm font-bold leading-6 capitalize duration-100 transform border-2 rounded-lg cursor-pointer border-custom  focus:ring-4 focus:custom focus:ring-opacity-50 focus:outline-none sm:w-auto sm:px-6 border-text  hover:shadow-lg hover:bg-custom hover:text-white hover:-translate-y-1">
                            Book a demo
                        </a>
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




