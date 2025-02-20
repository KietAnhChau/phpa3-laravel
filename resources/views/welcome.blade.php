<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-200">
       <!-- ========== HEADER ========== -->
        <header class="flex flex-col z-50">
            <nav class="bg-white border-b border-stone-200 dark:bg-neutral-800 dark:border-neutral-700">
                <div class="max-w-[85rem] flex justify-between lg:grid lg:grid-cols-3 basis-full items-center w-full mx-auto py-2.5 px-4 sm:px-6 lg:px-8">
                <div class="flex items-center">
                    <div class="hidden sm:block">
                        <!-- Logo -->
                        <a class="flex-none rounded-md text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="../../pro/ecommerce/index.html" aria-label="KC Logo">
                            <svg class="w-28 h-auto" width="116" height="32" viewBox="0 0 116 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <text x="10" y="20" font-family="Arial" font-size="20" fill="white">KIET</text>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="hidden lg:block lg:w-full lg:mx-0"></div>

                <div class="flex justify-end items-center gap-x-2">
                    <div class="flex items-center">
                        <div class="hs-dropdown [--placement:top-right] [--strategy:absolute] [--auto-close:inside] relative inline-flex">
                            <button id="hs-pro-dnad" type="button" class="inline-flex shrink-0 items-center gap-x-1.5 text-start text-stone-800 rounded-full hover:text-stone-600 focus:outline-none focus:text-stone-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                                <img class="shrink-0 size-[38px] lg:size-8 rounded-full" src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80" alt="Avatar">

                                <span class="grow hidden lg:block">Kiet Chau</span>
                            </button>
                        </div>
                    </div>
                </div>
            </nav>
            <nav class="relative bg-white border-b border-stone-200 dark:bg-neutral-800 dark:border-neutral-700">
                <div class="max-w-[85rem] flex flex-wrap justify-between gap-2 items-center w-full mx-auto lg:py-2.5 px-4 sm:px-6 lg:px-8">

                <!-- Nav Links -->
                <div class="w-full flex justify-center items-center">
                    <!-- Collapse -->
                    <div id="hs-pro-emh" class="hs-collapse hidden overflow-hidden transition-all duration-300 lg:block">
                        <div class="overflow-hidden overflow-y-auto max-h-[75vh]">
                            <div class="lg:flex lg:items-center lg:gap-x-1 py-2 lg:py-0 space-y-1 lg:space-y-0 justify-center">
                                <a class="flex gap-x-1.5 py-2 px-3 items-center text-sm text-stone-800 rounded-lg hover:bg-stone-100 focus:outline-none focus:bg-stone-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 bg-stone-100 focus:bg-stone-200 dark:bg-neutral-700 dark:focus:bg-neutral-600" href="../../pro/ecommerce/index.html">
                                    Home
                                </a>

                                <a class="flex gap-x-1.5 py-2 px-3 items-center text-sm text-stone-800 rounded-lg hover:bg-stone-100 focus:outline-none focus:bg-stone-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="../../pro/ecommerce/referrals.html">
                                    Manage
                                </a>

                                <a class="flex gap-x-1.5 py-2 px-3 items-center text-sm text-stone-800 rounded-lg hover:bg-stone-100 focus:outline-none focus:bg-stone-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="../../pro/ecommerce/reviews.html">
                                    Search
                                </a>

                                <a class="flex gap-x-1.5 py-2 px-3 items-center text-sm text-stone-800 rounded-lg hover:bg-stone-100 focus:outline-none focus:bg-stone-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="../../pro/ecommerce/reviews.html">
                                    About
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        <main id="content">
            <div class="max-w-[85rem] p-2 sm:p-5 md:pt-5 lg:px-8 mx-auto">
                Something
            </div>
        </main>

        <footer class="mt-auto  bg-white border-t border-gray-200 dark:bg-neutral-900 dark:border-neutral-700">
            <div class="w-full max-w-[85rem] mx-auto pt-10 lg:pt-20 px-4 sm:px-6 lg:px-8">
                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-5 mb-14">
                    <div>
                        <h4 class="mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Help</h4>

                        <ul class="grid space-y-2">
                            <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Help Center</a></li>
                            <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">FAQs</a></li>
                            <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Subscription</a></li>
                            <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Order Status</a></li>
                            <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Returns & Exchanges</a></li>
                            <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Contact Us</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Resources</h4>

                        <ul class="grid space-y-2">
                        <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Gift Cards</a></li>
                        <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Find a Store</a></li>
                        <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Membership</a></li>
                        </ul>
                    </div>

                    <div>
                        <h4 class="mb-3 font-medium text-sm text-gray-800 dark:text-neutral-200">Company</h4>

                        <ul class="grid space-y-2">
                        <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Newsroom</a></li>
                        <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">New features</a></li>
                        <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Careers</a></li>
                        <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Investors</a></li>
                        <li><a class="text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">Purpose</a></li>
                        </ul>
                    </div>

                    <div class="space-y-10">
                        <!-- List -->
                        <div class="space-y-3">
                            <button type="button" class="flex items-center gap-x-1.5 text-start text-sm text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" data-hs-overlay="#hs-pro-shnlm">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/><circle cx="12" cy="10" r="3"/></svg>

                                Location
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                            </button>

                            <button type="button" class="flex items-center gap-x-1.5 text-start text-sm text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" data-hs-overlay="#hs-pro-shnrsm">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"/><path d="M2 12h20"/></svg>
                                United Kingdom
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                            </button>

                            <button type="button" class="flex items-center gap-x-1.5 text-start text-sm text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400" data-hs-overlay="#hs-pro-shwrm">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                                Send us feedback
                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                            </button>
                        </div>
                        <!-- End List -->

                        <div>
                            <h4 class="font-medium text-sm text-gray-800 dark:text-neutral-200">Stay connected</h4>

                            <!-- Social Brands -->
                            <div class="mt-3 md:mt-5 space-x-4">
                                <a class="relative inline-block text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                                    <span class="sr-only">Instagram</span>
                                </a>
                                <a class="relative inline-block text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">
                                    <svg class="shrink-0 size-3.5" width="48" height="50" viewBox="0 0 48 50" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M28.5665 20.7714L46.4356 0H42.2012L26.6855 18.0355L14.2931 0H0L18.7397 27.2728L0 49.0548H4.23464L20.6196 30.0087L33.7069 49.0548H48L28.5655 20.7714H28.5665ZM22.7666 27.5131L5.76044 3.18778H12.2646L42.2032 46.012H35.699L22.7666 27.5142V27.5131Z" fill="currentColor"/></svg>
                                    <span class="sr-only">X (Twitter)</span>
                                </a>
                                <a class="relative inline-block text-sm text-gray-500 underline-offset-4 hover:underline hover:text-gray-800 focus:outline-none focus:underline focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" href="#">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"/><path d="m10 15 5-3-5-3z"/></svg>
                                    <span class="sr-only">YouTube</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-[85rem] pb-10 lg:pb-10 mx-auto px-4 sm:px-6 lg:px-8"></div>
            </div>
        </footer>
    </body>
</html>
