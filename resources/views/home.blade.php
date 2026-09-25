<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'BOS Fresh' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F7F3E8] text-[#173F2A]">

    {{-- ================= NAVBAR ================= --}}
    <nav class="fixed top-0 left-0 right-0 z-50 px-6 py-5">

        <div class="max-w-6xl mx-auto bg-white/95 backdrop-blur rounded-full
                    px-6 py-4 shadow-sm flex items-center justify-between">

            {{-- Logo --}}
            <a href="/" class="flex items-center">
                <img
                    src="{{ asset('images/logo-bos-fresh.jpeg') }}"
                    alt="BOS Fresh"
                    class="h-16 w-auto"
                >
            </a>

            {{-- Navigation --}}
            <div class="hidden md:flex items-center gap-7 text-sm font-medium">

                <a href="/" class="text-[#174A78]">
                    Home
                </a>

                <a href="/about"
                   class="hover:text-[#174A78] transition">
                    About
                </a>

                <a href="/products"
                   class="hover:text-[#174A78] transition">
                    Products
                </a>

                <a href="/process"
                   class="hover:text-[#174A78] transition">
                    What We Do
                </a>

                <a href="/sustainability"
                   class="hover:text-[#174A78] transition">
                    Sustainability
                </a>

                <a href="/contact"
                   class="hover:text-[#174A78] transition">
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
    <section class="min-h-screen flex items-center px-6 pt-32">

        <div class="max-w-6xl mx-auto w-full">

            <div class="grid md:grid-cols-2 gap-12 items-center">

                {{-- Hero Text --}}
                <div>

                    <p class="text-sm uppercase tracking-[0.3em]
                              text-[#174A78] font-semibold mb-5">
                        BOS Fresh
                    </p>

                    <h1 class="text-5xl md:text-7xl font-bold
                               leading-[0.95] tracking-tight">

                        Fresh From
                        <span class="text-[#174A78]">
                            Bali.
                        </span>

                    </h1>

                    <p class="mt-7 text-lg leading-relaxed
                              text-gray-600 max-w-xl">

                        BOS Fresh hadir sebagai bagian dari ekosistem
                        pertanian Bali yang menghubungkan produk pertanian
                        dengan pasar dan konsumen.

                    </p>

                    <div class="mt-8 flex flex-wrap gap-4">

                        <a href="/about"
                           class="bg-[#173F2A] text-white px-7 py-3.5
                                  rounded-full font-medium
                                  hover:bg-[#174A78] transition">

                            Discover BOS Fresh

                        </a>

                        <a href="/products"
                           class="border border-[#173F2A] px-7 py-3.5
                                  rounded-full font-medium
                                  hover:bg-[#173F2A]
                                  hover:text-white transition">

                            Explore Products

                        </a>

                    </div>

                </div>


                {{-- Hero Visual Placeholder --}}
                <div class="relative">

                    <div class="aspect-[4/5] rounded-[2.5rem]
                                bg-[#173F2A] overflow-hidden
                                flex items-center justify-center">

                        <div class="text-center text-white px-8">

                            <div class="text-7xl mb-5">
                                🌱
                            </div>

                            <p class="text-2xl font-semibold">
                                BOS Fresh
                            </p>

                            <p class="mt-2 text-white/70">
                                Fresh Agricultural Products
                            </p>

                            <p class="mt-8 text-sm text-white/50">
                                PHOTO PLACEHOLDER
                            </p>

                        </div>

                    </div>

                    {{-- Decorative Element --}}
                    <div class="absolute -bottom-6 -left-6
                                w-28 h-28 bg-[#EBCB58]
                                rounded-full -z-10">
                    </div>

                    <div class="absolute -top-6 -right-6
                                w-20 h-20 bg-[#F47F70]
                                rounded-full -z-10">
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= INTRO ================= --}}
    <section class="px-6 py-24 bg-white">

        <div class="max-w-6xl mx-auto">

            <div class="max-w-3xl">

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#174A78] font-semibold">
                    About BOS Fresh
                </p>

                <h2 class="text-4xl md:text-5xl font-bold
                           mt-4 leading-tight">

                    Connecting agriculture
                    with everyday life.

                </h2>

                <p class="mt-6 text-gray-600 text-lg leading-relaxed">

                    BOS Fresh merupakan bagian dari aktivitas hilirisasi
                    produk pertanian, dengan fokus pada bagaimana produk
                    pertanian dapat terhubung dengan pasar dan konsumen.

                </p>

            </div>

        </div>

    </section>


    {{-- ================= WHAT WE DO ================= --}}
    <section class="px-6 py-24 bg-[#173F2A] text-white">

        <div class="max-w-6xl mx-auto">

            <div class="max-w-2xl">

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#ADC94E] font-semibold">
                    What We Do
                </p>

                <h2 class="text-4xl md:text-5xl font-bold mt-4">
                    From agricultural products
                    to the market.
                </h2>

            </div>


            <div class="grid md:grid-cols-4 gap-5 mt-14">

                {{-- Card 1 --}}
                <div class="bg-white/10 rounded-3xl p-7">

                    <div class="text-3xl mb-6">
                        🌱
                    </div>

                    <h3 class="text-xl font-semibold">
                        Sourcing
                    </h3>

                    <p class="mt-3 text-white/70 text-sm leading-relaxed">
                        Menghubungkan produk pertanian dengan
                        jaringan dan kebutuhan pasar.
                    </p>

                </div>


                {{-- Card 2 --}}
                <div class="bg-white/10 rounded-3xl p-7">

                    <div class="text-3xl mb-6">
                        🥬
                    </div>

                    <h3 class="text-xl font-semibold">
                        Fresh Products
                    </h3>

                    <p class="mt-3 text-white/70 text-sm leading-relaxed">
                        Menghadirkan produk pertanian yang
                        segar dan berkualitas.
                    </p>

                </div>


                {{-- Card 3 --}}
                <div class="bg-white/10 rounded-3xl p-7">

                    <div class="text-3xl mb-6">
                        📦
                    </div>

                    <h3 class="text-xl font-semibold">
                        Distribution
                    </h3>

                    <p class="mt-3 text-white/70 text-sm leading-relaxed">
                        Mendukung proses penyaluran produk
                        menuju pasar dan konsumen.
                    </p>

                </div>


                {{-- Card 4 --}}
                <div class="bg-white/10 rounded-3xl p-7">

                    <div class="text-3xl mb-6">
                        🤝
                    </div>

                    <h3 class="text-xl font-semibold">
                        Market
                    </h3>

                    <p class="mt-3 text-white/70 text-sm leading-relaxed">
                        Menghubungkan produk dengan berbagai
                        kebutuhan pasar.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= PRODUCT PREVIEW ================= --}}
    <section class="px-6 py-24">

        <div class="max-w-6xl mx-auto">

            <div class="flex flex-col md:flex-row
                        md:items-end justify-between gap-6">

                <div>

                    <p class="text-sm uppercase tracking-[0.25em]
                              text-[#174A78] font-semibold">
                        Products
                    </p>

                    <h2 class="text-4xl md:text-5xl font-bold mt-4">
                        Fresh products from Bali.
                    </h2>

                </div>

                <a href="/products"
                   class="font-semibold hover:text-[#174A78]">
                    View all products →
                </a>

            </div>


            <div class="grid md:grid-cols-5 gap-4 mt-12">

                @php
                    $products = [
                        ['name' => 'Durian', 'color' => '#EBCB58'],
                        ['name' => 'Salak', 'color' => '#ADC94E'],
                        ['name' => 'Dragon Fruit', 'color' => '#F47F70'],
                        ['name' => 'Mangosteen', 'color' => '#173F2A'],
                        ['name' => 'Orange', 'color' => '#174A78'],
                    ];
                @endphp


                @foreach ($products as $product)

                    <div class="rounded-3xl p-6 min-h-64
                                flex flex-col justify-between text-white"
                         style="background-color: {{ $product['color'] }}">

                        <span class="text-sm opacity-70">
                            BOS Fresh
                        </span>

                        <div>

                            <div class="text-5xl mb-4">
                                🍃
                            </div>

                            <h3 class="text-2xl font-bold">
                                {{ $product['name'] }}
                            </h3>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </section>


    {{-- ================= AGRICULTURE JOURNEY ================= --}}
    <section class="px-6 py-24 bg-[#EBCB58]">

        <div class="max-w-6xl mx-auto">

            <p class="text-sm uppercase tracking-[0.25em]
                      text-[#173F2A] font-semibold">
                Our Journey
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mt-4 max-w-3xl">

                From farm development
                to the market.

            </h2>


            <div class="grid md:grid-cols-4 gap-4 mt-14">

                <div class="bg-white rounded-3xl p-7">

                    <span class="text-sm font-semibold text-[#174A78]">
                        01
                    </span>

                    <h3 class="text-xl font-bold mt-5">
                        Agricultural Development
                    </h3>

                    <p class="mt-3 text-gray-600 text-sm">
                        Pengembangan sektor dan produk pertanian.
                    </p>

                </div>


                <div class="bg-white rounded-3xl p-7">

                    <span class="text-sm font-semibold text-[#174A78]">
                        02
                    </span>

                    <h3 class="text-xl font-bold mt-5">
                        Cultivation
                    </h3>

                    <p class="mt-3 text-gray-600 text-sm">
                        Proses budidaya produk pertanian.
                    </p>

                </div>


                <div class="bg-white rounded-3xl p-7">

                    <span class="text-sm font-semibold text-[#174A78]">
                        03
                    </span>

                    <h3 class="text-xl font-bold mt-5">
                        Post-Harvest
                    </h3>

                    <p class="mt-3 text-gray-600 text-sm">
                        Penanganan produk setelah proses panen.
                    </p>

                </div>


                <div class="bg-white rounded-3xl p-7">

                    <span class="text-sm font-semibold text-[#174A78]">
                        04
                    </span>

                    <h3 class="text-xl font-bold mt-5">
                        Market & Export
                    </h3>

                    <p class="mt-3 text-gray-600 text-sm">
                        Menghubungkan produk dengan pasar.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= CTA ================= --}}
    <section class="px-6 py-24 bg-white">

        <div class="max-w-6xl mx-auto">

            <div class="rounded-[2rem] bg-[#174A78]
                        text-white px-8 py-14 md:px-16">

                <div class="max-w-3xl">

                    <p class="text-sm uppercase tracking-[0.25em]
                              text-[#ADC94E] font-semibold">
                        BOS Fresh
                    </p>

                    <h2 class="text-4xl md:text-5xl
                               font-bold mt-4">

                        Discover fresh agriculture
                        from Bali.

                    </h2>

                    <p class="mt-5 text-white/70 max-w-xl">
                        Explore our products and learn more about
                        BOS Fresh and its role in the agricultural
                        ecosystem.
                    </p>

                    <div class="mt-8">

                        <a href="/contact"
                           class="inline-block bg-white text-[#174A78]
                                  px-7 py-3.5 rounded-full
                                  font-semibold hover:bg-[#F7F3E8]
                                  transition">

                            Contact BOS Fresh

                        </a>

                    </div>

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
                       class="hover:text-[#ADC94E]">
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

</body>
</html>