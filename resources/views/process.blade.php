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

            <a href="/products" class="hover:text-[#174A78] transition">
                Products
            </a>

            <a href="/process" class="text-[#174A78]">
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
                   class="text-sm font-medium hover:text-[#174A78] transition">
                    Login
                </a>

                <a href="/register"
                   class="bg-[#173F2A] text-white px-5 py-2.5 rounded-full
                          text-sm hover:bg-[#174A78] transition">
                    Register
                </a>

            @endauth

        </div>

    </div>

</nav>


{{-- ================= HERO ================= --}}
<section class="min-h-[70vh] flex items-center px-6 pt-32">

    <div class="max-w-6xl mx-auto w-full">

        <div class="max-w-4xl">

            <p class="text-sm uppercase tracking-[0.3em]
                      text-[#174A78] font-semibold mb-5">
                What We Do
            </p>

            <h1 class="text-5xl md:text-7xl font-bold
                       leading-[0.95] tracking-tight">

                From farm
                <span class="text-[#174A78]">
                    to market.
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-600
                      leading-relaxed max-w-3xl">

                BOS Fresh berperan dalam menghubungkan produk pertanian
                dengan kebutuhan pasar melalui proses yang terintegrasi
                dari produk hingga konsumen.

            </p>

        </div>

    </div>

</section>


{{-- ================= INTRO ================= --}}
<section class="px-6 py-24 bg-white">

    <div class="max-w-6xl mx-auto">

        <div class="grid md:grid-cols-2 gap-16">

            <div>

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#174A78] font-semibold">
                    Our Role
                </p>

                <h2 class="text-4xl md:text-5xl font-bold mt-4
                           leading-tight">

                    More than moving
                    products.

                </h2>

            </div>

            <div>

                <p class="text-lg text-gray-600 leading-relaxed">

                    Produk pertanian membutuhkan lebih dari sekadar
                    proses produksi. Produk juga perlu ditangani,
                    disiapkan, dan diarahkan menuju pasar yang sesuai.

                </p>

                <p class="mt-6 text-lg text-gray-600 leading-relaxed">

                    Karena itu, aktivitas hilirisasi menjadi bagian
                    penting dalam menghubungkan hasil pertanian dengan
                    kebutuhan konsumen.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= PROCESS ================= --}}
<section class="px-6 py-24">

    <div class="max-w-6xl mx-auto">

        <p class="text-sm uppercase tracking-[0.25em]
                  text-[#174A78] font-semibold">
            Our Process
        </p>

        <h2 class="text-4xl md:text-5xl font-bold mt-4 max-w-3xl">
            How agricultural products
            move forward.
        </h2>


        <div class="mt-16 space-y-6">

            {{-- STEP 01 --}}
            <div class="bg-white rounded-[2rem] p-8 md:p-10
                        flex flex-col md:flex-row gap-8
                        items-start">

                <div class="text-[#174A78] text-5xl font-bold">
                    01
                </div>

                <div class="flex-1">

                    <div class="text-4xl">
                        🌱
                    </div>

                    <h3 class="text-3xl font-bold mt-5">
                        Agricultural Sourcing
                    </h3>

                    <p class="mt-4 text-gray-600 text-lg
                              leading-relaxed max-w-3xl">

                        Menghubungkan produk pertanian dengan sumber
                        dan jaringan pertanian yang menjadi bagian dari
                        ekosistem BOS.

                    </p>

                </div>

            </div>


            {{-- STEP 02 --}}
            <div class="bg-[#ADC94E] rounded-[2rem] p-8 md:p-10
                        flex flex-col md:flex-row gap-8
                        items-start">

                <div class="text-[#174A78] text-5xl font-bold">
                    02
                </div>

                <div class="flex-1">

                    <div class="text-4xl">
                        🥬
                    </div>

                    <h3 class="text-3xl font-bold mt-5 text-[#173F2A]">
                        Fresh Products
                    </h3>

                    <p class="mt-4 text-[#173F2A]/70 text-lg
                              leading-relaxed max-w-3xl">

                        Menyediakan dan memperkenalkan produk pertanian
                        segar yang dapat memenuhi kebutuhan pasar.

                    </p>

                </div>

            </div>


            {{-- STEP 03 --}}
            <div class="bg-[#174A78] text-white rounded-[2rem]
                        p-8 md:p-10 flex flex-col md:flex-row
                        gap-8 items-start">

                <div class="text-[#ADC94E] text-5xl font-bold">
                    03
                </div>

                <div class="flex-1">

                    <div class="text-4xl">
                        📦
                    </div>

                    <h3 class="text-3xl font-bold mt-5">
                        Post-Harvest Handling
                    </h3>

                    <p class="mt-4 text-white/70 text-lg
                              leading-relaxed max-w-3xl">

                        Penanganan setelah panen menjadi bagian penting
                        untuk menjaga kondisi dan kualitas produk sebelum
                        masuk ke pasar.

                    </p>

                </div>

            </div>


            {{-- STEP 04 --}}
            <div class="bg-white rounded-[2rem] p-8 md:p-10
                        flex flex-col md:flex-row gap-8
                        items-start">

                <div class="text-[#174A78] text-5xl font-bold">
                    04
                </div>

                <div class="flex-1">

                    <div class="text-4xl">
                        🏪
                    </div>

                    <h3 class="text-3xl font-bold mt-5">
                        Market Connection
                    </h3>

                    <p class="mt-4 text-gray-600 text-lg
                              leading-relaxed max-w-3xl">

                        Menghubungkan produk dengan berbagai kebutuhan
                        pasar dan konsumen melalui jaringan pemasaran
                        yang sesuai.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


{{-- ================= BUSINESS CONNECTION ================= --}}
<section class="px-6 py-24 bg-[#173F2A] text-white">

    <div class="max-w-6xl mx-auto">

        <div class="max-w-3xl">

            <p class="text-sm uppercase tracking-[0.25em]
                      text-[#ADC94E] font-semibold">
                Business Connection
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mt-4">
                Connecting people
                through agriculture.
            </h2>

            <p class="mt-6 text-white/70 text-lg leading-relaxed">

                BOS Fresh berada dalam sebuah ekosistem yang
                mempertemukan berbagai pihak dalam perjalanan produk
                pertanian.

            </p>

        </div>


        <div class="grid md:grid-cols-4 gap-4 mt-14">

            <div class="bg-white/10 rounded-3xl p-7">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    FARMERS
                </span>

                <div class="text-4xl mt-6">
                    🌾
                </div>

                <h3 class="text-xl font-bold mt-5">
                    Petani
                </h3>

            </div>


            <div class="bg-white/10 rounded-3xl p-7">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    PRODUCTS
                </span>

                <div class="text-4xl mt-6">
                    🍊
                </div>

                <h3 class="text-xl font-bold mt-5">
                    Produk Pertanian
                </h3>

            </div>


            <div class="bg-white/10 rounded-3xl p-7">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    MARKET
                </span>

                <div class="text-4xl mt-6">
                    🏪
                </div>

                <h3 class="text-xl font-bold mt-5">
                    Pasar
                </h3>

            </div>


            <div class="bg-white/10 rounded-3xl p-7">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    CONSUMERS
                </span>

                <div class="text-4xl mt-6">
                    👨‍👩‍👧‍👦
                </div>

                <h3 class="text-xl font-bold mt-5">
                    Konsumen
                </h3>

            </div>

        </div>

    </div>

</section>


{{-- ================= WHY IT MATTERS ================= --}}
<section class="px-6 py-24 bg-[#EBCB58]">

    <div class="max-w-6xl mx-auto">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <div>

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#174A78] font-semibold">
                    Why It Matters
                </p>

                <h2 class="text-4xl md:text-5xl font-bold mt-4
                           leading-tight">

                    A stronger connection
                    creates greater value.

                </h2>

            </div>

            <div>

                <p class="text-lg text-[#173F2A]/80 leading-relaxed">

                    Ketika produk pertanian memiliki akses menuju pasar
                    yang tepat, nilai produk dapat berkembang dan
                    hubungan antara sektor pertanian dengan masyarakat
                    menjadi semakin kuat.

                </p>

                <p class="mt-6 text-lg text-[#173F2A]/80 leading-relaxed">

                    Inilah pentingnya membangun hubungan antara
                    pertanian, produk, pasar, dan konsumen.

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

            <p class="text-sm uppercase tracking-[0.25em]
                      text-[#ADC94E] font-semibold">
                BOS Fresh
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mt-4
                       max-w-3xl">

                Fresh products are part
                of a bigger journey.

            </h2>

            <div class="mt-8">

                <a href="/sustainability"
                   class="inline-block bg-white text-[#174A78]
                          px-7 py-3.5 rounded-full
                          font-semibold hover:bg-[#F7F3E8]
                          transition">

                    Our Sustainability

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