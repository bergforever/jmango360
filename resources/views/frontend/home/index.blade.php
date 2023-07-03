@extends('frontend.layouts.app')
@section('content')
   {{-- <section>
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
    </section>--}}
    {{--<section>
        <div class="bg-black">
            <div class="container flex flex-col items-center px-4 py-16 pb-24 mx-auto text-center lg:pb-56 md:py-32 md:px-10 lg:px-32 dark:text-gray-900">
                <h1 class="text-5xl font-bold leadi sm:text-6xl xl:max-w-3xl text-white">Maximize Your Brand’s <span>Mobile Revenue</span></h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12 xl:max-w-3xl text-white">Cupiditate minima voluptate temporibus quia? Architecto beatae esse ab amet vero eaque explicabo!</p>
                <div class="flex flex-wrap justify-center">
                    <button type="button" class="text-white px-8 py-3 m-2 text-lg font-semibold rounded-xl">Get started</button>
                    <button type="button" class="text-white px-8 py-3 m-2 text-lg border rounded-xl">Learn more</button>
                </div>
            </div>
        </div>
        <img src="https://source.unsplash.com/random/480x320" alt="" class="w-5/6 mx-auto mb-12 -mt-20 rounded-lg shadow-md lg:-mt-40 dark:bg-gray-500">
    </section>--}}

   {{--<section>
       <div class="flex flex-col justify-between max-w-xl px-4 mx-auto lg:pt-16 lg:flex-row md:px-8 lg:max-w-screen-xl">
           <div class="pt-16 mb-16 lg:mb-0 lg:pt-32 lg:max-w-lg lg:pr-5">
               <div class="max-w-xl mb-6">
                   <div>
                       <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                           Brand new
                       </p>
                   </div>
                   <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                       The quick, brown fox<br class="hidden md:block" />
                       jumps over
                       <span class="inline-block text-deep-purple-accent-400">a lazy dog</span>
                   </h2>
                   <p class="text-base text-gray-700 md:text-lg">
                       Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. explicabo.
                   </p>
               </div>
               <div class="flex items-center">
                   <a
                       href="/"
                       class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none"
                   >
                       Get started
                   </a>
                   <a href="/" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
               </div>
           </div>
           <div>
               <img src="https://kitwind.io/assets/kometa/two-thirds-phone.png" class="object-cover object-top w-full h-64 mx-auto lg:h-auto xl:mr-24 md:max-w-sm" alt="" />
           </div>
       </div>
   </section>--}}

   <section>
       <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
           <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
               <div class="flex items-center justify-center lg:w-1/2">
                   <div class="relative w-full p-3 rounded  md:p-8">
                       <div class="rounded-lg bg-white text-black w-full">
                           <video autoplay loop muted>
                               <source src="{{asset('assets/video/Jmango_product-features_Segmented-1.mp4')}}" type="video/mp4" />
                               Your browser does not support the video tag.
                           </video>
                       </div>
                   </div>
               </div>
               <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
                   <div class="max-w-xl mb-6">
                       <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                           Maximize Your Brand’s <br class="text-custom hidden md:block" />

                           <span class="inline-block text-custom">Mobile Revenue</span>
                       </h2>
                       <p class="text-base text-gray-700 md:text-lg">
                           The easiest way to launch a premium mobile app for your webstore, both B2B and B2C. We’ll help you drive mobile revenue – from start to finish.
                       </p>
                   </div>
                   <div class="flex flex-col w-full sm:w-auto sm:flex-row p-4">
                       <a href=""
                          class="flex flex-row items-center hover:opacity-80 text-white justify-center w-full px-4 py-4 mb-4 text-sm font-bold bg-custom leading-6 capitalize duration-100 transform rounded-lg shadow cursor-pointer focus:ring-4 focus:ring-green-500 focus:ring-opacity-50 focus:outline-none sm:mb-0 sm:w-auto sm:mr-4 md:pl-8 md:pr-6 xl:pl-12 xl:pr-10   hover:shadow-lg hover:-translate-y-1">
                           Create my account
                           <span class="ml-4">
                                <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24" class="w-5 h-5 fill-current"><path fill="currentColor" d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z"></path>
                                </svg>
                            </span>
                       </a>

                       <a href=""
                          class="flex  items-center justify-center w-full px-4 py-4 text-sm font-bold leading-6 capitalize duration-100 transform border-2 rounded-lg cursor-pointer border-custom  focus:ring-4 focus:custom focus:ring-opacity-50 focus:outline-none sm:w-auto sm:px-6 border-text  hover:shadow-lg hover:bg-custom hover:text-white hover:-translate-y-1">
                           See Features
                       </a>
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
       @include('frontend.home.clients-review')
   </section>

    <section>
        @include('frontend.home.jmango')
    </section>
@endsection




