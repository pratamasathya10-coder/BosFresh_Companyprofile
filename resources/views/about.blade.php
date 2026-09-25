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

            <a href="/about" class="text-[#174A78]">
                About
            </a>

            <a href="/products" class="hover:text-[#174A78] transition">
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
<section class="min-h-[75vh] flex items-center px-6 pt-32">

    <div class="max-w-6xl mx-auto w-full">

        <div class="max-w-4xl">

            <p class="text-sm uppercase tracking-[0.3em]
                      text-[#174A78] font-semibold mb-5">
                About BOS Fresh
            </p>

            <h1 class="text-5xl md:text-7xl font-bold
                       leading-[0.95] tracking-tight">

                More than fresh.
                <span class="text-[#174A78]">
                    It's a connection.
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-600
                      leading-relaxed max-w-3xl">

                BOS Fresh hadir sebagai bagian dari aktivitas hilirisasi
                produk pertanian yang menghubungkan produk pertanian
                dengan pasar dan konsumen.

            </p>

        </div>

    </div>

</section>


{{-- ================= WHAT IS BOS FRESH ================= --}}
<section class="px-6 py-24 bg-white">

    <div class="max-w-6xl mx-auto">

        <div class="grid md:grid-cols-2 gap-16 items-start">

            <div>

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#174A78] font-semibold">
                    What is BOS Fresh?
                </p>

                <h2 class="text-4xl md:text-5xl font-bold mt-4
                           leading-tight">

                    Connecting fresh
                    agriculture with the market.

                </h2>

            </div>

            <div class="text-gray-600 text-lg leading-relaxed">

                <p>
                    BOS Fresh merupakan bagian dari ekosistem pertanian
                    yang berfokus pada hubungan antara produk pertanian,
                    pasar, dan konsumen.
                </p>

                <p class="mt-6">
                    Melalui proses hilirisasi, produk pertanian tidak hanya
                    dihasilkan dari sektor budidaya, tetapi juga perlu
                    mendapatkan penanganan dan akses pasar yang tepat.
                </p>

                <p class="mt-6">
                    BOS Fresh menjadi salah satu bagian yang membantu
                    membawa produk pertanian lebih dekat dengan kebutuhan
                    pasar dan kehidupan sehari-hari.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= OUR ROLE ================= --}}
<section class="px-6 py-24 bg-[#173F2A] text-white">

    <div class="max-w-6xl mx-auto">

        <div class="max-w-3xl">

            <p class="text-sm uppercase tracking-[0.25em]
                      text-[#ADC94E] font-semibold">
                Our Role
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mt-4">
                From farmers to the market.
            </h2>

            <p class="mt-6 text-white/70 text-lg leading-relaxed">
                BOS Fresh berada pada bagian yang menghubungkan produk
                pertanian dengan kebutuhan pasar dan konsumen.
            </p>

        </div>


        <div class="grid md:grid-cols-3 gap-5 mt-14">

            {{-- Farmer --}}
            <div class="bg-white/10 rounded-3xl p-8">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    01
                </span>

                <div class="text-5xl mt-8">
                    🌱
                </div>

                <h3 class="text-2xl font-bold mt-6">
                    Farmers
                </h3>

                <p class="mt-4 text-white/70 leading-relaxed">
                    Produk pertanian berasal dari kegiatan budidaya
                    dan jaringan pertanian.
                </p>

            </div>


            {{-- BOS Fresh --}}
            <div class="bg-white/10 rounded-3xl p-8">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    02
                </span>

                <div class="text-5xl mt-8">
                    🍃
                </div>

                <h3 class="text-2xl font-bold mt-6">
                    BOS Fresh
                </h3>

                <p class="mt-4 text-white/70 leading-relaxed">
                    Menghubungkan produk pertanian dengan kebutuhan
                    dan peluang pasar.
                </p>

            </div>


            {{-- Market --}}
            <div class="bg-white/10 rounded-3xl p-8">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    03
                </span>

                <div class="text-5xl mt-8">
                    🏪
                </div>

                <h3 class="text-2xl font-bold mt-6">
                    Market
                </h3>

                <p class="mt-4 text-white/70 leading-relaxed">
                    Produk kemudian dapat terhubung dengan berbagai
                    kebutuhan pasar dan konsumen.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= BUSINESS AREA ================= --}}
<section class="px-6 py-24">

    <div class="max-w-6xl mx-auto">

        <p class="text-sm uppercase tracking-[0.25em]
                  text-[#174A78] font-semibold">
            Business Area
        </p>

        <h2 class="text-4xl md:text-5xl font-bold mt-4 max-w-3xl">
            Agriculture, fresh products,
            and market connection.
        </h2>


        <div class="grid md:grid-cols-3 gap-6 mt-14">

            <div class="bg-white rounded-3xl p-8 shadow-sm">

                <div class="text-4xl">
                    🌾
                </div>

                <h3 class="text-2xl font-bold mt-6">
                    Agriculture
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Berhubungan dengan produk dan aktivitas
                    pertanian dari Bali.
                </p>

            </div>


            <div class="bg-white rounded-3xl p-8 shadow-sm">

                <div class="text-4xl">
                    🥬
                </div>

                <h3 class="text-2xl font-bold mt-6">
                    Fresh Products
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Menghadirkan berbagai produk pertanian
                    segar untuk kebutuhan pasar.
                </p>

            </div>


            <div class="bg-white rounded-3xl p-8 shadow-sm">

                <div class="text-4xl">
                    🤝
                </div>

                <h3 class="text-2xl font-bold mt-6">
                    Market Connection
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">
                    Membangun hubungan antara produk pertanian,
                    mitra, pasar, dan konsumen.
                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= DIFFERENCE ================= --}}
<section class="px-6 py-24 bg-[#EBCB58]">

    <div class="max-w-6xl mx-auto">

        <div class="max-w-4xl">

            <p class="text-sm uppercase tracking-[0.25em]
                      text-[#174A78] font-semibold">
                Our Difference
            </p>

            <h2 class="text-4xl md:text-6xl font-bold mt-4
                       leading-tight">

                From product
                <span class="text-[#174A78]">
                    to connection.
                </span>

            </h2>

            <p class="mt-7 text-lg text-[#173F2A]
                      leading-relaxed max-w-2xl">

                Pertanian bukan hanya tentang menghasilkan produk.
                Dibutuhkan hubungan yang baik antara petani, produk,
                pasar, dan konsumen agar nilai dari produk pertanian
                dapat terus berkembang.

            </p>

        </div>

    </div>

</section>


{{-- ================= CTA ================= --}}
<section class="px-6 py-24 bg-white">

    <div class="max-w-6xl mx-auto">

        <div class="rounded-[2rem] bg-[#174A78]
                    text-white px-8 py-14 md:px-16">

            <p class="text-sm uppercase tracking-[0.25em]
                      text-[#ADC94E] font-semibold">
                BOS Fresh
            </p>

            <h2 class="text-4xl md:text-5xl
                       font-bold mt-4 max-w-3xl">

                Discover the story behind
                fresh products from Bali.

            </h2>

            <div class="mt-8">

                <a href="/products"
                   class="inline-block bg-white text-[#174A78]
                          px-7 py-3.5 rounded-full
                          font-semibold hover:bg-[#F7F3E8]
                          transition">

                    Explore Products

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
                   class="text-[#ADC94E]">
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

@endsection