@extends('frontend.de.layouts.master')

@section('title', 'Unterhaltung - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('de-entertainment') }}"
       aria-expanded="false">DE</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('entertainment') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-entertainment') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-entertainment') }}">RU</a></li>
    </ul>
</li>

@endsection

@section('content')

<!-- Hero Part -->
<div class="entertainmentHero">
  <div class="heroImage">
    <figure>
      <img src="{{ asset('assets/frontend/images/entertainment/entertainment.webp') }}" alt="entertainment"/>
    </figure>
  </div>
  <article>
    <h1>Unterhaltung</h1>
    <span>Port Nature bietet einen verlockenden Einblick in die Welt des reinen Vergnügens.<br> Eine sorgenfreie Oase für Kinder und Erwachsene.</span>
  </article>
</div>
<!-- Hero Part End -->

<div class="entertainmentSection activities">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-7">
        <figure>
          <img src="{{ asset('assets/frontend/images/entertainment/activities.webp') }}" alt="activities"/>
        </figure>
    </div>
    <div class="col-12 col-md-12 col-lg-5">
      <article class="leftText">
        <h2>Aktivitäten</h2>
        <p>Egal, ob Sie ein erfahrener Sportler sind oder gerade erst mit Ihrer Fitnessreise beginnen, unser umfangreiches Angebot an Einrichtungen wird Ihnen dabei helfen, Ihre Ziele zu erreichen. Von einem voll ausgestatteten Fitnessstudio bis hin zu Indoor- und Outdoor-Sportplätzen haben wir alles, was Sie brauchen, um aktiv und gesund zu bleiben.</p>
        <div class="moreButton">
          <a href="{{ route('de-activity') }}">Mehr Uber</a>
        </div>
      </article>
    </div>
  </div>
</div>

<div class="entertainmentSection">
  <div class="row reverse">
    <div class="col-12 col-md-12 col-lg-5">
      <article class="rightText">
        <h2>Konzerte</h2>
        <p>Der Besuch eines Live-Konzerts kann ein atemberaubendes Erlebnis sein, bei dem die umwerfenden Darbietungen, die schillernden Lichter und der überwältigende Klang eine unvergessliche Atmosphäre schaffen. Von der Energie des Publikums bis zur unglaublichen Kunstfertigkeit der Musiker für unsere Gäste.</p>
        <div class="moreButton">
          <a href="{{ route('de-concert') }}">Mehr Uber</a>
        </div>
      </article>
    </div>
    <div class="col-12 col-md-12 col-lg-7">
        <figure>
          <img src="{{ asset('assets/frontend/images/entertainment/concerts.webp') }}" alt="concerts"/>
        </figure>
    </div>
  </div>
</div>

<!-- Contact -->
@include('frontend.de.layouts.contact')
<!-- Contact End -->
  <!-- Page Up Button -->
  <div style="text-align: center" class="pageUpButton">
    <a href="#">
        <img style="width: unset;height: unset" class="accommdationSvg" src="{{ asset('assets/frontend/images/pageUp.svg') }}"/>
    </a>
</div>

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/entertainment.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/entertainment.css') }}"/>
@endsection