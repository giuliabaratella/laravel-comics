@php
    $dcComics = config('db.dcComics');
    $shop = config('db.shop');
    $dc = config('db.dc');
    $sites = config('db.sites');
@endphp

<footer>
    <div class="footer-links overflow-y-auto overflow-x-hidden">
        <div class="container d-flex justify-content-between h-100">
            <div class="pt-4 d-flex flex-column flex-wrap column-gap-4 h-100">
                <ul>
                    <li>
                        <h4 class="text-uppercase">Dc Comics</h4>
                    </li>
                    @foreach ($dcComics as $link)
                        <li><a href="#">{{ $link }}</a></li>
                    @endforeach
                </ul>
                <ul>
                    <li>
                        <h4 class="text-uppercase">Shop</h4>
                    </li>
                    @foreach ($shop as $link)
                        <li><a href="#">{{ $link }}</a></li>
                    @endforeach
                </ul>
                <ul>
                    <li>
                        <h4 class="text-uppercase">DC</h4>
                    </li>
                    @foreach ($dc as $link)
                        <li><a href="#">{{ $link }}</a></li>
                    @endforeach
                </ul>
                <ul>
                    <li>
                        <h4 class="text-uppercase">Sites</h4>
                    </li>
                    @foreach ($sites as $link)
                        <li><a href="#">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
            <img id="dc-logo-bg" src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="DC Logo">
        </div>
    </div>
    <div class="footer-social">
        <div class="container d-flex justify-content-between py-5">
            <button class="btn text-uppercase fw-bold">Sign-up now!</button>
        </div>
    </div>
</footer>
