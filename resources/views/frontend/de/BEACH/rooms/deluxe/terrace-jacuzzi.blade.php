@extends('frontend.en.layouts.master')

@section('title', 'Rooms - Miramare Hotels - Official Website')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('accommodation') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('tr-accommodation') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-accommodation') }}">RU</a></li>
        <li><a class="dropdown-item first-item" href="{{ route('de-accommodation') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')


{{-- CONTENT HERE --}}


@endsection

@section('css-imports')

@endsection

@section('javascript-imports')

@endsection