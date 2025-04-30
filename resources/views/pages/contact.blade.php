@extends('components.layout')
@section('title', 'Contact Us - Air+ Community')
@section('body')
    @include('sections.about_page.header')
    <main class="h-full w-full pt-40 md:pt-0 md:py-0 lg:py-0 xl:py-20 mx-auto bg-no-repeat relative bg-[#07061C] bg-opacity-25">
        @include('sections.contact.section_1')
    </main>
    @include('sections.about_page.section_05')
    <div class="absolute top-0">
        @include('components.success_error')
    </div>
@endsection
