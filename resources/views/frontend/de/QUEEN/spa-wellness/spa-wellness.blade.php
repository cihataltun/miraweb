@extends('frontend.en.layouts.master')

@section('title', 'Spa & Wellness - Miramare Hotels - Official Website')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('spa') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-spa') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-spa') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-spa') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')


{{-- CONTENT HERE --}}


@endsection

@section('javascript-imports')

@endsection

@section('css-imports')

@endsection