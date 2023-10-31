<footer id="footer">
    <div class="container">
        <div class="row py-5 justify-content-center">
            <div class="col-md-4 col-lg-3 mb-4 mb-lg-0 text-center">
                <a href="{{ route('home') }}" class="pe-0 pe-lg-3">
                    <img alt="{{ config('app.name') }}" src="/logo.png" height="50">
                </a>
            </div>
            <div class="col-md-9 mb-4 mb-lg-0 d-flex align-items-center">
                <div class="footer-nav footer-nav-links footer-nav-bottom-line">
                    <nav>
                        <ul class="nav" id="footerNav">
                            <li>
                                <a href="{{ route('home') }}" class="text-3 text-white">Anasayfa</a>
                            </li>
                            <li>
                                <a href="{{ route('corporatedetail', 'hakkimizda') }}" class="text-3 text-white">Hakkımda</a>
                            </li>
                            <li>
                                <a class="text-3 text-white" href="{{ route('service') }}">Hizmetlerimiz</a>
                            </li>

                            <li>
                                <a href="{{ route('video') }}" class="text-3 text-white">Video Galeri</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}" class="text-3 text-white">Blog</a>
                            </li>
                            <li>
                                <a href="{{route('contactus')}}" class="text-3 text-white">İletişim</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

        </div>
    </div>
</footer>
