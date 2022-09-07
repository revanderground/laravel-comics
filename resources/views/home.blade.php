<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@extends('layouts.main')

@section('main-content')

<section id="DC_ALBUM">

    <div class="album d-flex flex-wrap justify-content-center py-5">

        @foreach ($comics as $comic)
            <div class="album-card">

                <div class="wrapper-cards">

                    <div class="card-image">
                        <img class="card-img" src="{{ $comic->image }}" alt="{{ $comic->title }}">
                    </div>

                    <div class="card-title">
                        {{ $comic->title }}
                    </div>

                </div>

            </div>
        @endforeach

        <a href="#" class="load-more">load more</a>

    </div>




</section>


@endsection
