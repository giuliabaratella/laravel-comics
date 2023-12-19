@extends('layouts.app')

@section('title', 'Comics')

@section('content')
    <main>
        <div id="jumbo">
        </div>
        <div class="container py-5">
            <div class="label text-uppercase fw-bold">Comic Detail</div>
            <section id="current-series" class="container">
                <div class="row row-gap-3">
                    <div class="col-12">
                        <div class="card-comics">
                            <div class="img-box mb-3">
                                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            </div>
                            <div class="card-body">
                                <h6 class="text-uppercase mb-5">{{ $comic['title'] }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>
    @include('partials.resources')

@endsection
