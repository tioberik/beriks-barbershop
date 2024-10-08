<x-layout>
    <x-header />
    <x-main-index />
    <div class="mx-auto max-w-7xl px-6 lg:px-8 py-10 text-center justify-center">
        <h1 class="text-6xl font-black text-black">Shop</h1>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-5 sm:gap-10 mt-10">
            @foreach ($products as $product)
                <x-product-card :$product />
            @endforeach
        </div>

        <a href="/shop">
            <button
                class="bg-orange-500 text-white text-lg px-10 py-3 rounded-xl mt-10 hover:bg-black hover:text-white transition-all duration-500">
                Pogledaj više
            </button>
        </a>
    </div>
</x-layout>