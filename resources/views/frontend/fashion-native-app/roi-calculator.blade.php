<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet" />

<section>
    <div
        class="mx-auto max-w-[1340px] px-4 py-16 sm:px-6 sm:py-24 lg:me-0 lg:pe-0 lg:ps-8"
    >
        <div
            class="grid grid-cols-1 gap-y-8 lg:grid-cols-3 lg:items-center lg:gap-x-16"
        >
            <div class="max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-3xl text-main font-bold tracking-tight sm:text-[40px] text-left">
                    <div class="pb-4">What our clients say</div>
                </h2>

                <div class="hidden lg:mt-8 lg:flex lg:gap-4">
                    <button
                        class="prev-button rounded-full border border-main p-3 text-black hover:bg-main hover:text-white"
                    >
                        <span class="sr-only">Previous Slide</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="h-5 w-5 rtl:rotate-180"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M15.75 19.5L8.25 12l7.5-7.5"
                            />
                        </svg>
                    </button>

                    <button
                        class="next-button rounded-full  border border-main p-3 text-black hover:bg-main hover:text-white"
                    >
                        <span class="sr-only">Next Slide</span>
                        <svg
                            class="h-5 w-5 rtl:rotate-180"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M9 5l7 7-7 7"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                            />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="-mx-6 lg:col-span-2 lg:mx-0">
                <div class="swiper-container !overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <blockquote
                                class="flex h-full flex-col justify-between bg-white p-12"
                            >
                                <div>
                                    {{--<div class="flex gap-0.5 text-green-500">
                                        <svg
                                            class="h-5 w-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>

                                        <svg
                                            class="h-5 w-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>

                                        <svg
                                            class="h-5 w-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>

                                        <svg
                                            class="h-5 w-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>

                                        <svg
                                            class="h-5 w-5"
                                            fill="currentColor"
                                            viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                            />
                                        </svg>
                                    </div>--}}

                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-main sm:text-3xl">
                                            Oliver Cole
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-500">
                                            Gill Marine asked JMango360 to assist in migrating our wholesale business
                                            from Magento to BigCommerce. We couldn’t be happier with the end result.
                                            JMango360 managed to surpass our expectations not only with regards to
                                            functionality but also with their support. The results have been great
                                            and I would recommend any B2B business, but wholesale especially to
                                            work with JMango360.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-sm text-gray-500">
                                    Global head of e-commerce &mdash; Gill Marine
                                </footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote
                                class="flex h-full flex-col justify-between bg-white p-12"
                            >
                                <div>
                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-main sm:text-3xl">
                                            Sheida Ngoi
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-500">
                                            With over 75% of mobile visitors and fast international expansion,
                                            we were looking for a partner that could both develop the app and
                                            consult us about app ROI and promotion. After one year of working
                                            with JMango360, I can say we made the right choice.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-sm text-gray-500">
                                    UX/UI Manager Subdued &mdash; Subdued
                                </footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote
                                class="flex h-full flex-col justify-between bg-white p-12"
                            >
                                <div>
                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-main sm:text-3xl">
                                            Nicholas Bendon
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-500">
                                            We’re really very happy with our decision to use JMango to extend
                                            our existing online shopping to include an app. The app provides
                                            a more accessible, more convenient shopping experience for our
                                            mobile using customers and integrates really smoothly with BigCommerce.
                                            Good integration was essential for us in moving forward with this project
                                            and the positive JMango-BigCommerce relationship is great backup for us.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-sm text-gray-500">
                                    Managing Director  &mdash;  CH Marine
                                </footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote
                                class="flex h-full flex-col justify-between bg-white p-12"
                            >
                                <div>
                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-main sm:text-3xl">
                                            Jentry Kelley
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-500">
                                            ‘In the beauty business competition is high. That’s why we pay lots of
                                            attention to making sure the shopping experience is super easy. The app
                                            JMango360 created not only has great reviews from our customers.
                                            It significantly increased our average order value and repeat orders
                                            on mobile.’
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-sm text-gray-500">
                                    Founder  &mdash; Jentry Kelley
                                </footer>
                            </blockquote>
                        </div>

                        <div class="swiper-slide">
                            <blockquote
                                class="flex h-full flex-col justify-between bg-white p-12"
                            >
                                <div>
                                    <div class="mt-4">
                                        <p class="text-2xl font-bold text-main sm:text-3xl">
                                            Tyler Hicks
                                        </p>

                                        <p class="mt-4 leading-relaxed text-gray-500">
                                            This is a great company to work with. They are fast, competent,
                                            and competitively priced. I highly recommend working with jmango
                                            if you’re looking to take your website to an app.
                                        </p>
                                    </div>
                                </div>

                                <footer class="mt-8 text-sm text-gray-500">
                                    VP Operations  &mdash;  National Salon Resources
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 flex justify-center gap-4 lg:hidden">
            <button
                aria-label="Previous slide"
                class="prev-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white"
            >
                <svg
                    class="h-5 w-5 -rotate-180 transform"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M9 5l7 7-7 7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                    />
                </svg>
            </button>

            <button
                aria-label="Next slide"
                class="next-button rounded-full border border-pink-600 p-4 text-pink-600 hover:bg-pink-600 hover:text-white"
            >
                <svg
                    class="h-5 w-5"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M9 5l7 7-7 7"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                    />
                </svg>
            </button>
        </div>
    </div>
    <script src="{{asset('assets/js/review.js')}}"></script>
</section>

