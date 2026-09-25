@extends('layouts.app')

@section('content')

<!-- NAVBAR -->
<nav class="fixed top-5 left-1/2 -translate-x-1/2 z-50
            w-[92%] max-w-6xl
            bg-white/95 backdrop-blur
            rounded-full shadow-lg
            px-6 py-3">

    <div class="flex items-center justify-between">

        <!-- LOGO -->
        <a href="/" class="flex items-center">
            <img
                src="{{ asset('images/logo-bos-fresh.jpeg') }}"
                alt="BOS Fresh"
                class="h-14 w-auto"
            >
        </a>

        <!-- MENU -->
        <div class="hidden md:flex items-center gap-7 text-sm font-semibold">

            <a href="/"
               class="text-[#173F2A] hover:text-[#174A78] transition">
                Home
            </a>

            <a href="/about"
               class="text-[#173F2A] hover:text-[#174A78] transition">
                About
            </a>

            <a href="/products"
               class="text-[#173F2A] hover:text-[#174A78] transition">
                Products
            </a>

            <a href="/process"
               class="text-[#173F2A] hover:text-[#174A78] transition">
                What We Do
            </a>

            <a href="/sustainability"
               class="text-[#173F2A] hover:text-[#174A78] transition">
                Sustainability
            </a>

            <a href="/contact"
               class="bg-[#174A78] text-white px-5 py-2 rounded-full">
                Contact
            </a>

        </div>

    </div>
</nav>


<!-- HERO -->
<section class="min-h-[70vh] flex items-center px-6 pt-32">

    <div class="max-w-6xl mx-auto w-full">

        <div class="max-w-4xl">

            <p class="uppercase tracking-[0.3em]
                      text-sm font-semibold
                      text-[#174A78] mb-6">
                Connect With BOS Fresh
            </p>

            <h1 class="display-font
                       text-5xl md:text-7xl
                       leading-tight
                       text-[#173F2A]">
                Let's stay
                <span class="text-[#174A78]">
                    connected.
                </span>
            </h1>

            <p class="mt-8
                      text-lg md:text-xl
                      text-gray-600
                      leading-relaxed
                      max-w-2xl">

                Whether you want to learn more about BOS Fresh,
                our products, agricultural activities, or potential
                collaboration, we are open to building meaningful
                connections.

            </p>

        </div>

    </div>

</section>


<!-- CONTACT CONTENT -->
<section class="px-6 py-20 bg-white">

    <div class="max-w-6xl mx-auto">

        <div class="grid md:grid-cols-2 gap-16">

            <!-- LEFT -->
            <div>

                <p class="uppercase tracking-[0.25em]
                          text-sm font-semibold
                          text-[#174A78] mb-4">
                    Contact Information
                </p>

                <h2 class="display-font
                           text-4xl md:text-5xl
                           text-[#173F2A]">
                    Talk with us.
                </h2>

                <p class="mt-6
                          text-gray-600
                          leading-relaxed
                          max-w-lg">

                    Get in touch with BOS Fresh to learn more
                    about our activities, products, partnerships,
                    and connection with the agricultural community.

                </p>


                <!-- CONTACT ITEMS -->
                <div class="mt-10 space-y-7">

                    <!-- ADDRESS -->
                    <div class="flex gap-5">

                        <div class="w-12 h-12
                                    rounded-full
                                    bg-[#F7F3E8]
                                    flex items-center
                                    justify-center
                                    text-[#174A78]
                                    font-bold">
                            A
                        </div>

                        <div>
                            <p class="font-semibold text-[#173F2A]">
                                Address
                            </p>

                            <p class="text-gray-500 mt-1">
                                [Alamat resmi BOS Fresh]
                            </p>
                        </div>

                    </div>


                    <!-- PHONE -->
                    <div class="flex gap-5">

                        <div class="w-12 h-12
                                    rounded-full
                                    bg-[#F7F3E8]
                                    flex items-center
                                    justify-center
                                    text-[#174A78]
                                    font-bold">
                            P
                        </div>

                        <div>
                            <p class="font-semibold text-[#173F2A]">
                                Phone
                            </p>

                            <p class="text-gray-500 mt-1">
                                [Nomor WhatsApp / Telepon]
                            </p>
                        </div>

                    </div>


                    <!-- EMAIL -->
                    <div class="flex gap-5">

                        <div class="w-12 h-12
                                    rounded-full
                                    bg-[#F7F3E8]
                                    flex items-center
                                    justify-center
                                    text-[#174A78]
                                    font-bold">
                            E
                        </div>

                        <div>
                            <p class="font-semibold text-[#173F2A]">
                                Email
                            </p>

                            <p class="text-gray-500 mt-1">
                                [Email resmi BOS Fresh]
                            </p>
                        </div>

                    </div>

                </div>

            </div>


            <!-- RIGHT -->
            <div>

                <div class="bg-[#F7F3E8]
                            rounded-[2rem]
                            p-8 md:p-10">

                    <p class="uppercase tracking-[0.2em]
                              text-xs font-bold
                              text-[#174A78] mb-5">
                        Let's Connect
                    </p>

                    <h3 class="display-font
                               text-3xl md:text-4xl
                               text-[#173F2A]">
                        Agriculture connects people.
                    </h3>

                    <p class="mt-5
                              text-gray-600
                              leading-relaxed">

                        BOS Fresh is part of a wider agricultural
                        connection between farmers, fresh products,
                        markets, and consumers.

                    </p>


                    <div class="mt-8">

                        <a href="/about"
                           class="inline-flex
                                  items-center
                                  bg-[#174A78]
                                  text-white
                                  px-7 py-3
                                  rounded-full
                                  font-semibold
                                  hover:bg-[#173F2A]
                                  transition">

                            Learn About BOS Fresh

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- MAP / LOCATION PLACEHOLDER -->
<section class="px-6 py-20">

    <div class="max-w-6xl mx-auto">

        <div class="rounded-[2rem]
                    bg-[#173F2A]
                    min-h-[320px]
                    flex items-center
                    justify-center
                    text-center
                    px-6">

            <div>

                <p class="uppercase tracking-[0.25em]
                          text-sm
                          text-[#ADC94E]
                          font-semibold">
                    Our Location
                </p>

                <h2 class="display-font
                           text-4xl md:text-5xl
                           text-white
                           mt-4">
                    Bali, Indonesia.
                </h2>

                <p class="text-white/70
                          mt-5
                          max-w-xl
                          mx-auto">

                    Map or location information
                    can be added here once the official
                    BOS Fresh location is confirmed.

                </p>

            </div>

        </div>

    </div>

</section>


<!-- CTA -->
<section class="px-6 py-24 bg-[#174A78]">

    <div class="max-w-4xl mx-auto text-center">

        <p class="uppercase tracking-[0.3em]
                  text-sm
                  text-[#ADC94E]
                  font-semibold">
            BOS Fresh
        </p>

        <h2 class="display-font
                   text-4xl md:text-6xl
                   text-white
                   mt-5">
            From Bali,
            connected to the world.
        </h2>

        <p class="text-white/80
                  mt-6
                  text-lg
                  leading-relaxed">
            Fresh products, agricultural connections,
            and a commitment to a better future.
        </p>

    </div>

</section>


<!-- FOOTER -->
<footer class="bg-[#173F2A] text-white px-6 py-12">

    <div class="max-w-6xl mx-auto">

        <div class="flex flex-col md:flex-row
                    justify-between
                    gap-10">

            <!-- LOGO -->
            <div>

                <img
                    src="{{ asset('images/logo-bos-fresh.jpeg') }}"
                    alt="BOS Fresh"
                    class="h-20 w-auto mb-5"
                >

                <p class="text-white/60 max-w-sm">
                    Fresh products and agricultural connections
                    from Bali.
                </p>

            </div>


            <!-- LINKS -->
            <div class="grid grid-cols-2 gap-x-16 gap-y-4 text-sm">

                <a href="/" class="text-white/70 hover:text-white">
                    Home
                </a>

                <a href="/about" class="text-white/70 hover:text-white">
                    About
                </a>

                <a href="/products" class="text-white/70 hover:text-white">
                    Products
                </a>

                <a href="/process" class="text-white/70 hover:text-white">
                    What We Do
                </a>

                <a href="/sustainability"
                   class="text-white/70 hover:text-white">
                    Sustainability
                </a>

                <a href="/contact"
                   class="text-white/70 hover:text-white">
                    Contact
                </a>

            </div>

        </div>


        <div class="border-t border-white/10
                    mt-10 pt-6
                    text-sm text-white/50">

            © {{ date('Y') }} BOS Fresh. All rights reserved.

        </div>

    </div>

</footer>

@endsection