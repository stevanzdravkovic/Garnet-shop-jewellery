<section class="hero-section">
    <div class="hero-slider owl-carousel">
        @foreach($slider as $s)

        <div class="hs-item set-bg" data-setbg="{{$s->path}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-7 text-white">
                        <span>New Arrivals</span>
                        <h2>denim jackets</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
                       <!-- <a href="#" class="site-btn sb-line">DISCOVER</a>
                        <a href="#" class="site-btn sb-white">ADD TO CART</a>-->
                    </div>
                </div>
                <div class="offer-card text-white">
                    <span>from</span>
                    <h2>$2.5</h2>
                    <p>SHOP NOW</p>
                </div>
            </div>
        </div>

@endforeach

    </div>
    <div class="container">
        <div class="slide-num-holder" id="snh-1"></div>
    </div>
</section>