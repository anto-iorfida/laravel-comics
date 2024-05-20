@extends('layouts.app')

@section('content')
<section class="hero">

</section>

<section class="section-card-cinema">
    <div class="container">

        <div class="container-card">
            @foreach ($cards as $card)
            <div class="card">
                <div class="container-img-card">
                    <img src="{{$card['thumb']}}" alt="">
                </div>
                <h4>{{$card['series']}}</h4>
            </div>
            @endforeach

        </div>
    </div>
</section>

<section  class="service">
    <ul class="container flex-mix">
        <li>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="service logo">
                <div>DIGITAL COMICS</div>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="service logo">
                <div>DC MERCHANDISE</div>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="service logo">
                <div>SUBSCRIPTION</div>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="service logo">
                <div>COMIC SHOP LOCATOR</div>
            </a>
        </li>
        <li>
            <a href="#">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="service logo">
                <div>DC POWER VISA</div>
            </a>
        </li>
    </ul>
</section>

@endsection