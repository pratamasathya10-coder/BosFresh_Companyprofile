@extends('layouts.app')

@section('content')

<div class="min-h-screen bg-[#173F2A]
            flex items-center justify-center px-5 py-12">

    <div class="w-full max-w-md">

        <div class="text-center mb-8">

            <a href="/" class="inline-flex items-center gap-3">

                <div class="w-12 h-12 rounded-full bg-[#EBCB58]
                            flex items-center justify-center
                            text-[#173F2A] font-bold">
                    BOS
                </div>

                <span class="font-bold text-white">
                    Bali Organik Subak
                </span>

            </a>

        </div>


        <div class="bg-white rounded-[2rem] p-8 sm:p-10">

            <p class="text-[#174A78] text-sm uppercase
                      tracking-widest font-bold">
                Welcome back
            </p>

            <h1 class="display-font text-4xl
                       text-[#173F2A] mt-3">
                Login
            </h1>

            <p class="text-gray-500 mt-3">
                [Login description placeholder]
            </p>


            <form method="POST" action="/login"
                  class="mt-8 space-y-5">

                @csrf

                <div>

                    <label class="text-sm font-semibold">
                        Email
                    </label>

                    <input type="email"
                           name="email"
                           required
                           class="w-full mt-2 px-5 py-4
                                  bg-[#F7F3E8] rounded-2xl
                                  outline-none">

                </div>


                <div>

                    <label class="text-sm font-semibold">
                        Password
                    </label>

                    <input type="password"
                           name="password"
                           required
                           class="w-full mt-2 px-5 py-4
                                  bg-[#F7F3E8] rounded-2xl
                                  outline-none">

                </div>


                <div class="flex items-center gap-2">

                    <input type="checkbox"
                           name="remember">

                    <span class="text-sm text-gray-500">
                        Remember me
                    </span>

                </div>


                <button type="submit"
                        class="w-full bg-[#173F2A]
                               text-white py-4 rounded-full
                               font-semibold hover:bg-[#174A78]">
                    Login
                </button>

            </form>


            <p class="text-center text-sm text-gray-500 mt-7">
                Don't have an account?

                <a href="/register"
                   class="font-semibold text-[#174A78]">
                    Register
                </a>
            </p>

        </div>


        <a href="/"
           class="block text-center text-sm text-white/50 mt-6">
            ← Back to website
        </a>

    </div>

</div>

@endsection