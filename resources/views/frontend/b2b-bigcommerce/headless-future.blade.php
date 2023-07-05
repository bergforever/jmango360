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
<section class="pb-2">
    <div class="w-full px-6">
        <div
            class="mt-8 relative rounded-lg bg-custom container mx-auto flex flex-col items-center pt-12 sm:pt-24 pb-8 sm:pb-32 md:pb-48 lg:pb-56 xl:pb-40">
            <img class="mr-2  lg:mr-12 mt-2 lg:mt-12 absolute right-0 top-0"
                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg2.svg" alt="bg"/>
            <img class="ml-2 lg:ml-12 mb-2 lg:mb-12 absolute bottom-0 left-0"
                 src="https://tuk-cdn.s3.amazonaws.com/can-uploader/center_aligned_with_image-svg3.svg" alt="bg"/>

            <div class="w-11/12 sm:w-2/3 mb-5 sm:mb-10">
                <h1 class="text-white">EXCEED THE EXPECTATIONS OF TODAY’S B2B BUYERS</h1>
                <h1 class="text-3xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-left text-white font-bold leading-tight lg:my-0 md:my-0 my-2">
                    Why headless is the future for B2B commerce</h1>
            </div>
            <div class="flex mb-0 sm:mb-20 items-center text-left justify-center  lg:mx-56 md:mx-56 mx-4">
                <h5 class="text-white">Want to stay ahead of competitors? Then your B2B shopping experience has to
                    exceed the expectations of B2B buyers. The superior headless B2B solution gives you all the speed
                    and flexibility. You can launch your store fast with numerous built-in features and integrations to
                    empower sales, while having full freedom to shape the design and add more plugins & features along
                    the way. Always be ready for the future.
                    <br>
                    <br>
                    <a href=""
                       class="lg:w-[35%] md:w-[35%] flex flex-row items-center hover:bg-white hover:text-main text-white justify-center w-full px-4 py-4 mb-4 text-sm font-bold  leading-6 capitalize duration-100 border-white border-2 transform rounded-lg shadow cursor-pointer focus:ring-4 focus:ring-mainfocus:ring-opacity-50 focus:outline-none sm:mb-0 sm:w-auto sm:mr-4 md:pl-8 md:pr-6 xl:pl-12 xl:pr-10   hover:shadow-lg hover:-translate-y-1">
                        Book a demo
                    </a>
                </h5>
            </div>
        </div>

        <div
            class="container mx-auto flex justify-center md:-mt-56 -mt-20 sm:-mt-40 h-screen flex-col items-center text-center text-white py-0 px-3 lg:pb-0 md:pb-0 pe-px">
            <div
                class="lg:mt-0 md:mt-0 mt-48 rounded-xl relative video-docker absolute lg:pb-0 md:pb-0 pb-0 lg:w-[75%] lg:h-[80%] md:w-[70%] md:h-[70%] w-[100%] h-[60%] overflow-hidden">
                <video class="min-w-full min-h-full absolute object-cover"
                       src="{{asset('assets/b2b-bigcommerce/video/What we do in 60 seconds.mp4')}}" type="video/mp4" autoplay muted
                       loop></video>
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
