<x-layout>
    <x-slot:title>{{ $title }}</x-slot:>
    
    <div class="relative">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 z-10 relative">    
            <a href="#" class="inline-flex justify-between items-center py-1 px-1 pe-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
            <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 me-3">New</span> <span class="text-sm font-medium">Dars daring kini telah hadir, Lihat Apa Yang Baru</span> 
            <svg class="w-2.5 h-2.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
        </a>
        <div style="height: 60px; overflow: hidden;">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white" id="typed-output"></h1>
    </div>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-200">Platform pembelajaran daring yang menghimpun ilmu dari Markiz-Markiz Yaman, menawarkan kemudahan belajar kapan saja dan di mana saja.
        </p>
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Mulai Belajar
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
            </button>
    </div>
    <div class="bg-gradient-to-b from-blue-50 to-transparent dark:from-blue-900 w-full h-full absolute top-0 left-0 z-0"></div>
</div>

<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-3 md:grid-cols-3 gap-6 place-items-center">
      <div class="grayscale hover:grayscale-0 transition-all duration-300">
        <img 
          src="{{ asset('images/partner1.png') }}" 
          alt="Partner Logo 1" 
          class="h-16 w-auto max-w-full opacity-70 hover:opacity-100"
        >
      </div>

      <div class="grayscale hover:grayscale-0 transition-all duration-300">
        <img 
          src="{{ asset('images/partner3.png') }}" 
          alt="Partner Logo 1" 
          class="h-16 w-auto max-w-full opacity-70 hover:opacity-100"
        >
      </div>
      
      <div class="grayscale hover:grayscale-0 transition-all duration-300">
        <img 
          src="{{ asset('images/partner2.png') }}" 
          alt="Partner Logo 2" 
          class="h-16 w-auto max-w-full opacity-70 hover:opacity-100"
        >
      </div>
      
    </div>
  </div>
  
<x-card-course></x-card-course>
<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div id="accordion-open" data-accordion="open" data-aos="zoom-in">
            <h2 id="accordion-open-heading-1">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
                <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Apa itu Markazdoroos?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="accordion-open-body-1" class="hidden" aria-labelledby="accordion-open-heading-1">
              <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Platform pembelajaran daring yang menghadirkan ilmu dari Markiz-Markiz Yaman, memudahkan Anda belajar kapan saja dan di mana saja.</p>
              </div>
            </div>
            <h2 id="accordion-open-heading-2">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-2" aria-expanded="false" aria-controls="accordion-open-body-2">
                <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>Apa saja yang ditawarkan Markazdoroos?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="accordion-open-body-2" class="hidden" aria-labelledby="accordion-open-heading-2">
              <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Dapatkan akses ke berbagai materi pembelajaran berkualitas dari para ahli, dirancang untuk mendukung pembelajaran Anda secara fleksibel.</p>
              </div>
            </div>
            <h2 id="accordion-open-heading-3">
              <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 border border-gray-200 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3" data-accordion-target="#accordion-open-body-3" aria-expanded="false" aria-controls="accordion-open-body-3">
                <span class="flex items-center"><svg class="w-5 h-5 me-2 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg> Bagaimana cara memulai?</span>
                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                </svg>
              </button>
            </h2>
            <div id="accordion-open-body-3" class="hidden" aria-labelledby="accordion-open-heading-3">
              <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
                <p class="mb-2 text-gray-500 dark:text-gray-400">Pelajari cara mudah untuk bergabung dan mulai perjalanan belajar Anda di Markazdoroos hanya dalam beberapa langkah sederhana.</p>
                                <ul class="ps-5 text-gray-500 list-disc dark:text-gray-400">
                  <li><a href="https://flowbite.com/pro/" class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
                  <li><a href="https://tailwindui.com/" rel="nofollow" class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var typed = new Typed('#typed-output', {
                    strings: ['Markazdoroos','مركز الدروس'],
                    typeSpeed: 50,
                    backSpeed: 50,
                    loop: true,
                    showCursor: false
                });
            });
        </script>
</x-layout>