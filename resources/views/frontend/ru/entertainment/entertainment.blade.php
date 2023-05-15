@extends('frontend.ru.layouts.master')

@section('title', 'Развлечения - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('ru-entertainment') }}"
       aria-expanded="false">RU</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('entertainment') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('tr-entertainment') }}">TR</a></li>
        <li><a class="dropdown-item" href="{{ route('de-entertainment') }}">DE</a></li>
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
    <h1>Развлечения</h1>
    <span>Port Nature дарит вам вкус наслаждения.<br> Чистое удовольствие для детей и взрослых, не беспокоясь ни о чем.</span>
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
        <h2>Мероприятия</h2>
        <p>Независимо от того, являетесь ли вы опытным спортсменом или только начинаете свой спортивный путь, наш широкий спектр услуг поможет вам оставаться в форме. От полностью оборудованного тренажерного зала до крытых и открытых спортивных площадок - у нас есть все, что вам нужно, чтобы оставаться активным и здоровым.</p>
        <div class="moreButton">
          <a href="{{ route('ru-activity') }}">Подробнее</a>
        </div>
      </article>
    </div>
  </div>
</div>

<div class="entertainmentSection">
  <div class="row reverse">
    <div class="col-12 col-md-12 col-lg-5">
      <article class="rightText">
        <h2>Концерты</h2>
        <p>Посещение живого концерта может стать захватывающим опытом, поскольку потрясающие выступления, ослепительный свет и захватывающий звук создают незабываемую атмосферу.</p>
        <div class="moreButton">
          <a href="{{ route('ru-concert') }}">Подробнее</a>
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
@include('frontend.ru.layouts.contact')
<!-- Contact End -->

@endsection

@section('javascript-imports')
<script src="{{ asset('assets/frontend/js/entertainment.js') }}"></script>
@endsection

@section('css-imports')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/entertainment.css') }}"/>
@endsection