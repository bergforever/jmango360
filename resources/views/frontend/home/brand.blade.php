{{--
<style>
    carosal-logo {
        align-items: center;
        background: white;
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
    .slider-logo {
        background: transparent;
        box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
        height: 100px;
        margin: auto;
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    .slider-logo::before, .slider-logo::after {
        /*background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);*/
        content: "";
        height: 100px;
        position: absolute;
        width: 200px;
        z-index: 2;
    }
    .slider-logo::after {
        right: 0;
        top: 0;
        transform: rotateZ(180deg);
    }
    .slider-logo::before {
        left: 0;
        top: 0;
    }
    .slider-logo .slide-logo {
        -webkit-animation: scroll 40s linear infinite;
        animation: scroll 40s linear infinite;
        display: flex;
        width: calc(250px * 14);
    }
    .slider-logo .logo {
        height: 10%;
        width:10%;
    }
</style>

<section id="carosal-logo" class="bg-white">
    <div  class="lg:mt-24 md:mt-24 mt-10 relative items-center w-full px-5 pt-12 pb-1 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-2">
        <div class="flex w-full mx-auto text-left">
            <div class="relative inline-flex items-center mx-auto align-middle">
                <div class="text-center">
                    <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-5xl lg:max-w-4xl">
                        <span class="text-main">Our solutions</span>  , integrated with
                        <div class="text-main text-left">your platform</div>
                    </h1>
                    <p class="max-w-xl mx-auto mt-8 text-base leading-relaxed text-gray-500 text-left">
                        Via our plugin we’ll integrate with your ecommerce platform and settings.
                        Your app and backend are always synced.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="slider-logo pt-8 pb-56">
        <div class="slide-logo gap">
            <div class="logo">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl   ">
                    <img class="ml-8" src="{{asset('assets/images/company-logo/bigcommerce-home.png')}}" alt="">
                </div>
            </div>
            <div class="logo">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl   ">
                    <img class="ml-8"  src="{{asset('assets/images/company-logo/lightspeed-1.png')}}" alt="">
                </div>
            </div>
            <div class="logo">
                <div class="ml-3 mt-3 py-14 border-2 border-black rounded-2xl   ">
                    <img class="ml-8" src="{{asset('assets/images/company-logo/magento-home.png')}}" alt="">
                </div>
            </div>
            <div class="logo">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl   ">
                    <img class="ml-10" src="{{asset('assets/images/company-logo/prestashop-home.png')}}" alt="">
                </div>
            </div>
            <div class="logo">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl   ">
                    <img class="ml-10" src="{{asset('assets/images/company-logo/salesforce-commerce-cloud-home.png')}}" alt="">
                </div>
            </div>
            <div class="logo">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl   ">
                    <img class="ml-10" src="{{asset('assets/images/company-logo/shopify-home.png')}}" alt="">
                </div>
            </div>
            <div class="logo">
                <div class="ml-3 mt-3 py-14 border-2 border-black rounded-2xl   ">
                    <img class="ml-8" src="{{asset('assets/images/company-logo/magento-home.png')}}" alt="">
                </div>
            </div>
            <div class="logo">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl   ">
                    <img class="ml-8"  src="{{asset('assets/images/company-logo/lightspeed-1.png')}}" alt="">
                </div>
            </div>
            <div class="logo">
                <div class="ml-3 mt-3 py-14  border-2 border-black rounded-2xl   ">
                    <img class="ml-10" src="{{asset('assets/images/company-logo/prestashop-home.png')}}" alt="">
                </div>
            </div>


        </div>
    </div>
    @include('frontend.home.brand-reverse')
</section>



--}}

<section class="bg-white py-20 lg:py-[120px]">
    <div class="mx-14">
        <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full lg:w-6/12 xl:w-5/12 px-4">
                <div class="mb-12 lg:mb-0">
                    <h2
                        class="
                  text-dark
                  font-bold
                  text-3xl
                  sm:text-4xl
                  lg:text-[34px]
                  2xl:text-[38px]
                  mb-5
                "
                    >
                        <span class="text-main">Our solutions</span>, integrated with <span class="text-main">your platform</span>
                    </h2>
                    <p class="text-base text-body-color leading-relaxed mb-10">
                        Via our plugin we’ll integrate with your ecommerce platform and settings.
                        Your app and backend are always synced.
                    </p>

                </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-7/12 px-4">
                <div class="flex flex-wrap justify-center items-center lg:gap-y-0 md:gap-y-0 gap-y-6">
                    <a
                        href="javascript:void(0)"
                        class="
                  max-w-[188px]
                  flex
                  items-center
                  justify-center
                  border
                  hover:bg-red-600
                  border-primary border-opacity-10
                  h-[110px]
                  px-7

                "
                    >
                        <img
                            src="{{asset('assets/images/company-logo/bigcommerce-home.png')}}"
                            alt="image"
                            class="max-w-full h-10"
                        />
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="
                  max-w-[188px]
                  flex
                  items-center
                  justify-center
                  border
                  hover:bg-red-600
                  border-primary border-opacity-10
                  h-[110px]
                  px-7
                "
                    >
                        <img
                            src="{{asset('assets/images/company-logo/lightspeed-1.png')}}"
                            alt="image"
                            class="max-w-full h-10"
                        />
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="
                  max-w-[188px]
                  flex
                  items-center
                  justify-center
                  border
                  hover:bg-red-600
                  border-primary border-opacity-10
                  h-[110px]
                  px-7
                "
                    >
                        <img
                            src="{{asset('assets/images/company-logo/magento-home.png')}}"
                            alt="image"
                            class="max-w-full h-10"
                        />
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="
                  max-w-[188px]
                  flex
                  items-center
                  justify-center
                  border
                  hover:bg-red-600
                  border-primary border-opacity-10
                  h-[110px]
                  px-7
                "
                    >
                        <img
                            src="{{asset('assets/images/company-logo/prestashop-home.png')}}"
                            alt="image"
                            class="max-w-full h-10"
                        />
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="
                  max-w-[188px]
                  flex
                  items-center
                  justify-center
                  border
                  hover:bg-red-600
                  border-primary border-opacity-10
                  h-[110px]
                  px-7
                "
                    >
                        <img
                            src="{{asset('assets/images/company-logo/salesforce-commerce-cloud-home.png')}}"
                            alt="image"
                            class="max-w-full h-10"
                        />
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="
                  max-w-[188px]
                  flex
                  items-center
                  justify-center
                  border
                  hover:bg-red-600
                  border-primary border-opacity-10
                  h-[110px]
                  px-7
                "
                    >
                        <img
                            src="{{asset('assets/images/company-logo/shopify-home.png')}}"
                            alt="image"
                            class="max-w-full h-10"
                        />
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
