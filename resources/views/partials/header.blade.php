@php
    $navLinks = config('db.navLinks');
@endphp

<header>
    <div class="container d-flex justify-content-between align-items-center ">
        <div id="logo" class="my-3 pe-3">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics">
        </div>
        <nav class="navbar navbar-expand-lg">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="d-flex column-gap-4 navbar-nav me-5 my-2 my-lg-0 navbar-nav-scroll">
                    @foreach ($navLinks as $link)
                        <li class="text-uppercase nav-item">
                            <a href="#" class="nav-link-active">{{ $link }}</a>
                        </li>
                    @endforeach

                </ul>
                <div class="search d-flex align-items-center ">
                    <input class="form-control searchbar" type="search" placeholder="Search" aria-label="Search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>

        </nav>

    </div>
</header>
