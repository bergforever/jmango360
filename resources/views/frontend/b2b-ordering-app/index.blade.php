@extends('frontend.layouts.app')
@section('content')
    <section class="">
        <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
            <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
                <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
                    <div class="max-w-xl mb-6">
                        <h1 class="text-main font-bold text-sm">IMPROVE THE MOBILE EXPERIENCE AND</h1>
                        <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-black sm:text-6xl sm:leading-none">
                            drive repeat orders
                        </h2>
                        <p class="text-base text-gray-700 md:text-lg">
                            To B2B brands loyal customers are crucial. A seamless mobile experience improves efficiency,
                            increases loyalty and drives repeat orders.
                    </div>
                    <div class="flex flex-col w-full sm:w-auto sm:flex-row p-4 gap-y-6">
                        <a href=""
                           class="flex  items-center justify-center w-full px-4 py-4 text-sm font-bold leading-6 capitalize duration-100 transform border-2 rounded-lg cursor-pointer border-custom  focus:ring-4 focus:custom focus:ring-opacity-50 focus:outline-none sm:w-auto sm:px-6 border-text  hover:shadow-lg hover:bg-custom hover:text-white hover:-translate-y-1">
                            Get in touch
                        </a>
                    </div>
                </div>
                <div class="flex items-center justify-center lg:w-1/2">
                    <div class="relative w-full p-3 rounded  md:p-8">
                        <div class="rounded-lg text-black w-full">
                            <img class="rounded-3xl"
                                 src="{{asset('assets/ordering-app/blogbackground-app-marketing-tips-1140x641.jpg')}}">
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
          @include('frontend.b2b-ordering-app.favourite-ecommerce')
      </section>

    <section>
        @include('frontend.b2b-ordering-app.expand-brand')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.developed')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.native-ordering')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.important-feature')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.barcode')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.alert')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.payment')
    </section>


    <h1 class="text-9xl text-black">end</h1>

    <section>
        @include('frontend.b2b-ordering-app.quotes')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.millennials')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.bigcommerce')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.seamless-ux')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.get-toch')
    </section>
    <section>
        @include('frontend.b2b-ordering-app.products')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.wish-lists')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.pricing-scheme')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.empower')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.jmango360')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.plugin-integration')
    </section>

    <section>
        @include('frontend.b2b-ordering-app.jmango')
    </section>
@endsection




