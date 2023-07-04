<section class="">
    <div
        class="lg:mt-4  md:mt-24 mt-3 relative items-center w-full px-5 pt-12 pb-1 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-2">
        <div class="flex w-full mx-auto text-left">
            <div class="relative inline-flex items-center mx-auto align-middle">
                <div class="text-center">
                    <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
                        Why do I <span class="text-custom">need an app</span> ?
                    </h1>
                    <p class="max-w-xl mx-auto mt-8 text-base leading-relaxed text-black">If you’re like most brands
                        +70% of your traffic comes from mobile devices. Yet, your mobile-friendly site can’t convert and
                        retain customers like a mobile app can. Global research shows apps drive conversion, repeat
                        purchases and brand loyalty. Add an extra revenue channel, today.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="lg:mt-2 lg:mb-2 md:mt-2 md:mb-2 mt-2 mb-32">
    <div class="min-w-screen flex items-center justify-center px-5 py-5">
        <div class="rounded shadow-2xl overflow-hidden w-full md:flex" style="max-width:900px"
             x-data="{stockTicker:stockTicker()}" x-init="stockTicker.renderChart()">
            <div class="flex w-full md:w-1/2 px-5 pb-4 pt-8 bg-white text-white items-center">
                <img src="{{asset('assets/images/image-353.png')}}" alt="">
            </div>
            <div class="flex w-full md:w-1/2 p-10 bg-custom text-white items-center">
                <div class="w-full text-center justify-center items-center">
                    {{--<h3 class="text-lg font-semibold leading-tight text-gray-800" x-text="stockTicker.stockFullName"></h3>
                    <h6 class="text-sm leading-tight mb-2"><span x-text="stockTicker.stockShortName"></span>&nbsp;&nbsp;-&nbsp;&nbsp;Aug 2nd 4:00pm AEST</h6>
                    <div class="flex w-full items-end mb-6">
                        <span class="block leading-none text-3xl text-gray-800" x-text="stockTicker.price.current.toFixed(3)">0</span>
                        <span class="block leading-5 text-sm ml-4 text-green-500" x-text="`${stockTicker.price.high-stockTicker.price.low<0?'▼':'▲'} ${(stockTicker.price.high-stockTicker.price.low).toFixed(3)} (${(((stockTicker.price.high/stockTicker.price.low)*100)-100).toFixed(3)}%)`"></span>
                    </div>
                    <div class="flex w-full text-xs">
                        <div class="flex w-5/12">
                            <div class="flex-1 pr-3 text-left font-semibold">Open</div>
                            <div class="flex-1 px-3 text-right" x-text="stockTicker.price.open.toFixed(3)">0</div>
                        </div>
                        <div class="flex w-7/12">
                            <div class="flex-1 px-3 text-left font-semibold">Market Cap</div>
                            <div class="flex-1 pl-3 text-right" x-text="stockTicker.price.cap.m_formatter()">0</div>
                        </div>
                    </div>
                    <div class="flex w-full text-xs">
                        <div class="flex w-5/12">
                            <div class="flex-1 pr-3 text-left font-semibold">High</div>
                            <div class="px-3 text-right" x-text="stockTicker.price.high.toFixed(3)">0</div>
                        </div>
                        <div class="flex w-7/12">
                            <div class="flex-1 px-3 text-left font-semibold">P/E ratio</div>
                            <div class="pl-3 text-right" x-text="stockTicker.price.ratio.toFixed(2)">0</div>
                        </div>
                    </div>
                    <div class="flex w-full text-xs">
                        <div class="flex w-5/12">
                            <div class="flex-1 pr-3 text-left font-semibold">Low</div>
                            <div class="px-3 text-right" x-text="stockTicker.price.low.toFixed(3)">0</div>
                        </div>
                        <div class="flex w-7/12">
                            <div class="flex-1 px-3 text-left font-semibold">Dividend yield</div>
                            <div class="pl-3 text-right" x-text="`${stockTicker.price.dividend}%`">0%</div>
                        </div>
                    </div>--}}
                    <div class="flex items-center py-2">
                        <div class="mr-5">
                            <div class="flex items-center">
                                <div class="text-3xl font-bold text-white mr-2">85%</div>
                            </div>
                            <div class="text-sm text-white">of traffic is mobile</div>
                        </div>
                        <div class="hidden md:block w-px h-8 bg-red mr-5" aria-hidden="true"></div>
                    </div>
                    <div class="flex items-center py-2">
                        <div class="mr-5">
                            <div class="flex items-center">
                                <div class="text-3xl font-bold text-white mr-2">3,5x</div>
                            </div>
                            <div class="text-sm text-white">more conversion versus mobile site</div>
                        </div>
                        <div class="hidden md:block w-px h-8 bg-red mr-5" aria-hidden="true"></div>
                    </div>
                    <div class="flex items-center py-2">
                        <div class="mr-5">
                            <div class="flex items-center">
                                <div class="text-3xl font-bold text-white mr-2">123%</div>
                            </div>
                            <div class="text-sm text-white">more repeat orders versus mobile site</div>
                        </div>
                        <div class="hidden md:block w-px h-8 bg-red mr-5" aria-hidden="true"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
