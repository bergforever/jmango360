<section class=" py-14 bg-[#efefef]">

    <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-4 p-12">
        <div>
            <div class="max-w-sm p-6 rounded-lg">
                <div class="w-16 h-16  mb-2 text-gray-500">
                    <img class="bg-main bg-opacity-40 p-4 rounded-full" src="{{asset('assets/images/icons/icons-without-caption.svg')}}">
                </div>
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold  text-gray-900 ">Premium Quality</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 ">Beautiful design and future-proof features. All you need to maximize mobile growth.</p>

            </div>
        </div>
        <div>
            <div class="max-w-sm p-6   rounded-lg ">
                <div class="w-16 h-16 mb-2 text-gray-500">
                    <img class="bg-main bg-opacity-40 p-4 rounded-full" src="{{asset('assets/images/icons/web.svg')}}">
                </div>
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold  text-gray-900 ">Low-code Open-SaaS</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 ">Proven technology with the right building blocks. Further customisations also possible.</p>

            </div>
        </div>
        <div>
            <div class="max-w-sm p-6   rounded-lg  ">
                <div class="w-16 h-16 mb-2 text-gray-500">
                    <img class="bg-main bg-opacity-40 p-4 rounded-full" src="{{asset('assets/images/icons/transfer-copy.png')}}">
                </div>
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold  text-gray-900 ">Mobile marketing expertise</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 ">Where others stop, we continue. Get strategic advice and app marketing support.</p>

            </div>
        </div>
        <div>
            <div class="max-w-sm p-6  rounded-lg  ">
                <div class="w-16 h-16 mb-2 text-gray-500">
                    <img class="bg-main bg-opacity-40 p-4 rounded-full" src="{{asset('assets/images/icons/control.png')}}">
                </div>
                <a href="#">
                    <h5 class="mb-2 text-xl font-bold  text-gray-900 ">Stay in control</h5>
                </a>
                <p class="mb-3 font-normal text-gray-500 ">Implement changes fast. Launch push messages anytime.</p>

            </div>
        </div>
    </div>
    @include('frontend.home.cta')
</section>
