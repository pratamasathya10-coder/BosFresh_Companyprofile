@extends('layouts.app')

@section('content')

{{-- ================= NAVBAR ================= --}}
<nav class="fixed top-0 left-0 right-0 z-50 px-6 py-5">

    <div class="max-w-6xl mx-auto bg-white/95 backdrop-blur rounded-full
                px-6 py-4 shadow-sm flex items-center justify-between">

        {{-- Logo --}}
        <a href="/" class="flex items-center">
            <img
                src="{{ asset('images/logo-bos-fresh.jpeg') }}"
                alt="BOS Fresh"
                class="h-14 w-auto"
            >
        </a>

        {{-- Navigation --}}
        <div class="hidden md:flex items-center gap-7 text-sm font-medium">

            <a href="/" class="hover:text-[#174A78] transition">
                Home
            </a>

            <a href="/about" class="hover:text-[#174A78] transition">
                About
            </a>

            <a href="/products" class="text-[#174A78]">
                Products
            </a>

            <a href="/process" class="hover:text-[#174A78] transition">
                What We Do
            </a>

            <a href="/sustainability" class="hover:text-[#174A78] transition">
                Sustainability
            </a>

            <a href="/contact" class="hover:text-[#174A78] transition">
                Contact
            </a>

        </div>

        {{-- Authentication --}}
        <div class="flex items-center gap-3">

            @auth

                <a href="/profile"
                   class="bg-[#173F2A] text-white px-5 py-2.5 rounded-full
                          text-sm hover:bg-[#174A78] transition">
                    My Profile
                </a>

                <form method="POST" action="/logout" class="inline">
                    @csrf

                    <button type="submit"
                            class="text-sm font-medium
                                   hover:text-[#F47F70] transition">
                        Logout
                    </button>
                </form>

            @else

                <a href="/login"
                   class="text-sm font-medium
                          hover:text-[#174A78] transition">
                    Login
                </a>

                <a href="/register"
                   class="bg-[#173F2A] text-white px-5 py-2.5
                          rounded-full text-sm
                          hover:bg-[#174A78] transition">
                    Register
                </a>

            @endauth

        </div>

    </div>

</nav>


{{-- ================= HERO ================= --}}
<section class="min-h-[65vh] flex items-center px-6 pt-32">

    <div class="max-w-6xl mx-auto w-full">

        <div class="max-w-4xl">

            <p class="text-sm uppercase tracking-[0.3em]
                      text-[#174A78] font-semibold mb-5">
                BOS Fresh Products
            </p>

            <h1 class="text-5xl md:text-7xl font-bold
                       leading-[0.95] tracking-tight">

                Fresh products,
                <span class="text-[#174A78]">
                    from Bali.
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-600
                      leading-relaxed max-w-3xl">

                Mengenal berbagai produk pertanian yang menjadi bagian
                dari perjalanan BOS Fresh dalam menghubungkan hasil
                pertanian dengan pasar.

            </p>

        </div>

    </div>

</section>


{{-- ================= PRODUCT INTRO ================= --}}
<section class="px-6 py-24 bg-white">

    <div class="max-w-6xl mx-auto">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <div>

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#174A78] font-semibold">
                    Fresh Produce
                </p>

                <h2 class="text-4xl md:text-5xl font-bold mt-4
                           leading-tight">

                    From local agriculture
                    to everyday needs.

                </h2>

            </div>

            <div>

                <p class="text-gray-600 text-lg leading-relaxed">

                    Produk pertanian memiliki karakter dan kebutuhan
                    penanganan yang berbeda. Karena itu, proses setelah
                    panen menjadi bagian penting sebelum produk sampai
                    kepada pasar dan konsumen.

                </p>

                <p class="mt-5 text-gray-600 leading-relaxed">

                    Halaman ini menjadi ruang untuk mengenal produk
                    BOS Fresh secara lebih dekat.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= PRODUCTS ================= --}}
<section class="px-6 py-24">

    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row
                    md:items-end justify-between gap-6">

            <div>

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#174A78] font-semibold">
                    Our Products
                </p>

                <h2 class="text-4xl md:text-5xl font-bold mt-4">
                    Agricultural products
                    from Bali.
                </h2>

            </div>

            <p class="text-gray-500 max-w-md">
                Product information and imagery can be updated
                as BOS Fresh data becomes available.
            </p>

        </div>


        @php

            $products = [

                [
                    'name' => 'Durian',
                    'description' => 'Fresh tropical fruit from Bali.',
                    'color' => '#EBCB58'
                ],

                [
                    'name' => 'Salak',
                    'description' => 'A distinctive tropical fruit from Bali.',
                    'color' => '#ADC94E'
                ],

                [
                    'name' => 'Dragon Fruit',
                    'description' => 'Fresh dragon fruit from agricultural sources.',
                    'color' => '#F47F70'
                ],

                [
                    'name' => 'Mangosteen',
                    'description' => 'One of Bali’s well-known tropical fruits.',
                    'color' => '#173F2A'
                ],

                [
                    'name' => 'Orange',
                    'description' => 'Fresh citrus fruit for everyday consumption.',
                    'color' => '#174A78'
                ],

            ];

        @endphp


        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mt-14">

            @foreach ($products as $product)

                <article class="group bg-white rounded-[2rem]
                                overflow-hidden shadow-sm
                                hover:shadow-xl transition">

                    {{-- Photo Placeholder --}}
                    <div
                        class="h-72 flex items-center justify-center"
                        style="background-color: {{ $product['color'] }}"
                    >

                        <div class="text-center text-white">

                            <div class="text-7xl mb-4">
                                🍃
                            </div>

                            <p class="text-sm uppercase
                                      tracking-[0.2em] opacity-70">
                                Photo
                            </p>

                        </div>

                    </div>


                    {{-- Product Information --}}
                    <div class="p-8">

                        <p class="text-sm text-[#174A78]
                                  font-semibold uppercase
                                  tracking-[0.15em]">
                            BOS Fresh
                        </p>

                        <h3 class="text-3xl font-bold mt-3">
                            {{ $product['name'] }}
                        </h3>

                        <p class="mt-4 text-gray-600 leading-relaxed">
                            {{ $product['description'] }}
                        </p>

                        <div class="mt-6 pt-5
                                    border-t border-gray-100">

                            <span class="text-sm text-gray-400">
                                Product information
                            </span>

                        </div>

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>


{{-- ================= QUALITY ================= --}}
<section class="px-6 py-24 bg-[#173F2A] text-white">

    <div class="max-w-6xl mx-auto">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <div>

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#ADC94E] font-semibold">
                    Product Quality
                </p>

                <h2 class="text-4xl md:text-5xl font-bold mt-4">
                    Quality matters
                    from farm to market.
                </h2>

            </div>

            <div>

                <p class="text-white/70 text-lg leading-relaxed">

                    Setiap produk pertanian membutuhkan proses
                    penanganan yang tepat agar kualitasnya tetap
                    terjaga sebelum sampai ke pasar.

                </p>

                <div class="grid grid-cols-2 gap-4 mt-8">

                    <div class="bg-white/10 rounded-2xl p-6">

                        <span class="text-3xl">
                            🌱
                        </span>

                        <h3 class="font-semibold mt-4">
                            Fresh
                        </h3>

                        <p class="text-sm text-white/60 mt-2">
                            Produk pertanian segar.
                        </p>

                    </div>


                    <div class="bg-white/10 rounded-2xl p-6">

                        <span class="text-3xl">
                            ✓
                        </span>

                        <h3 class="font-semibold mt-4">
                            Quality
                        </h3>

                        <p class="text-sm text-white/60 mt-2">
                            Menjaga kualitas produk.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= CTA ================= --}}
<section class="px-6 py-24 bg-white">

    <div class="max-w-6xl mx-auto">

        <div class="rounded-[2rem] bg-[#EBCB58]
                    px-8 py-14 md:px-16">

            <p class="text-sm uppercase tracking-[0.25em]
                      text-[#174A78] font-semibold">
                Explore BOS Fresh
            </p>

            <h2 class="text-4xl md:text-5xl
                       font-bold mt-4 max-w-3xl">

                Products are only one part
                of the journey.

            </h2>

            <p class="mt-5 text-[#173F2A]/70
                      max-w-xl leading-relaxed">

                Pelajari bagaimana BOS Fresh menghubungkan produk
                pertanian dengan pasar dan konsumen.

            </p>

            <div class="mt-8">

                <a href="/process"
                   class="inline-block bg-[#174A78] text-white
                          px-7 py-3.5 rounded-full
                          font-semibold hover:bg-[#173F2A]
                          transition">

                    See What We Do

                </a>

            </div>

        </div>

    </div>

</section>


{{-- ================= FOOTER ================= --}}
<footer class="bg-[#173F2A] text-white px-6 py-12">

    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row
                    justify-between gap-8">

            <div>

                <a href="/" class="inline-block">

                    <img
                        src="{{ asset('images/logo-bos-fresh.jpeg') }}"
                        alt="BOS Fresh"
                        class="h-20 w-auto"
                    >

                </a>

                <p class="mt-3 text-white/60 max-w-md">
                    Fresh agricultural products from Bali,
                    connected to markets and consumers.
                </p>

            </div>


            <div class="flex gap-6 text-sm">

                <a href="/about"
                   class="hover:text-[#ADC94E]">
                    About
                </a>

                <a href="/products"
                   class="text-[#ADC94E]">
                    Products
                </a>

                <a href="/contact"
                   class="hover:text-[#ADC94E]">
                    Contact
                </a>

            </div>

        </div>


        <div class="border-t border-white/10 mt-10 pt-6">

            <p class="text-sm text-white/40">
                © {{ date('Y') }} BOS Fresh.
                All rights reserved.
            </p>

        </div>

    </div>

</footer>

@endsection