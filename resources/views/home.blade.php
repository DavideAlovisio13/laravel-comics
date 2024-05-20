@extends('layouts.app')

@section('title', 'DC Comics')

@section('content')
<main>
    <div class="container">
        <h1>
            Current Series
        </h1>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 d-flex w-100 flex-wrap justify-content-center">
                @foreach ($comics as $comic)
                <div class="card animate__animated position-relative">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}" />
                    <span class="text-white position-absolute spanpop shadow-lg" style="display: none;">{{ $comic['description'] }}</span>
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['series'] }}</h5>
                        <p>
                            Price: <a href="#">{{ $comic['price'] }}</a>
                        </p>
                        <p>
                            Type: <a href="#">{{ $comic['type'] }}</a>
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection