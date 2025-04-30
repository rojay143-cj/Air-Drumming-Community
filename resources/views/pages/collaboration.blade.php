@extends('components.layout')
@section('title', 'Collaboration - AIR+ Community')
@section('body')
    @include('sections.about_page.header')
    <main class="h-full w-full mx-auto relative">
        {{-- Section 1 --}}
        @include('sections.collaboration.section_01')
    </main>
    @include('sections.about_page.section_05')
@endsection
