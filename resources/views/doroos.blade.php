<x-layout>
    <x-slot:title>{{ $title }}</x-slot:>
    <section class="bg-gray-50 py-8 antialiased dark:bg-gray-900 md:py-12">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
          <!-- Heading & Filters -->
          <div class="mb-4 items-end justify-between space-y-4 sm:flex sm:space-y-0 md:mb-8">
            <div>
              <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Doroos</h2>
            </div>
          </div>
          {{ $pakets->links() }}
          <div class="mb-4 grid gap-4 sm:grid-cols-2 md:mb-8 lg:grid-cols-3 xl:grid-cols-4">

            @forelse($pakets as $paket)
    <!-- Pengecekan apakah Paket memiliki Doroos dengan Dars terkait -->
    @if($paket->doroos->isNotEmpty() && $paket->doroos->some(fn($doroos) => $doroos->dars->isNotEmpty())) 
        <!-- Jika ada Doroos yang memiliki Dars terkait dengan Paket -->
        <div class="rounded-lg border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-800" data-aos="flip-left">
            <div class="h-56 w-full">
                <a href="#">
                    <img class="mx-auto h-full dark:hidden" src="/storage/{{ $paket->image }}" alt="" />
                    <img class="mx-auto hidden h-full dark:block" src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front-dark.svg" alt="" />
                </a>
            </div>
            <div class="pt-6">
                <a href="#" class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white">{{ $paket->name }}</a>
                <div class="mt-4">
                    <!-- Tampilkan semua Doroos yang terkait dengan Paket yang memiliki Dars -->
                    @foreach($paket->doroos as $doroos)
                        <!-- Pastikan Doroos memiliki Dars terkait -->
                        @if($doroos->dars->isNotEmpty()) <!-- Hanya tampilkan Doroos yang memiliki Dars -->
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 bg-blue-100 p-2 rounded break-words">
                                {{ $doroos->name }}
                            </p>
                        @endif
                    @endforeach
                </div>

                <div class="mt-4 flex items-center justify-between gap-4">
                    <p class="text-2xl font-extrabold leading-tight text-gray-900 dark:text-white">${{ $paket->price }}</p>
                </div>
                <div class="flex justify-end">
                    <button type="button" class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                        <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                        </svg>
                        Add to cart
                    </button>
                </div>                       
            </div>
        </div>
    @endif
@empty
    <p>Tidak ada item untuk ditampilkan.</p>
@endforelse
          </div>
          <div class="w-full text-center">
            <button type="button" class="rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">Show more</button>
          </div>
        </div>
            </div>
          </div>
        </form>
      </section>
      
</x-layout>