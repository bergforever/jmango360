
@extends('frontend.layouts.app')
@section('title', 'Price')
@section('content')
<!-- ====== Pricing Section Start -->
<section
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
    <section>
        @include('frontend.pricing.features')
    </section>
@endsection
