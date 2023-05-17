@extends('frontend.tr.layouts.master')

@section('title', 'Eğlenceler - PORT Nature Luxury Resort Hotel & Spa')

@section('header-lang')

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="{{ route('tr-entertainment') }}"
       aria-expanded="false">TR</a>
    <ul class="dropdown-menu dropdownmobile language">
        <li><a class="dropdown-item first-item" href="{{ route('entertainment') }}">EN</a></li>
        <li><a class="dropdown-item" href="{{ route('ru-entertainment') }}">RU</a></li>
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
    <h1>Eğlenceler</h1>
    <span>Part Nature size eğlencenin tadını veriyor.<br> Çocuklar ve yetişkinler için, endişelenmeden saf eğlence.</span>
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
        <h2>AKTİVİTELER</h2>
        <p>İster deneyimli bir sporcu olun, ister fitness yolculuğunuza yeni başlıyor olun, kapsamlı tesis yelpazemiz hedeflerinize ulaşmanıza yardımcı olacaktır. Tam donanımlı bir spor salonundan kapalı ve açık spor alanlarına kadar, aktif ve sağlıklı kalmanız için ihtiyacınız olan her şeye sahibiz.</p>
        <div class="moreButton">
          <a href="{{ route('tr-activity') }}">Daha Fazlası</a>
        </div>
      </article>
    </div>
  </div>
</div>

<div class="entertainmentSection">
  <div class="row reverse">
    <div class="col-12 col-md-12 col-lg-5">
      <article class="rightText">
        <h2>Konserler</h2>
        <p>Unutulmaz bir atmosfer yaratan çarpıcı performanslar, göz kamaştırıcı ışıklar ve sürükleyici ses ile canlı bir konsere katılmak nefes kesici bir deneyim olabilir. Kalabalığın enerjisi ve müzisyenlerin inanılmaz sanatıyla çoşkuyu doruklarda yaşayın. </p>
        <div class="moreButton">
          <a href="{{ route('tr-concert') }}">Daha Fazlası</a>
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
@include('frontend.tr.layouts.contact')
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