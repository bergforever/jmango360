
<style>
    .video-docker video {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .video-docker::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        /*background: rgba(0, 0, 0, 0.6);*/
        z-index: 1;
    }

    .video-content {
        z-index: 2;
    }

</style>
{{--<section>
    <div  class="lg:mt-24 md:mt-24 mt-10 relative items-center w-full px-5 pt-12 pb-1 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-2">
        <div class="flex w-full mx-auto text-left">
            <div class="relative inline-flex items-center mx-auto align-middle">
                <div class="text-center">
                    <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
                        We create <span class="text-main">premium</span> mobile apps<br class="hidden lg:block">
                        for <span class="text-main">ecommerce brands</span>
                    </h1>
                    <p class="max-w-xl mx-auto mt-8 text-base leading-relaxed text-gray-500">Want to turn mobile
                        visitors into frequent shoppers with your own mobile app? We’ll guide you all the way. Our
                        low-code mobile app builder allows us to design, integrate and launch a stunning mobile app
                        in just a few weeks time. Even better: app marketing is included.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="relative mt-0 h-screen flex flex-col items-center justify-center text-center text-white py-0 px-3 lg:pb-0 md:pb-0 pe-px">
    <div class="video-docker absolute lg:pb-0 md:pb-0 pb-0 lg:w-[70%] lg:h-[70%] md:w-[70%] md:h-[70%] w-[90%] h-[50%] overflow-hidden">
        <video class="min-w-full min-h-full absolute object-cover" src="{{asset('assets/video/What we do in 60 seconds.mp4')}}" type="video/mp4" autoplay muted loop></video>
    </div>
</section>
--}}

<section class="pb-2">
    <div class="w-full px-6">
        <div class="mt-8 relative rounded-lg bg-custom container mx-auto flex flex-col items-center pt-12 sm:pt-24 pb-24 sm:pb-32 md:pb-48 lg:pb-56 xl:pb-40">
            <img class="mr-2  lg:mr-12 mt-2 lg:mt-12 absolute right-0 top-0"  src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg2.svg" alt="bg"/>
            <img class="ml-2 lg:ml-12 mb-2 lg:mb-12 absolute bottom-0 left-0" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg3.svg" alt="bg"/>

            <div class="w-11/12 sm:w-2/3 mb-5 sm:mb-10">
                <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-white font-bold leading-tight">We create premium mobile apps for ecommerce brands</h1>
            </div>
            <div class="flex mb-10 sm:mb-20 items-center text-center justify-center mx-auto mx-64">
                <h5 class="text-white">Want to turn mobile visitors into frequent shoppers with your own mobile app? We’ll guide you all
                    the way. Our low-code mobile app builder allows us to design, integrate and launch a stunning mobile
                    app in just a few weeks time. Even better: app marketing is included.
                    <br>
                    <br>
                    All for a flexible monthly plan.</h5>
            </div>
        </div>
        {{--<div class="container mx-auto flex justify-center md:-mt-56 -mt-20 sm:-mt-40">
            <div class="relative sm:w-2/3 w-11/12">
                <img src="https://tuk-cdn.s3.amazonaws.com/assets/components/hero/h_2.png" alt="Sample Page" role="img"  />
            </div>
        </div>--}}

        <div class="container mx-auto flex justify-center md:-mt-56 -mt-20 sm:-mt-40 h-screen flex-col items-center text-center text-white py-0 px-3 lg:pb-0 md:pb-0 pe-px">
            <div class=" rounded-xl relative video-docker absolute lg:pb-0 md:pb-0 pb-0 lg:w-[75%] lg:h-[80%] md:w-[70%] md:h-[70%] w-[90%] h-[50%] overflow-hidden">
                <video class="min-w-full min-h-full absolute object-cover" src="{{asset('assets/video/What we do in 60 seconds.mp4')}}" type="video/mp4" autoplay muted loop></video>
            </div>
        </div>
    </div>
    </section>

<script>
    // Function to toggle header menu in mobile view.
    function toggleMenu(flag) {
        let value = document.getElementById("menu");
        if (flag) {
            value.classList.remove("hidden");
        } else {
            value.classList.add("hidden");
        }
    }
</script>
