@extends('layouts.app')

@section('content')
    {{-- Home --}}
    <div id="home">
        @include('pages.home')
    </div>

    {{-- About --}}
    <div id="about">
        @include('pages.about')
    </div>

    {{-- Services --}}
    <div id="service">
        @include('pages.services')
    </div>

    {{-- Booking --}}
    <div id="booking">
        @include('pages.booking')
    </div>

    {{-- Contact --}}
    <div id="contact">
        @include('pages.contact')
    </div>
@endsection
