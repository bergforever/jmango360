{{--
<section class="mx-10">
    <div class="mb-4 border-b border-gray-200 ">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 rounded-t-lg text-gray-600 border-gray-300" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">CATEGORIES</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">BLOG POST</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">DOWNLOADABLE CONTENT</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            @include('frontend.blog.category')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            @include('frontend.blog.blog-post')
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
            @include('frontend.blog.download-content')
        </div>
    </div>

</section>
--}}
<style>
    [aria-selected="true"] {
        background-color: #a10000; /* Set your desired background color here */
        color: #ffffff; /* Set your desired text color here */
    }
</style>
<section class="mx-14">
    <div class="w-full">
        <div class="relative right-0">
            <ul
                class="relative flex list-none flex-wrap rounded-xl bg-blue-gray-50/60 p-1"
                data-tabs="tabs"
                role="list"
            >
                <li class="z-30 flex-auto text-center">
                    <a
                        class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                        data-tab-target=""
                        active=""
                        role="tab"
                        aria-selected="true"
                        aria-controls="app"
                    >
                        <span class="ml-1">CATEGORIES</span>
                    </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a
                        class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                        data-tab-target=""
                        role="tab"
                        aria-selected="false"
                        aria-controls="message"
                    >
                        <span class="ml-1">BLOG POST</span>
                    </a>
                </li>
                <li class="z-30 flex-auto text-center">
                    <a
                        class="text-slate-700 z-30 mb-0 flex w-full cursor-pointer items-center justify-center rounded-lg border-0 bg-inherit px-0 py-1 transition-all ease-in-out"
                        data-tab-target=""
                        role="tab"
                        aria-selected="false"
                        aria-controls="settings"
                    >
                        <span class="ml-1">DOWNLOADABLE CONTENT</span>
                    </a>
                </li>
            </ul>
            <div data-tab-content="" class="p-2">
                <div class="block opacity-100" id="app" role="tabpanel">
                    @include('frontend.blog.category')
                </div>
                <div class="hidden opacity-0" id="message" role="tabpanel">
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500 antialiased">
                        @include('frontend.blog.blog-post')
                    </p>
                </div>
                <div class="hidden opacity-0" id="settings" role="tabpanel">
                    <p class="block font-sans text-base font-light leading-relaxed text-inherit text-blue-gray-500 antialiased">
                        @include('frontend.blog.download-content')
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
