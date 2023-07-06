@extends('frontend.layouts.app')
@section('title', 'Customers')
@section('content')

    <section>
        @include('frontend.customers.premium-app-experience')
    </section>
    <!-- ====== Customer Section Start -->
    <section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20 bg-white">
        <div class="lg:mx-16 md:mx-16 mx-4">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-1/2 xl:w-1/2 px-4">
                    <div
                        class="
                bg-[#F2F5FC]
                block
                sm:flex
                lg:block
                xl:flex
                items-center
                sm:items-stretch
                md:items-center
                xl:items-stretch
                rounded-lg
                overflow-hidden
                relative
                z-10
                mb-10
              "
                    >
                        <div
                            class="
                  w-full
                  sm:max-w-[200px]
                  md:max-w-[250px]
                  lg:max-w-full
                  xl:max-w-[200px]
                  2xl:max-w-[240px]
                "
                        >
                            <div class="h-[250px] sm:h-full lg:h-[250px] xl:h-full group">
                                <div class="relative hidden lg:block md:block">
                                    <img
                                        src="{{asset('assets/customers/image-02.jpg')}}"
                                        alt="image"
                                        class="w-full h-full object-cover object-center"
                                    />
                                    <div
                                        class="bg-main bg-opacity-80  absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <div class="text-white text-center items-center  justify-center">
                                            <h3 class="font-semibold text-xl mb-2">Get the app</h3>
                                            <p class="text-sm">Scan the QR code with your smartphone camera</p>
                                            <img
                                                class="lg:ml-12 md:ml-12 ml-28 lg:mt-2 text-center justify-center items-center"
                                                src="{{asset('assets/customers/icons/qr-subdued.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <span class="lg:hidden md:hidden">
                                <img
                                    src="{{asset('assets/customers/image-02.jpg')}}"
                                    alt="image"
                                    class="relative w-full h-full object-cover object-center"
                                />
                                <div
                                    class=" h-[51%] bg-main bg-opacity-80  absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                    <div class="text-white text-center items-center  justify-center">
                                        <h3 class="font-semibold lg:text-xl md:text-xl text-3xl mb-2">Get the app</h3>
                                        <p class="lg:text-sm md:text-sm text-lg lg:mx-0 md:mx-0 mx-10">Scan the QR code with your smartphone camera</p>
                                        <img
                                            class="lg:ml-12 md:ml-12 ml-[38%] lg:mt-2 md:mt-2 mt-4 text-center justify-center items-center"
                                            src="{{asset('assets/customers/icons/qr-subdued.png')}}" alt="">
                                    </div>
                                </div>
                            </span>
                            </div>
                        </div>
                        <div class="w-full p-8 sm:p-6 md:p-8">
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="
                      font-semibold
                      text-xl text-dark
                      hover:text-primary
                      mb-3
                      block
                    "
                                >
                                    Creative Website Themes & Templates in 2021
                                </a>
                            </h3>
                            <p class="text-base text-body-color leading-relaxed mb-5">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit.
                            </p>

                            <a
                                href="javascript:void(0)"
                                class="
                    inline-block
                    py-3
                    px-6
                    border border-main
                    rounded-lg
                    text-sm text-black
                    font-medium
                    hover:border-main hover:bg-main hover:text-white
                    transition
                  "
                            >
                                View case study
                            </a>
                        </div>

                        <span class="absolute bottom-2 right-2 z-[-1]">
                <img class="w-12 h-12 rounded-full" src="{{asset('assets/customers/icons/Group-397.png')}}" alt=""/>
              </span>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 xl:w-1/2 px-4">
                    <div
                        class="
                bg-[#F2F5FC]
                block
                sm:flex
                lg:block
                xl:flex
                items-center
                sm:items-stretch
                md:items-center
                xl:items-stretch
                rounded-lg
                overflow-hidden
                relative
                z-10
                mb-10
              "
                    >
                        <div
                            class="
                  w-full
                  sm:max-w-[200px]
                  md:max-w-[250px]
                  lg:max-w-full
                  xl:max-w-[200px]
                  2xl:max-w-[240px]
                "
                        >
                            <div class="h-[250px] sm:h-full lg:h-[250px] xl:h-full group">
                                <div class="relative hidden lg:block md:block">
                                    <img
                                        src="{{asset('assets/customers/image-02.jpg')}}"
                                        alt="image"
                                        class="w-full h-full object-cover object-center"
                                    />
                                    <div
                                        class="bg-main bg-opacity-80  absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <div class="text-white text-center items-center  justify-center">
                                            <h3 class="font-semibold text-xl mb-2">Get the app</h3>
                                            <p class="text-sm">Scan the QR code with your smartphone camera</p>
                                            <img
                                                class="lg:ml-12 md:ml-12 ml-28 lg:mt-2 text-center justify-center items-center"
                                                src="{{asset('assets/customers/icons/qr-subdued.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <span class="lg:hidden md:hidden">
                                <img
                                    src="{{asset('assets/customers/image-02.jpg')}}"
                                    alt="image"
                                    class="relative w-full h-full object-cover object-center"
                                />
                                <div
                                    class=" h-[51%] bg-main bg-opacity-80  absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                    <div class="text-white text-center items-center  justify-center">
                                        <h3 class="font-semibold lg:text-xl md:text-xl text-3xl mb-2">Get the app</h3>
                                        <p class="lg:text-sm md:text-sm text-lg lg:mx-0 md:mx-0 mx-10">Scan the QR code with your smartphone camera</p>
                                        <img
                                            class="lg:ml-12 md:ml-12 ml-[38%] lg:mt-2 md:mt-2 mt-4 text-center justify-center items-center"
                                            src="{{asset('assets/customers/icons/qr-subdued.png')}}" alt="">
                                    </div>
                                </div>
                            </span>
                            </div>
                        </div>
                        <div class="w-full p-8 sm:p-6 md:p-8">
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="
                      font-semibold
                      text-xl text-dark
                      hover:text-primary
                      mb-3
                      block
                    "
                                >
                                    Creative Website Themes & Templates in 2021
                                </a>
                            </h3>
                            <p class="text-base text-body-color leading-relaxed mb-5">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit.
                            </p>

                            <a
                                href="javascript:void(0)"
                                class="
                    inline-block
                    py-3
                    px-6
                    border border-main
                    rounded-lg
                    text-sm text-black
                    font-medium
                    hover:border-main hover:bg-main hover:text-white
                    transition
                  "
                            >
                                View case study
                            </a>
                        </div>

                        <span class="absolute bottom-2 right-2 z-[-1]">
                <img class="w-12 h-12 rounded-full" src="{{asset('assets/customers/icons/Group-397.png')}}" alt=""/>
              </span>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 xl:w-1/2 px-4">
                    <div
                        class="
                bg-[#F2F5FC]
                block
                sm:flex
                lg:block
                xl:flex
                items-center
                sm:items-stretch
                md:items-center
                xl:items-stretch
                rounded-lg
                overflow-hidden
                relative
                z-10
                mb-10
              "
                    >
                        <div
                            class="
                  w-full
                  sm:max-w-[200px]
                  md:max-w-[250px]
                  lg:max-w-full
                  xl:max-w-[200px]
                  2xl:max-w-[240px]
                "
                        >
                            <div class="h-[250px] sm:h-full lg:h-[250px] xl:h-full group">
                                <div class="relative hidden lg:block md:block">
                                    <img
                                        src="{{asset('assets/customers/image-02.jpg')}}"
                                        alt="image"
                                        class="w-full h-full object-cover object-center"
                                    />
                                    <div
                                        class="bg-main bg-opacity-80  absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <div class="text-white text-center items-center  justify-center">
                                            <h3 class="font-semibold text-xl mb-2">Get the app</h3>
                                            <p class="text-sm">Scan the QR code with your smartphone camera</p>
                                            <img
                                                class="lg:ml-12 md:ml-12 ml-28 lg:mt-2 text-center justify-center items-center"
                                                src="{{asset('assets/customers/icons/qr-subdued.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <span class="lg:hidden md:hidden">
                                <img
                                    src="{{asset('assets/customers/image-02.jpg')}}"
                                    alt="image"
                                    class="relative w-full h-full object-cover object-center"
                                />
                                <div
                                    class=" h-[51%] bg-main bg-opacity-80  absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                    <div class="text-white text-center items-center  justify-center">
                                        <h3 class="font-semibold lg:text-xl md:text-xl text-3xl mb-2">Get the app</h3>
                                        <p class="lg:text-sm md:text-sm text-lg lg:mx-0 md:mx-0 mx-10">Scan the QR code with your smartphone camera</p>
                                        <img
                                            class="lg:ml-12 md:ml-12 ml-[38%] lg:mt-2 md:mt-2 mt-4 text-center justify-center items-center"
                                            src="{{asset('assets/customers/icons/qr-subdued.png')}}" alt="">
                                    </div>
                                </div>
                            </span>
                            </div>
                        </div>
                        <div class="w-full p-8 sm:p-6 md:p-8">
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="
                      font-semibold
                      text-xl text-dark
                      hover:text-primary
                      mb-3
                      block
                    "
                                >
                                    Creative Website Themes & Templates in 2021
                                </a>
                            </h3>
                            <p class="text-base text-body-color leading-relaxed mb-5">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit.
                            </p>

                            <a
                                href="javascript:void(0)"
                                class="
                    inline-block
                    py-3
                    px-6
                    border border-main
                    rounded-lg
                    text-sm text-black
                    font-medium
                    hover:border-main hover:bg-main hover:text-white
                    transition
                  "
                            >
                                View case study
                            </a>
                        </div>

                        <span class="absolute bottom-2 right-2 z-[-1]">
                <img class="w-12 h-12 rounded-full" src="{{asset('assets/customers/icons/Group-397.png')}}" alt=""/>
              </span>
                    </div>
                </div>
                <div class="w-full lg:w-1/2 xl:w-1/2 px-4">
                    <div
                        class="
                bg-[#F2F5FC]
                block
                sm:flex
                lg:block
                xl:flex
                items-center
                sm:items-stretch
                md:items-center
                xl:items-stretch
                rounded-lg
                overflow-hidden
                relative
                z-10
                mb-10
              "
                    >
                        <div
                            class="
                  w-full
                  sm:max-w-[200px]
                  md:max-w-[250px]
                  lg:max-w-full
                  xl:max-w-[200px]
                  2xl:max-w-[240px]
                "
                        >
                            <div class="h-[250px] sm:h-full lg:h-[250px] xl:h-full group">
                                <div class="relative hidden lg:block md:block">
                                    <img
                                        src="{{asset('assets/customers/image-02.jpg')}}"
                                        alt="image"
                                        class="w-full h-full object-cover object-center"
                                    />
                                    <div
                                        class="bg-main bg-opacity-80  absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                        <div class="text-white text-center items-center  justify-center">
                                            <h3 class="font-semibold text-xl mb-2">Get the app</h3>
                                            <p class="text-sm">Scan the QR code with your smartphone camera</p>
                                            <img
                                                class="lg:ml-12 md:ml-12 ml-28 lg:mt-2 text-center justify-center items-center"
                                                src="{{asset('assets/customers/icons/qr-subdued.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <span class="lg:hidden md:hidden">
                                <img
                                    src="{{asset('assets/customers/image-02.jpg')}}"
                                    alt="image"
                                    class="relative w-full h-full object-cover object-center"
                                />
                                <div
                                    class=" h-[51%] bg-main bg-opacity-80  absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300">
                                    <div class="text-white text-center items-center  justify-center">
                                        <h3 class="font-semibold lg:text-xl md:text-xl text-3xl mb-2">Get the app</h3>
                                        <p class="lg:text-sm md:text-sm text-lg lg:mx-0 md:mx-0 mx-10">Scan the QR code with your smartphone camera</p>
                                        <img
                                            class="lg:ml-12 md:ml-12 ml-[38%] lg:mt-2 md:mt-2 mt-4 text-center justify-center items-center"
                                            src="{{asset('assets/customers/icons/qr-subdued.png')}}" alt="">
                                    </div>
                                </div>
                            </span>
                            </div>
                        </div>
                        <div class="w-full p-8 sm:p-6 md:p-8">
                            <h3>
                                <a
                                    href="javascript:void(0)"
                                    class="
                      font-semibold
                      text-xl text-dark
                      hover:text-primary
                      mb-3
                      block
                    "
                                >
                                    Creative Website Themes & Templates in 2021
                                </a>
                            </h3>
                            <p class="text-base text-body-color leading-relaxed mb-5">
                                Lorem ipsum dolor sit amet pretium consectetur adipiscing
                                elit.
                            </p>

                            <a
                                href="javascript:void(0)"
                                class="
                    inline-block
                    py-3
                    px-6
                    border border-main
                    rounded-lg
                    text-sm text-black
                    font-medium
                    hover:border-main hover:bg-main hover:text-white
                    transition
                  "
                            >
                                View case study
                            </a>
                        </div>

                        <span class="absolute bottom-2 right-2 z-[-1]">
                <img class="w-12 h-12 rounded-full" src="{{asset('assets/customers/icons/Group-397.png')}}" alt=""/>
              </span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ====== Customer Section End -->

    <section>
        @include('frontend.customers.carosel')
    </section>
@endsection
{{--<section
    class="
        bg-white
        pb-12
        pt-10
        lg:pb-[90px]
        z-20
        overflow-hidden
      "
>
    <div class="px-4">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
              <span class="font-semibold text-lg text-main mb-2 block">
                Pricing Table
              </span>
                    <h2
                        class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-4
                "
                    >
                        Our Pricing Plan
                    </h2>
                    <p class="text-base text-body-color">
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap items-center justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div
                    class="
                bg-white
                rounded-xl
                relative
                z-10
                overflow-hidden
                border border-main border-opacity-20
                shadow-pricing
                py-10
                px-8
                sm:p-12
                lg:py-10 lg:px-6
                xl:p-12
                mb-10
                text-center
              "
                >
              <span
                  class="text-dark font-medium text-base uppercase block mb-2"
              >
                STARTING FROM
              </span>
                    <h2 class="font-semibold text-main mb-9 text-[28px]">
                        € 19.99/mo
                    </h2>

                    <div class="mb-10">
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            1 User
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            All UI components
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            Lifetime access
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            Free updates
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            Use on 1 (one) project
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            3 Months support
                        </p>
                    </div>
                    <div class="w-full">
                        <a
                            href="javascript:void(0)"
                            class="
                    inline-block
                    text-base
                    font-medium
                    text-main
                    bg-transparent
                    border border-[#D4DEFF]
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:text-white hover:bg-main hover:border-main
                    transition
                  "
                        >
                            Purchase Now
                        </a>
                    </div>
                    <span
                        class="
                  absolute
                  left-0
                  bottom-0
                  z-[-1]
                  w-14
                  h-14
                  rounded-tr-full
                  block
                  bg-main
                "
                    >
              </span>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div
                    class="
                bg-main bg-gradient-to-b
                from-main
                to-[#179BEE]
                rounded-xl
                relative
                z-10
                overflow-hidden
                shadow-pricing
                py-10
                px-8
                sm:p-12
                lg:py-10 lg:px-6
                xl:p-12
                mb-10
                text-center
              "
                >
              <span
                  class="
                  inline-block
                  py-2
                  px-6
                  border
                  rounded-full
                  text-base
                  font-semibold
                  text-white
                  uppercase
                  mb-5
                "
              >
                POPULAR
              </span>
                    <span
                        class="text-white font-medium text-base uppercase block mb-2"
                    >
                STARTING FROM
              </span>
                    <h2 class="font-semibold text-white mb-9 text-[28px]">
                        € 19.99/mo
                    </h2>

                    <div class="mb-10">
                        <p class="text-base font-medium text-white leading-loose mb-1">
                            1 User
                        </p>
                        <p class="text-base font-medium text-white leading-loose mb-1">
                            All UI components
                        </p>
                        <p class="text-base font-medium text-white leading-loose mb-1">
                            Lifetime access
                        </p>
                        <p class="text-base font-medium text-white leading-loose mb-1">
                            Free updates
                        </p>
                        <p class="text-base font-medium text-white leading-loose mb-1">
                            Use on 1 (one) project
                        </p>
                        <p class="text-base font-medium text-white leading-loose mb-1">
                            3 Months support
                        </p>
                    </div>
                    <div class="w-full">
                        <a
                            href="javascript:void(0)"
                            class="
                    inline-block
                    text-base
                    font-medium
                    text-dark
                    bg-white
                    border border-white
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:bg-opacity-90
                    transition
                  "
                        >
                            Purchase Now
                        </a>
                    </div>

                    <div>
                <span class="absolute right-0 top-0 z-[-1]">
                  <svg
                      width="115"
                      height="188"
                      viewBox="0 0 115 188"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                        d="M21.8728 74.7487C-7.29746 54.3102 0.420245 11.2655 2.4266 -7.93432L142.717 -13.0439C158.15 54.3102 178.924 188.74 138.55 187.625C88.0822 186.231 71.1788 165.278 69.562 139.316C67.7108 109.587 53.1242 96.6453 21.8728 74.7487Z"
                        fill="white"
                        fill-opacity="0.06"
                    />
                  </svg>
                </span>
                        <span class="absolute bottom-0 left-0 z-[-1]">
                  <svg
                      width="61"
                      height="222"
                      viewBox="0 0 61 222"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                        d="M54.4989 22.7537C40.0989 -6.94625 0.165607 -1.32733 -18.0011 5.19463C-36.1677 76.1 -36.4871 199.841 -18.0011 245.002C4.99936 301.191 67.5 262.561 54.4989 217.911C48.8553 198.528 22.9989 168.244 34.9989 136.637C46.9989 105.031 72.4989 59.8787 54.4989 22.7537Z"
                        fill="white"
                        fill-opacity="0.06"
                    />
                  </svg>
                </span>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3">
                <div
                    class="
                bg-white
                rounded-xl
                relative
                z-10
                overflow-hidden
                border border-main border-opacity-20
                shadow-pricing
                py-10
                px-8
                sm:p-12
                lg:py-10 lg:px-6
                xl:p-12
                mb-10
                text-center
              "
                >
              <span
                  class="text-dark font-medium text-base uppercase block mb-2"
              >
                STARTING FROM
              </span>
                    <h2 class="font-semibold text-main mb-9 text-[28px]">
                        € 70.99/mo
                    </h2>

                    <div class="mb-10">
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            1 User
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            All UI components
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            Lifetime access
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            Free updates
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            Use on 1 (one) project
                        </p>
                        <p
                            class="
                    text-base
                    font-medium
                    text-body-color
                    leading-loose
                    mb-1
                  "
                        >
                            3 Months support
                        </p>
                    </div>
                    <div class="w-full">
                        <a
                            href="javascript:void(0)"
                            class="
                    inline-block
                    text-base
                    font-medium
                    text-main
                    bg-transparent
                    border border-[#D4DEFF]
                    rounded-full
                    text-center
                    py-4
                    px-11
                    hover:text-white hover:bg-main hover:border-main
                    transition
                  "
                        >
                            Purchase Now
                        </a>
                    </div>

                    <span
                        class="
                  absolute
                  right-0
                  top-0
                  z-[-1]
                  w-14
                  h-14
                  rounded-bl-full
                  block
                  bg-secondary
                "
                    >
              </span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== Pricing Section End -->

--}}
