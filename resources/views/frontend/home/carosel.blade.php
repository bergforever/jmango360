{{--<style>
    carosal-brand {
        align-items: center;
        background: black;
        display: flex;
        height: 100vh;
        justify-content: center;
    }

    @-webkit-keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-250px * 7));
        }
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-250px * 7));
        }
    }
    .slider-brand {
        background: #0d0d0d;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
        height: 100px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    .slider-brand::before, .slider-brand::after {
        /*background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);*/
        content: "";
        height: 100px;
        position: absolute;
        width: 200px;
        z-index: 2;
    }
    .slider-brand::after {
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
    }
    .slider-brand::before {
        left: 0;
        top: 0;
    }
    .slider-brand .slide-brand {
        -webkit-animation: scroll 40s linear infinite;
        animation: scroll 40s linear infinite;
        display: flex;
        width: calc(250px * 14);
    }
    .slider-brand .slide-bran {
        height: 100px;
        width: 250px;
    }
</style>

<section id="carosal-brand">
    <div class="slider-brand pt-8 pb-48">
        <div class="slide-brand gap-10">
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/Balmain-Logo-Vector-1-300x89.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/caddys-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/gill-marine-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/glamira-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/homeexpresslogo-home-300x192.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/hue-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/junior-couture-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/leica-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/logosubdued-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/Rectangle-365-300x107.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/sagebrook2-300x85.png')}}" height="100" width="250" alt="" />
            </div>
            <div class="slide-bran">
                <img src="{{asset('assets/slider-images/isola-300x85.png')}}" height="100" width="250" alt="" />
            </div>
        </div>
        <br>
        <div class="grid grid-cols-3 gap-2">
            <div></div>
            <div></div>
            <div class="lg:col-span-1 md:col-span-1 col-span-3">
                <h1 class="text-center text-white lg:text-xl md:text-xl font-inherit lg:mx-0 md:mx-0 mx-2"><b>TRUSTED BY BRANDS IN 56 COUNTRIES</b></h1>
            </div>
        </div>
    </div>
</section>--}}

{{--<section>
    <div class="pb-16" style="font-family: 'Lato', sans-serif">
        <dh-component>
            <div class="container mx-auto pt-16">
                <div class="w-11/12 xl:w-2/3 lg:w-2/3 md:w-2/3 mx-auto sm:mb-10 mb-16">
                    <h1 tabindex="0" class="focus:outline-none xl:text-4xl md:text-3xl text-xl text-center text-custom font-extrabold mb-5 pt-4">Partnerships with Coveted Brands</h1>
                    <p tabindex="0" class="focus:outline-none text-base md:text-lg lg:text-xl text-center text-gray-900 font-normal xl:w-10/12 xl:mx-auto">TRUSTED BY BRANDS IN 56 COUNTRIES</p>
                </div>
                <div class="xl:py-16 lg:py-16 md:py-16 sm:py-16 px-15 flex flex-wrap">
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r :border-r border-gray-200 xl:pb-10 pb-16 items-center">
                        <img tabindex="0" class=" lg:mt-10 focus:outline-none" src="{{asset('assets/slider-images/Balmain-Logo-Vector-1-300x89.png')}}" alt="Adidas" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b xl:border-r lg:border-r border-gray-200 xl:pb-10 pb-16 items-center">
                        <img tabindex="0" class="lg:mt-10 focus:outline-none" src="{{asset('assets/slider-images/2-removebg-preview.png')}}" alt="Chanel" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-b lg:border-b border-gray-200 xl:pb-10 pb-16 pt-4 items-center">
                        <img tabindex="0" class="lg:mt-10 focus:outline-none" src="{{asset('assets/slider-images/3-removebg-preview.png')}}" alt="Nike" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center lg:border-b xl:border-b lg:border-l xl:border-l border-gray-200 xl:pb-10 pb-16 items-center">
                        <img tabindex="0" class="lg:mt-12 focus:outline-none" src="{{asset('assets/slider-images/4-removebg-preview.png')}}" alt="Toyota" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                        <img tabindex="0" class="lg:mb-10 focus:outline-none" src="{{asset('assets/slider-images/homeexpresslogo-home-300x192.png')}}" alt="GS1" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r border-gray-200 xl:pt-10 items-center">
                        <img tabindex="0" class="lg:mb-10 focus:outline-none" src="{{asset('assets/slider-images/6-removebg-preview.png')}}" alt="BlackBerry" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                        <img tabindex="0" class="lg:mb-10 focus:outline-none" src="{{asset('assets/slider-images/7-removebg-preview.png')}}" alt="Mini" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-l lg:border-l border-gray-200 xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                        <img tabindex="0" class="lg:mb-10 focus:outline-none" src="{{asset('assets/slider-images/8-removebg-preview.png')}}" alt="Honda" role="img"  />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r xl:border-t lg:border-t border-gray-200 xl:pt-10 items-center">
                        <img tabindex="0" class="lg:mb-10 focus:outline-none" src="{{asset('assets/slider-images/9-removebg-preview.png')}}" alt="GS1" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-r lg:border-r xl:border-t lg:border-t border-gray-200 xl:pt-10 items-center">
                        <img tabindex="0" class="lg:mb-10 focus:outline-none" src="{{asset('assets/slider-images/10-removebg-preview.png')}}" alt="BlackBerry" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:pt-10 lg:pt-10 md:pt-2 pt-16 xl:border-t lg:border-t">
                        <img tabindex="0" class="lg:mb-10 focus:outline-none" src="{{asset('assets/slider-images/Rectangle-365-300x107.png')}}" alt="Mini" role="img" />
                    </div>
                    <div class="hover:opacity-90 hover:bg-custom bg-custom_black w-6/12 xl:w-1/4 lg:w-1/4 md:w-1/4 flex justify-center xl:border-l lg:border-l xl:border-t lg:border-t border-gray-200 xl:pt-10 lg:pt-10 md:pt-2 pt-16">
                        <img tabindex="0" class="lg:mb-10 focus:outline-none" src="{{asset('assets/slider-images/12-removebg-preview.png')}}" alt="Honda" role="img"  />
                    </div>

                </div>

            </div>
        </dh-component>
        <!-- Code block ends -->
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    </div>
</section>--}}

<section>
    <section class="relative pt-18 pb-36 bg-blueGray-100 overflow-hidden">
        <div class="relative z-10 container px-4 mx-auto">
            <div class="w-11/12 xl:w-2/3 lg:w-2/3 md:w-2/3 mx-auto sm:mb-10 mb-16">
                <h1 tabindex="0" class="focus:outline-none xl:text-4xl md:text-3xl text-xl text-center text-custom font-extrabold mb-5 pt-4">Partnerships with Coveted Brands</h1>
                <p tabindex="0" class="focus:outline-none text-base md:text-lg lg:text-xl text-center text-gray-900 font-normal xl:w-10/12 xl:mx-auto">TRUSTED BY BRANDS IN 56 COUNTRIES</p>
            </div>
            <div class="flex flex-wrap max-w-5xl mx-auto -m-3">
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/Balmain-Logo-Vector-1-300x89.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/2-removebg-preview.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/3-removebg-preview.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/4-removebg-preview.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/homeexpresslogo-home-300x192.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/6-removebg-preview.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/7-removebg-preview.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/8-removebg-preview.png')}}" alt="">
                    </div>
                </div>

                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/9-removebg-preview.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/10-removebg-preview.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/Rectangle-365-300x107.png')}}" alt="">
                    </div>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/4 p-3">
                    <div class="flex items-center justify-center py-8 px-9 h-full bg-main rounded-3xl">
                        <img src="{{asset('assets/slider-images/12-removebg-preview.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
