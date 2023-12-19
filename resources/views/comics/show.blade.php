@extends('layouts.app')

@section('title', $comic['title'])

@section('content')
    <main>
        <div id="jumbo">
        </div>
        <div id="comic-detail">
            <div class="blueline">
                <div class="container">
                    <div class="comic-img">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    </div>
                </div>
            </div>
            <div class="container py-5">


                <section>
                    <div class="row mt-5">
                        <div class="col-12 col-lg-8 mb-3">
                            <h1 class="text-uppercase mb-3">{{ $comic['title'] }}</h1>
                            <div class="price-info row align-items-center mb-3">
                                <div class="price-box col-8 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="text-green me-1">U:S:Price:</div>
                                        <div>{{ $comic['price'] }}</div>
                                    </div>
                                    <div class="text-uppercase text-green">Available</div>
                                </div>
                                <div class="price-box col-4 d-flex justify-content-center align-items-center">
                                    <div class="me-3">Check Availability </div>
                                    <i class="fa-solid fa-angle-down"></i>
                                </div>

                            </div>
                            <p>{{ $comic['description'] }}</p>
                        </div>

                        <div class="col-12 col-lg-4">
                            <div class="mb-3">
                                <h6 class="text-uppercase text-end">Advertisement</h6>
                                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="advertisement">
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>

    </main>
    @include('partials.resources')

@endsection
