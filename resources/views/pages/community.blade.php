@extends('components.layout')
@section('title', 'Community - Air+ Community')
@section('body')
    @include('sections.about_page.header')
    <main class="h-full w-full mx-auto bg-no-repeat p-10 relative flex flex-col gap-5 xl:gap-14 bg-[url('{{ asset('Assets/01_Home_Page/Home_Section_1/Galaxy_Background.jpg') }}')] bg-no-repeat bg-top bg-cover">
        @include('sections.community.section_01')
        @include('sections.community.section_02')
    </main>
    @include('sections.about_page.section_05')
@endsection
