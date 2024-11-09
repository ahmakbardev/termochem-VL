@extends('layouts.layout')

@section('content')
    <!-- Header -->
    <header id="header" class="header h-full text-center lg:text-left">
        <div class="container h-full px-4 items-center justify-center flex flex-col">
            <div class="flex flex-col text-center">
                <h1 class="text-5xl">Virtual Laboratorium</h1>
                <h1 class="text-7xl uppercase">Termokimia</h1>
            </div>
            <div class="relative w-2/3 h-fit">
                <img src="{{ asset('assets/images/component/1.png') }}" class="" alt="">
                <a href="">
                    <img src="{{ asset('assets/images/nav/materi.png') }}"
                        class="absolute top-0 w-1/3 -left-40 hover:-rotate-12 hover:scale-105 transition-all ease-in-out"
                        alt="">
                </a>
                <a href="{{ route('kompetensi') }}">
                    <img src="{{ asset('assets/images/nav/kompetensi.png') }}"
                        class="absolute top-52 w-1/3 -left-48 hover:-rotate-12 hover:scale-105 transition-all ease-in-out"
                        alt="">
                </a>
                <a href="{{ route('simulasi') }}">
                    <img src="{{ asset('assets/images/nav/simulasi.png') }}"
                        class="absolute top-0 w-1/3 -right-40 hover:rotate-12 hover:scale-105 transition-all ease-in-out"
                        alt="">
                </a>
                <a href="">
                    <img src="{{ asset('assets/images/nav/uji.png') }}"
                        class="absolute top-52 w-1/3 -right-48 hover:rotate-12 hover:scale-105 transition-all ease-in-out"
                        alt="">
                </a>
            </div>
        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- end of header -->

    {{-- <!-- Copyright -->
    <div class="copyright">
        <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-3">
            <ul class="mb-4 list-unstyled p-small">
                <li class="mb-2"><a href="article.html">Article Details</a></li>
                <li class="mb-2"><a href="terms.html">Terms & Conditions</a></li>
                <li class="mb-2"><a href="privacy.html">Privacy Policy</a></li>
            </ul>
            <p class="pb-2 p-small statement">Copyright © <a href="#your-link" class="no-underline">Your name</a></p>

            <p class="pb-2 p-small statement">Distributed by :<a href="https://themewagon.com/"
                    class="no-underline">Themewagon</a></p>
        </div>

        <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright --> --}}
@endsection
