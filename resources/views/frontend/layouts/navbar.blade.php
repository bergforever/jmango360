<section>

    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
            <a href="{{url('/')}}" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-black">Jmango360</span>
            </a>
            <div class="flex items-center md:order-2">
                <button data-collapse-toggle="mega-menu-icons" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu-icons" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div id="mega-menu-icons" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
                    {{--<li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-main border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-main md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                    </li>--}}
                    <li>
                        <button id="mega-menu-icons-dropdown-button" data-dropdown-toggle="mega-menu-icons-dropdown" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-black border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-main md:p-0">
                            B2C
                            <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div id="mega-menu-icons-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md md:grid-cols-3">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-icons-dropdown-button">
                                    <li>
                                        <a href="#" class="text-black text-lg text-center font-bold">
                                            FOR B2C
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('native')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            Native E-commerce apps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('feature')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Resources</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                            Features
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#" class="text-black text-lg text-center font-bold">
                                            BY INDUSTRY
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('fashion')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                            Fashion Native App
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('cosmetic')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path></svg>
                                            Cosmetics Native App
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('supplement')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path></svg>
                                            Supplements Native App
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('other')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                                            Other
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#" class="text-black text-lg text-center font-bold">
                                            BY INTEGRATION
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('magento')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                                            Magento / Adobe
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('big-commerce')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Terms</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                            BigCommerce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('sales-force')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Terms</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                            Salesforce Commerce Cloud
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('light-speed')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Terms</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                            Lightspeed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('shopify')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Terms</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                            Shopify / Shopify +
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <button id="mega-menu-icons-dropdown-button1" data-dropdown-toggle="mega-menu-icons-dropdown1" class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-black border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-main md:p-0 ">
                            B2B
                            <svg aria-hidden="true" class="w-5 h-5 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div id="mega-menu-icons-dropdown1" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md md:grid-cols-1">
                            <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-icons-dropdown-button1">
                                    <li>
                                        <a href="#" class="text-black text-lg font-bold">
                                            FOR B2B
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('b2b-bigcommerce')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                            Headless B2B BigCommerce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('ordering-app')}}" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Resources</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>
                                            B2B ordering apps
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Pro Version</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path></svg>
                                            Custom Mobile Solutions
                                        </a>
                                    </li>
                                </ul>
                            </div>
                           {{-- <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Blog</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path><path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path></svg>
                                            Blog
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Newsletter</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                            Newsletter
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Playground</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path></svg>
                                            Playground
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">License</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path></svg>
                                            License
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-4 text-gray-900 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Contact Us</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
                                            Contact Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Support Center</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path></svg>
                                            Support Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center text-gray-500 dark:text-gray-400 hover:text-main dark:hover:text-blue-500 group">
                                            <span class="sr-only">Terms</span>
                                            <svg class="w-4 h-4 mr-2 text-gray-400 dark:text-gray-500 group-hover:text-main dark:group-hover:text-blue-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                            Terms
                                        </a>
                                    </li>
                                </ul>
                            </div>--}}
                        </div>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-main md:p-0 ">Customers</a>
                    </li>
                    <li>
                        <a href="{{route('pricing')}}" class="block py-2 pl-3 pr-4 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-main md:p-0 ">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-main md:p-0">For Agencies
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pl-3 pr-4 text-black border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-main md:p-0 ">Blog
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</section>
