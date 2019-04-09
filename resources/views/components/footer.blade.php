<section class="footer-section">
    <div class="container">
        <div class="footer-logo text-center">

            <a href="/"><h3 style="font-size: 300%;color:snow">Garnet Jewellery</h3></a>
           <!-- <a href="/"><img src="{{'./image/logo1.jpg'}}" alt=""></a>-->
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>About</h2>
                    <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                    <img src="img/cards.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>MENI</h2>
                    <ul>
                        @foreach($meni as $m)
                            <li><a href="{{$m->ruta}}">{{$m->meni_ime}}</a></li>
                        @endforeach
                    </ul>

                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>Questions</h2>
                    <div class="con-info">
                        <span>C.</span>
                        <p>Your Company Ltd </p>
                    </div>
                    <div class="con-info">
                        <span>B.</span>
                        <p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
                    </div>
                    <div class="con-info">
                        <span>T.</span>
                        <p>+53 345 7953 32453</p>
                    </div>
                    <div class="con-info">
                        <span>E.</span>
                        <p>office@youremail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">
            <div class="social-links">
                <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
                <a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
                <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
                <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
                <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
                <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
                <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
            </div>

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

        </div>
    </div>
</section>