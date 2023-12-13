@extends('frontend.layout.app')
@section('content')
    @include('frontend.layout.slider')

    <div class="container pt-5 mt-5">
        <div class="row py-4 mb-2">
            <div class="col-md-7 order-2">
                {!! $About->short !!}
                {{-- <div class="overflow-hidden">
                    <h2 class="text-color-dark font-weight-bold text-12 mb-2 pt-0 mt-0 appear-animation animated maskUp appear-animation-visible"
                        data-appear-animation="maskUp"
                        data-appear-animation-delay="300"
                        style="animation-delay: 300ms;">Asosyal Araştırma</h2>
                </div>
                <div class="overflow-hidden mb-3">
                    <p class="font-weight-bold text-primary text-uppercase mb-0 appear-animation animated maskUp appear-animation-visible"
                       data-appear-animation="maskUp" data-appear-animation-delay="500" style="animation-delay: 500ms;">Veriye dayalı gerçek bilgi!
                    </p>
                </div>
                <p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                    Asosyal Ajans siyasi ve piyasa araştırmalarında saha ve cati hizmetleri sunmaktadır. Tüm hizmetlerini kendi kadrolu personlleri ile gerçekleştirmektedir.  Sonuca ulaşmak için doğru  bilginin önemini bilerek hareket eder. Kocaeli, İstanbul ve Ankarad'da ofisleri bulunmaktadır.
                </p>

                <p class="lead appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700" style="animation-delay: 700ms;">
                    2003 yılından beri siyasi seçimlerde hem akademik kadrosu hem de saha personeli ile uzmanlaşmış bir araştırma şirketidir. 2003 yılından beri yapılan seçim sonuçlarını Türkiye'de en az hata payı ile bilen firmadır.
                </p> --}}


                <hr class="solid my-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900" style="animation-delay: 900ms;">
                <div class="row align-items-center appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                    <div class="col-lg-6">
                        <a href="{{ route('service') }}" class="btn btn-modern btn-dark mt-3">Hizmetlerimiz</a>
                        <a href="{{ route('contactus') }}" class="btn btn-modern btn-primary mt-3">İletişime Geç</a>
                    </div>
                    <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                        <strong class="text-uppercase text-1 me-3 text-dark">Takip Et</strong>
                        <ul class="social-icons float-lg-end">
                            <li class="social-icons-instagram"><a href="http://www.instagram.com/{{ config('settings.instagram') }}" target="_blank" title="instagram"><i class="fab fa-instagram"></i></a></li>
                            <li class="social-icons-youtube"><a href="https://www.youtube.com/{{ config('settings.youtube') }}" target="_blank" title="youtube"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                <img src="{{ (!$About->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $About->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid mb-2" alt="Kocaeli İzmit Asosyal Ajans" style="border-radius: 0 25px 0 25px;box-shadow: 5px 5px 1px gray">
            </div>
        </div>
    </div>

    <div class="container container-fluid">
        <div class="row">
            <div class="col">
                <p class="text-uppercase mb-0 d-block text-center text-uppercase appear-animation animated fadeInUpShorter appear-animation-visible"
                   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">ASOSYAL AJANS</p>
                <h3 class="text-color-quaternary mb-2 d-block text-center font-weight-bold text-capitalize appear-animation animated
                    fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">ÇALIŞMA ALANLARIMIZ
                </h3>
            </div>
        </div>

        <div class="row">
            @foreach($Service->where('category', 1) as $item)
                <div class="col-lg-4 mb-4">
                    <a href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">
                        <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
                            <span class="thumb-info-wrapper">
                                <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="{{ $item->title }}">
                                <span class="thumb-info-title">
                                    <span class="thumb-info-inner line-height-1">{{ $item->title }}</span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


    <div class="container container- mt-5">
        <div class="row">
            <div class="col text-center">
                <img src="/anket.jpg" class="img-fluid" alt="{{ config('app.name') }}">
            </div>
        </div>
    </div>


    <div class="container container- mt-5">
        <div class="row">
            <div class="col">
                <p class="text-uppercase mb-0 d-block text-center text-uppercase appear-animation animated fadeInUpShorter appear-animation-visible"
                   data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">ASOSYAL AJANS</p>
                <h3 class="text-color-quaternary mb-2 d-block text-center font-weight-bold text-capitalize appear-animation animated
                    fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">HİZMET VERDİĞİMİZ BAZI KURUM VE MARKALAR
                </h3>
            </div>
        </div>


        <div class="owl-carousel owl-theme dots-modern" data-plugin-options="{'responsive': {'0': {'items': 2}, '479': {'items': 2}, '768': {'items': 4}, '979': {'items':5}, '1199': {'items': 8}}, 'loop': true, 'autoHeight': true, 'margin': 10}">
            @foreach($Service->where('category', 3) as $item)
            <div>
                <img alt="" class="img-fluid rounded" src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}">
            </div>
            @endforeach
        </div>

    </div>


    <section class="our-blog pt-5 pt-lg-0 pb-lg-5 mb-5 p-relative bg-color-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-uppercase mb-0 d-block text-center text-uppercase appear-animation animated fadeInUpShorter appear-animation-visible"
                       data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">ASOSYAL AJANS
                    </p>
                    <h3 class="text-color-quaternary mb-2 d-block text-center font-weight-bold text-capitalize appear-animation animated
                        fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">MAKALELER
                    </h3>
                </div>
            </div>
            <div class="row justify-content-center justify-lg-content-between">

                @foreach($Blog->take(3) as $item)
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <article>
                        <div class="card border-0 border-radius-0 box-shadow-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                            <div class="card-body p-4 z-index-1">
                                <a href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}">
                                    <img src="{{ (!$item->getFirstMediaUrl('page')) ? '/resimyok.jpg' : $item->getFirstMediaUrl('page', 'thumb') }}" class="img-fluid" alt="{{ $item->title }}">
                                </a>
                                <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                    {{ $item->created_at->diffForHumans()  }}</time> <span class="opacity-3 d-inline-block px-2">|</span> Dr. Turan Çetin</p>
                                <div class="card-body p-0">
                                    <h4 class="card-title mb-3 text-5 font-weight-bold">
                                        <a href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}">{{ $item->title }}</a>
                                    </h4>
                                    <a href="{{ route('blogdetail' , $item->slug)}}" title="{{ $item->title }}" class="font-weight-bold text-uppercase text-decoration-none d-block mt-3">DEvamını Oku+</a>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="modal show" tabindex="-1" role="dialog" id="kongredetay">
        <div class="modal-dialog modal-lg" role="document" id="banner">
            <div class="modal-content">
                <div class="modal-body">
                    <a href="{{ route('servicedetail', 'arastirma-hizmeti') }}">
                        <img src="/anket.jpg" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('customJS')
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#kongredetay').modal('show');
        });
    </script>
@endsection

