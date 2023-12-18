@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main>

        <section id="current-series" class="container">
            <h1>Comics</h1>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-12 col-md-4 col-lg-2">
                        <div class="card">
                            <div class="card-img-box">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic['title'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </main>

@endsection
