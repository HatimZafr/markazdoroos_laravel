<div id="sticky-banner" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 w-full">
<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://markazdoroos.online/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('images/markazdoroos.png') }}" class="h-8" alt="Markaz Doroos Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Markaz Doroos</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        
        <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
      </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <x-nav-link href="/" :active="request()->is('/')">Beranda</x-nav-link>
        <x-nav-link href="/doroos" :active="request()->is('doroos')">Doroos</x-nav-link>               
              <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
              <x-nav-link href="/about" :active="request()->is('about')">Tentang</x-nav-link>
      </ul>
    </div>
    </div>
  </nav>
  </div>
  