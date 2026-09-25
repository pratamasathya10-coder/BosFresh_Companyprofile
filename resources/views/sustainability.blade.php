@extends('layouts.app')

@section('content')

{{-- ================= NAVBAR ================= --}}
<nav class="fixed top-0 left-0 right-0 z-50 px-6 py-5">

    <div class="max-w-6xl mx-auto bg-white/95 backdrop-blur
                rounded-full px-6 py-4 shadow-sm
                flex items-center justify-between">

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

            <a href="/process" class="hover:text-[#174A78] transition">
                What We Do
            </a>

            <a href="/sustainability" class="text-[#174A78]">
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
                   class="bg-[#173F2A] text-white px-5 py-2.5
                          rounded-full text-sm
                          hover:bg-[#174A78] transition">
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
<section class="min-h-[70vh] flex items-center px-6 pt-32">

    <div class="max-w-6xl mx-auto w-full">

        <div class="max-w-4xl">

            <p class="text-sm uppercase tracking-[0.3em]
                      text-[#174A78] font-semibold mb-5">
                Sustainability
            </p>

            <h1 class="text-5xl md:text-7xl font-bold
                       leading-[0.95] tracking-tight">

                Fresh today.
                <span class="text-[#174A78]">
                    Sustainable tomorrow.
                </span>

            </h1>

            <p class="mt-8 text-lg md:text-xl text-gray-600
                      leading-relaxed max-w-3xl">

                Keberlanjutan menjadi bagian penting dalam membangun
                hubungan yang seimbang antara pertanian, lingkungan,
                pelaku usaha, dan masyarakat.

            </p>

        </div>

    </div>

</section>


{{-- ================= INTRO ================= --}}
<section class="px-6 py-24 bg-white">

    <div class="max-w-6xl mx-auto">

        <div class="grid md:grid-cols-2 gap-16 items-start">

            <div>

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#174A78] font-semibold">
                    Our Perspective
                </p>

                <h2 class="text-4xl md:text-5xl font-bold mt-4
                           leading-tight">

                    Sustainability starts
                    from the way we connect.

                </h2>

            </div>

            <div>

                <p class="text-lg text-gray-600 leading-relaxed">

                    Pertanian memiliki hubungan yang erat dengan
                    lingkungan dan kehidupan masyarakat. Karena itu,
                    keberlanjutan tidak hanya berbicara mengenai hasil
                    akhir, tetapi juga bagaimana sebuah ekosistem
                    pertanian dapat terus berkembang.

                </p>

                <p class="mt-6 text-lg text-gray-600 leading-relaxed">

                    BOS Fresh menjadi bagian dari hubungan tersebut
                    melalui aktivitas yang menghubungkan produk
                    pertanian dengan pasar dan konsumen.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= THREE PILLARS ================= --}}
<section class="px-6 py-24 bg-[#173F2A] text-white">

    <div class="max-w-6xl mx-auto">

        <p class="text-sm uppercase tracking-[0.25em]
                  text-[#ADC94E] font-semibold">
            Our Focus
        </p>

        <h2 class="text-4xl md:text-5xl font-bold mt-4 max-w-3xl">
            Three things that matter.
        </h2>


        <div class="grid md:grid-cols-3 gap-6 mt-14">

            {{-- PEOPLE --}}
            <div class="bg-white/10 rounded-[2rem] p-8">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    01
                </span>

                <div class="text-5xl mt-8">
                    🤝
                </div>

                <h3 class="text-3xl font-bold mt-6">
                    People
                </h3>

                <p class="mt-4 text-white/70 leading-relaxed">

                    Membangun hubungan yang baik antara petani,
                    mitra, pasar, dan masyarakat dalam ekosistem
                    pertanian.

                </p>

            </div>


            {{-- PLANET --}}
            <div class="bg-white/10 rounded-[2rem] p-8">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    02
                </span>

                <div class="text-5xl mt-8">
                    🌏
                </div>

                <h3 class="text-3xl font-bold mt-6">
                    Planet
                </h3>

                <p class="mt-4 text-white/70 leading-relaxed">

                    Menempatkan lingkungan sebagai bagian penting
                    dalam perjalanan dan perkembangan pertanian.

                </p>

            </div>


            {{-- PROSPERITY --}}
            <div class="bg-white/10 rounded-[2rem] p-8">

                <span class="text-[#ADC94E] text-sm font-semibold">
                    03
                </span>

                <div class="text-5xl mt-8">
                    🌱
                </div>

                <h3 class="text-3xl font-bold mt-6">
                    Prosperity
                </h3>

                <p class="mt-4 text-white/70 leading-relaxed">

                    Mendorong terciptanya nilai ekonomi yang dapat
                    mendukung keberlanjutan ekosistem pertanian.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= RESPONSIBLE AGRICULTURE ================= --}}
<section class="px-6 py-24">

    <div class="max-w-6xl mx-auto">

        <div class="grid md:grid-cols-2 gap-16 items-center">

            <div>

                <div class="rounded-[2rem] bg-[#ADC94E]
                            min-h-[420px] flex items-center
                            justify-center">

                    <div class="text-center text-[#173F2A]">

                        <div class="text-8xl">
                            🌾
                        </div>

                        <p class="mt-6 text-sm uppercase
                                  tracking-[0.25em] font-semibold">
                            Agriculture
                        </p>

                    </div>

                </div>

            </div>


            <div>

                <p class="text-sm uppercase tracking-[0.25em]
                          text-[#174A78] font-semibold">
                    Responsible Agriculture
                </p>

                <h2 class="text-4xl md:text-5xl font-bold mt-4
                           leading-tight">

                    Taking care of
                    where food comes from.

                </h2>

                <p class="mt-6 text-lg text-gray-600
                          leading-relaxed">

                    Produk pertanian berasal dari lingkungan tempat
                    produk tersebut tumbuh. Menjaga hubungan antara
                    pertanian dan lingkungan menjadi bagian penting
                    dari perjalanan menuju sistem pangan yang
                    berkelanjutan.

                </p>

                <p class="mt-6 text-lg text-gray-600
                          leading-relaxed">

                    Karena itu, kualitas produk dan keberlanjutan
                    perlu berjalan bersama.

                </p>

            </div>

        </div>

    </div>

</section>


{{-- ================= VALUES ================= --}}
<section class="px-6 py-24 bg-[#F7F3E8]">

    <div class="max-w-6xl mx-auto">

        <div class="max-w-3xl">

            <p class="text-sm uppercase tracking-[0.25em]
                      text-[#174A78] font-semibold">
                Our Values
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mt-4">
                A better agricultural
                ecosystem takes everyone.
            </h2>

        </div>


        <div class="grid md:grid-cols-2 gap-6 mt-14">

            <div class="bg-white rounded-[2rem] p-8">

                <span class="text-4xl">
                    🌱
                </span>

                <h3 class="text-2xl font-bold mt-6">
                    Respect Nature
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">

                    Menghargai lingkungan sebagai bagian yang tidak
                    terpisahkan dari aktivitas pertanian.

                </p>

            </div>


            <div class="bg-white rounded-[2rem] p-8">

                <span class="text-4xl">
                    🥬
                </span>

                <h3 class="text-2xl font-bold mt-6">
                    Maintain Quality
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">

                    Menempatkan kualitas sebagai bagian penting
                    dalam perjalanan produk menuju pasar.

                </p>

            </div>


            <div class="bg-white rounded-[2rem] p-8">

                <span class="text-4xl">
                    🤝
                </span>

                <h3 class="text-2xl font-bold mt-6">
                    Build Connection
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">

                    Membangun hubungan antara berbagai pihak yang
                    terlibat dalam ekosistem pertanian.

                </p>

            </div>


            <div class="bg-white rounded-[2rem] p-8">

                <span class="text-4xl">
                    🌍
                </span>

                <h3 class="text-2xl font-bold mt-6">
                    Think Long Term
                </h3>

                <p class="mt-4 text-gray-600 leading-relaxed">

                    Melihat pertanian bukan hanya untuk kebutuhan
                    hari ini, tetapi juga untuk masa depan.

                </p>

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
                BOS Fresh
            </p>

            <h2 class="text-4xl md:text-5xl font-bold mt-4
                       max-w-3xl">

                Better agriculture starts
                with better connections.

            </h2>

            <p class="mt-5 text-[#173F2A]/70
                      max-w-xl leading-relaxed">

                Kenali lebih jauh peran BOS Fresh dalam menghubungkan
                produk pertanian dengan pasar dan konsumen.

            </p>

            <div class="mt-8">

                <a href="/about"
                   class="inline-block bg-[#174A78] text-white
                          px-7 py-3.5 rounded-full
                          font-semibold hover:bg-[#173F2A]
                          transition">

                    About BOS Fresh

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