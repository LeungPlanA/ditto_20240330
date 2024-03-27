@vite(['resources/views/frontend/template/header/header-1/script.js'])
@vite(['resources/views/frontend/template/header/header-1/style.css'])

<header class="
    fixed left-0 top-0
    w-full z-30
    bg-[#F4F7F7]
    "
    sytle="box-shadow:0px 4px 17.1px 0px rgba(0, 0, 0, 0.20);">
    <!-- Promote -->
    @includeIf('template/promote/header-promote/header-promote')

    <!-- Contianer -->
    <div
        class="flex items-center
    h-[var(--topHeaderHeight)] w-[95%] max-w-[var(--containerMaxWidth)] 
    mx-auto justify-between">
        <!-- Logo -->
        <a href="/index">
            <img class="h-[43px]" src="/images/common/logo.png" alt="Booking" />
            <!--<span class="font-bold text-3xl" style="font-family: fantasy;">SUNWERKS</span>-->
        </a>

        <!-- Menu -->
        <div class="hidden lg:flex">
            <a href="/about-us" class="mx-[20px] font-bold text-lg">關於我們</a>
            <a href="/product" class="mx-[20px] font-bold text-lg">科目</a>
            <a href="/contact-us" class="mx-[20px] mr-0 font-bold text-lg">聯絡我們</a>
            <a class="w-[25px] ml-[45px]" href="/shopping-cart">
                <!--<x-heroicon-o-shopping-cart />-->
            </a>
            <a class="w-[25px] ml-[20px]" href="/login">
                <!--<x-heroicon-o-user />-->
            </a>
        </div>

        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
    </div>
    <div>

    </div>
</header>
