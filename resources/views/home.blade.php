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
                @foreach ( $comics as $comicsItem )
                    @include('partials.comic-card')
                @endforeach
            </div>
        </div>
    </div>
</main>

@endsection