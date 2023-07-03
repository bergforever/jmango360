{{--<style>
    .score{
        font-weight: 700;
        font-size: 80px;
        color: black;
        text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;
    }

    .heading{
        font-weight: 700;
        font-size: 50px;
        color: black;
        text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;
    }
</style>

<section class="lg:px-36 md:px-36 px-8 ">
    <div class="bg-[#0f1111] rounded-3xl">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 lg:px-32 md:px-32  pt-10 ">
            <div>
            </div>
            <div class="lg:col-span-3 md:col-span-2 col-span-1">
                <h1 class="text-white text-center"><span class="heading font-bold">Proven</span> <span class="font-bold text-[50px]">app</span> <span class="font-bold heading">results</span></h1>

            </div>
            <div>
            </div>
        </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-32 pb-10 pt-10 ">
        <div class="flex flex-col justify-center items-center gap-2 p-2 rounded-md h-48">
            <div class="flex gap-2 items-center">
                <span class=" font-bold text-xl score">3.5x</span>
            </div>
            <div class="font-semibold opacity-90 text-xl text-white text-center mt-10">Higher conversion</div>
        </div>

        <div
            class="flex flex-col justify-center items-center gap-2  p-2 rounded-md h-48">
            <div class="flex gap-2 items-center">
                <span class=" font-bold text-xl score">4x</span>
            </div>
            <div class="font-semibold opacity-90 text-xl text-white text-center mt-10">More product views</div>
        </div>

        <div
            class="flex flex-col justify-center items-center gap-2 p-2 rounded-md h-48">
            <div class="flex gap-2 items-center">
                <span class=" font-bold text-xl score">2x</span>
            </div>
            <div class="font-semibold opacity-90 text-xl text-white text-center mt-10">Higher returning visitors</div>
        </div>
    </div>
    </div>
</section>--}}

<section class="bg-white py-20">
    <h1 class="text-black text-center text-4xl font-bold py-10 text-custom"> Proven app results</h1>
    <div class="min-w-screen flex items-center justify-center px-5">
        <div class="w-full max-w-3xl">
            <div class="-mx-2 md:flex">
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg shadow-main shadow-lg mb-4">
                        <div class="rounded-lg bg-white  shadow-lg  md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h3 class="text-5xl text-black font-semibold leading-tight my-3">3.5 x</h3>
                                <p class="text-sm text-green-500 leading-tight">Higher conversion</p>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart1" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg shadow-main shadow-lg mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h3 class="text-5xl text-black font-semibold leading-tight my-3">4 x</h3>
                                <p class="text-sm text-red-500 leading-tight">More product views</p>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart2" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg shadow-main shadow-lg mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h3 class="text-5xl text-black font-semibold leading-tight my-3">2 x</h3>
                                <p class="text-sm text-green-500 leading-tight">Higher returning visitors</p>
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart3" height="70"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
