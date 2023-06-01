@extends('frontend.de.layouts.master')

@section('title', 'Miramare Hotels - Official Website')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-main-homepage') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item" href="{{ route('en-main-homepage') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-main-homepage') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-main-homepage') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')



@endsection

@section('javascript-imports')

@endsection

@section('css-imports')

@endsection