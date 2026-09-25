@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#F7F3E8] text-[#173F2A]">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 z-50 px-6 py-5">
        <div class="max-w-6xl mx-auto bg-white/95 backdrop-blur rounded-full px-6 py-4 shadow-sm flex items-center justify-between">

            <a href="/" class="font-bold text-lg tracking-wide">
                BALI ORGANIK SUBAK
            </a>

            <div class="hidden md:flex items-center gap-7 text-sm font-medium">
                <a href="/" class="hover:text-[#174A78]">Home</a>
                <a href="/about" class="hover:text-[#174A78]">About</a>
                <a href="/products" class="hover:text-[#174A78]">Products</a>
                <a href="/process" class="hover:text-[#174A78]">Process</a>
                <a href="/sustainability" class="hover:text-[#174A78]">Sustainability</a>
                <a href="/contact" class="hover:text-[#174A78]">Contact</a>
            </div>

            <div class="flex items-center gap-3">

                <a href="/profile"
                   class="bg-[#173F2A] text-white px-5 py-2.5 rounded-full text-sm">
                    My Profile
                </a>

                <form method="POST" action="/logout">
                    @csrf
                    <button
                        type="submit"
                        class="text-sm font-medium hover:text-[#F47F70]">
                        Logout
                    </button>
                </form>

            </div>

        </div>
    </nav>


    <!-- PROFILE -->
    <main class="pt-36 pb-20 px-6">

        <div class="max-w-5xl mx-auto">

            <!-- TITLE -->
            <div class="mb-10">
                <p class="text-sm uppercase tracking-[0.3em] text-[#174A78] mb-3">
                    Account
                </p>

                <h1 class="display-font text-5xl md:text-6xl leading-tight">
                    My Profile
                </h1>

                <p class="mt-4 text-[#173F2A]/70 max-w-xl">
                    Manage your personal information for your Bali Organik Subak account.
                </p>
            </div>


            <!-- SUCCESS MESSAGE -->
            @if(session('success'))
                <div class="mb-6 rounded-2xl bg-[#ADC94E]/30 border border-[#ADC94E] px-5 py-4">
                    {{ session('success') }}
                </div>
            @endif


            <!-- VALIDATION ERROR -->
            @if($errors->any())
                <div class="mb-6 rounded-2xl bg-[#F47F70]/20 border border-[#F47F70] px-5 py-4">
                    <ul class="list-disc pl-5 text-sm">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <!-- PROFILE CARD -->
            <div class="grid md:grid-cols-[280px_1fr] gap-8">

                <!-- LEFT -->
                <div class="bg-[#173F2A] text-white rounded-[2rem] p-8">

                    <div class="w-24 h-24 rounded-full bg-[#ADC94E] text-[#173F2A] flex items-center justify-center text-3xl font-bold mb-6">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>

                    <h2 class="text-2xl font-semibold">
                        {{ $user->name }}
                    </h2>

                    <p class="text-white/60 mt-2 break-all">
                        {{ $user->email }}
                    </p>

                    <div class="mt-8 pt-6 border-t border-white/20">
                        <p class="text-xs uppercase tracking-widest text-white/50">
                            Account
                        </p>

                        <p class="mt-2 text-sm">
                            Registered User
                        </p>
                    </div>

                </div>


                <!-- RIGHT -->
                <div class="bg-white rounded-[2rem] p-8 md:p-10 shadow-sm">

                    <div class="mb-8">
                        <p class="text-sm uppercase tracking-[0.2em] text-[#174A78]">
                            Personal Information
                        </p>

                        <h2 class="display-font text-3xl mt-2">
                            Account Details
                        </h2>
                    </div>


                    <!-- FORM -->
                    <form method="POST" action="/profile">

                        @csrf
                        @method('PUT')

                        <div class="grid md:grid-cols-2 gap-6">

                            <!-- NAME -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Full Name
                                </label>

                                <input
                                    type="text"
                                    name="name"
                                    value="{{ old('name', $user->name) }}"
                                    required
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none focus:border-[#174A78]"
                                >
                            </div>


                            <!-- EMAIL -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Email
                                </label>

                                <input
                                    type="email"
                                    name="email"
                                    value="{{ old('email', $user->email) }}"
                                    required
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none focus:border-[#174A78]"
                                >
                            </div>


                            <!-- PHONE -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Phone Number
                                </label>

                                <input
                                    type="text"
                                    name="phone"
                                    value="{{ old('phone', $user->phone ?? '') }}"
                                    placeholder="08xxxxxxxxxx"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none focus:border-[#174A78]"
                                >
                            </div>


                            <!-- ADDRESS -->
                            <div>
                                <label class="block text-sm font-medium mb-2">
                                    Address
                                </label>

                                <textarea
                                    name="address"
                                    rows="4"
                                    placeholder="Enter your address"
                                    class="w-full rounded-xl border border-gray-200 px-4 py-3 outline-none focus:border-[#174A78]"
                                >{{ old('address', $user->address ?? '') }}</textarea>
                            </div>

                        </div>


                        <!-- BUTTON -->
                        <div class="mt-8 flex justify-end">

                            <button
                                type="submit"
                                class="bg-[#173F2A] text-white px-7 py-3 rounded-full font-medium hover:bg-[#174A78] transition">
                                Save Changes
                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>


    <!-- FOOTER -->
    <footer class="bg-[#173F2A] text-white px-6 py-12">

        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between gap-8">

            <div>
                <h3 class="text-xl font-bold">
                    BALI ORGANIK SUBAK
                </h3>

                <p class="text-white/60 mt-2 max-w-md">
                    Rooted in Bali. Connected to the world.
                </p>
            </div>

            <div class="text-sm text-white/60">
                © {{ date('Y') }} Bali Organik Subak
            </div>

        </div>

    </footer>

</div>

@endsection