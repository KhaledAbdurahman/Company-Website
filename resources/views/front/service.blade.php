@extends('front.master')

@section('title', 'service')

@section('service-active', 'active')

@section('hero')
    <x-hero-section title="Services" subtitle="Services"></x-hero-section>
@endsection

@section('content')
    <!-- Service Start -->
    <x-front-services-component></x-front-services-component>
    <!-- Service End -->

    <x-front-testmonials-component></x-front-testmonials-component>
@endsection
