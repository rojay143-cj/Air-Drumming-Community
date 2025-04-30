@extends('components.layout')
@section('title', 'About us - Air Drumming community')
@section('body')
    <div class="mx-auto relative w-full h-full">
        @include('sections.about_page.header')

        <main class="h-full mx-auto w-full flex flex-col">
            {{-- Section 1 --}}
            @include('sections.about_page.section_01')

            {{-- Section 2 --}}
            {{-- @include('sections.about_page.section_02') --}}

            {{-- Section 3 --}}
            <div class="hidden lg:block">
                @include('sections.about_page.section_03')
            </div>
            <div class="block lg:hidden">
                @include('sections.about_page.section_03Mobile')
            </div>

            {{-- Section 4 --}}
            @include('sections.about_page.section_04')
        </main>
        @include('sections.about_page.section_05')
    </div>
@endsection
