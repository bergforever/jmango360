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
<section>
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
