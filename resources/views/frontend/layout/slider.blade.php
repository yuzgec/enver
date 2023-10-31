<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside
 dots-horizontal-center show-dots-hover show-dots-xs show-dots-sm show-dots-md dots-light custom-nav-arrows-1
  nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 9000}" style="height: 100vh;">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            <div class="owl-item position-relative pt-5 overlay overlay-show overlay-op-7" style="background-image: url('slider1.jpg'); background-size: cover; background-position: center;"></div>
            <div class="owl-item position-relative pt-5 overlay overlay-show overlay-op-7" style="background-image: url(/slider2.jpg); background-size: cover; background-position: center;"></div>
        </div>
    </div>
    <div class="owl-nav">
        <button type="button" role="presentation" class="owl-prev" aria-label="Geri"></button>
        <button type="button" role="presentation" class="owl-next" aria-label="İleri"></button>
    </div>
</div>

<section class="looking-for custom-position-1 custom-md-border-top z-index-1">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <div class="looking-for-box">
                    <h2>- <span class="text-1 custom-secondary-font">İletişime Geçin</span></h2>
                </div>
            </div>
            <div class="col-md-3 d-flex justify-content-md-end mb-4 mb-md-0">
                <a class="text-decoration-none" href="tel:{{ config('settings.telefon1') }}" target="_blank" title="Hemen Arayın">
                    <span class="custom-call-to-action">
                        <span class="action-title text-white">Telefon Numarası</span>
                        <span class="action-info text-color-light">{{ config('settings.telefon1') }}</span>
                    </span>
                </a>
            </div>
            <div class="col-md-3 col-lg-2">
                <a class="text-decoration-none" href="{{ config('settings.email1') }}" target="_blank" title="Email Gönder">
                    <span class="custom-call-to-action">
                        <span class="action-title text-white">Email Adresi</span>
                        <span class="action-info text-color-light">{{ config('settings.email1') }}</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>
