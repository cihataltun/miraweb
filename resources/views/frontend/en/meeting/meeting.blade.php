@extends('frontend.en.layouts.master')

@section('title', 'Meeting & Congress - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('meeting-congress') }}"
       aria-expanded="false">EN</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('tr-meeting-congress') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-meeting-congress') }}">RU</a></li>
        <li><a class="dropdown-item" href="{{ route('de-meeting-congress') }}">DE</a></li>
    </ul>
</li>

@endsection

@section('content')

<div class="meetingHero">
    <div class="heroImage">
        <figure>
            <img src="{{ asset('assets/frontend/images/meeting/Meeting.webp') }}" alt="MeetingCongress"/>
        </figure>
    </div>
    <article>
        <h1>Meeting & Congress</h1>
    </article>
</div>
<!-- Hero Part End -->
<!-- Options -->
<div class="options">
    <a href="#thermessos">
        Thermessos
    </a>
    <a href="#aspendos">
        Aspendos
    </a>
    <a href="#perge">
        Perge
    </a>
    <a href="#olympos">
        Olympos
    </a>
</div>



<div class="meetingSection activities" id="thermessos">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-7">
            <figure>
                <img src="{{ asset('assets/frontend/images/meeting/meeting-1.webp') }}" alt="thermessos"/>
            </figure>
        </div>
        <div class="col-12 col-md-12 col-lg-5">
            <article class="leftText">
                <h2>Thermessos</h2>
                <p>You can use the Thermessos saloon with our three huge Thermessos meeting saloons for your business meeting.</p>
            </article>
        </div>
    </div>
</div>

<div class="meetingSection" id="aspendos">
    <div class="row reverse">
        <div class="col-12 col-md-12 col-lg-5">
            <article class="rightText">
                <h2>Aspendos</h2>
                <p>Port Nature Aspendos meeting room is an optimum solution For your core team meeting.</p>
            </article>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
            <figure>
                <img src="{{ asset('assets/frontend/images/meeting/meeting-2.webp') }}" alt="aspendos"/>
            </figure>
        </div>
    </div>
</div>


<div class="meetingSection activities" id="perge">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-7">
            <figure>
                <img src="{{ asset('assets/frontend/images/meeting/meeting-3.webp') }}" alt="perge"/>
            </figure>
        </div>
        <div class="col-12 col-md-12 col-lg-5">
            <article class="leftText">
                <h2>Perge</h2>
                <p>Port Nature Perge meeting room waiting for business people with 380 square meters area, projector, microphone, and speakers.</p>
            </article>
        </div>
    </div>
</div>


<div class="meetingSection" id="olympos">
    <div class="row reverse">
        <div class="col-12 col-md-12 col-lg-5">
            <article class="rightText">
                <h2>Olympos</h2>
                <p>Olympos meeting room has a lot of equipment for your meetings such as speakers, microphones, and projectors.</p>
            </article>
        </div>
        <div class="col-12 col-md-12 col-lg-7">
            <figure>
                <img src="{{ asset('assets/frontend/images/meeting/meeting-4.webp') }}" alt="olympos"/>
            </figure>
        </div>
    </div>
</div>
<!-- Contact -->
@include('frontend.en.layouts.contact')
<!-- Contact End -->

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/meeting.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/meeting.css') }}"/>
@endsection