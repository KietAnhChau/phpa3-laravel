<nav class="relative bg-white border-b border-stone-200 dark:bg-neutral-800 dark:border-neutral-700" id="nav">
    <div class="max-w-[85rem] flex flex-wrap justify-between gap-2 items-center w-full mx-auto lg:py-2.5 px-4 sm:px-6 lg:px-8">

    <!-- Nav Links -->
    <div class="w-full flex justify-center items-center">
        <!-- Collapse -->
        <div class="hs-collapse hidden overflow-hidden transition-all duration-300 lg:block">
            <div class="overflow-hidden overflow-y-auto max-h-[75vh]">
                <div class="lg:flex lg:items-center lg:gap-x-1 py-2 lg:py-0 space-y-1 lg:space-y-0 justify-center">
                    <a class="flex gap-x-1.5 py-2 px-3 items-center text-sm text-stone-800 rounded-lg hover:bg-stone-100 focus:outline-none focus:bg-stone-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700
                    {{ $name == 'Home' ? 'bg-stone-100 focus:bg-stone-200 dark:bg-neutral-700 dark:focus:bg-neutral-600' : '' }}"
                        href="{{ route('home') }}">
                        Home
                    </a>

                    <a class="flex gap-x-1.5 py-2 px-3 items-center text-sm text-stone-800 rounded-lg hover:bg-stone-100 focus:outline-none focus:bg-stone-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700
                    {{ $name == 'Manage' ? 'bg-stone-100 focus:bg-stone-200 dark:bg-neutral-700 dark:focus:bg-neutral-600' : '' }}"
                        href="{{ route('manage') }}">
                        Manage
                    </a>

                    <a class="flex gap-x-1.5 py-2 px-3 items-center text-sm text-stone-800 rounded-lg hover:bg-stone-100 focus:outline-none focus:bg-stone-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700
                    {{ $name == 'Search' ? 'bg-stone-100 focus:bg-stone-200 dark:bg-neutral-700 dark:focus:bg-neutral-600' : '' }}"
                        href="{{ route('search') }}">
                        Search
                    </a>

                    <a class="flex gap-x-1.5 py-2 px-3 items-center text-sm text-stone-800 rounded-lg hover:bg-stone-100 focus:outline-none focus:bg-stone-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700
                    {{ $name == 'About' ? 'bg-stone-100 focus:bg-stone-200 dark:bg-neutral-700 dark:focus:bg-neutral-600' : '' }}"
                        href="{{ route('about') }}">
                        About
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
