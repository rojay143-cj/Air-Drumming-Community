@extends('components.layout')
@section('title', 'Services - AIR+ Community')
@section('body')
    {{-- Main --}}
    <main class="bg-servicesBackground bg-cover bg-center bg-no-repeat w-full relative overflow-hidden">
        {{-- Header --}}
        @include('sections.about_page.header')
        <div class="absolute bg-[#1C0949] bg-opacity-65 z-20 w-full h-full top-0 left-0 hidden lg:block xl:hidden"></div>
        {{-- Section 1 --}}
        @include('sections.service_page.section_01')
        {{-- Section 2 --}}
        @include('sections.service_page.section_02')
        {{-- Section 3 --}}
        @include('sections.service_page.section_03')
        {{-- Section 4 --}}
        @include('sections.service_page.section_04')
        {{-- Footer --}}
        @include('sections.about_page.section_05')
    </main>
@endsection
