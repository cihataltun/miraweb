@extends('frontend.en.layouts.master')

@section('title', 'Entertainment - Miramare Hotels - Official Website')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('entertainment') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-entertainment') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-entertainment') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-entertainment') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')


{{-- CONTENT HERE --}}


@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/entertainment.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/entertainment.css') }}"/>
@endsection