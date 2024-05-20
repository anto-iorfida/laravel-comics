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

@endsection