<section class="top-letest-product-section">
    <div class="container">
        <div class="section-title">
            <h2>LATEST PRODUCTS</h2>
        </div>


        <div class="product-slider owl-carousel">

            @foreach($najnoviji as $novi)


            <div class="product-item">
                <div class="pi-pic">
                    <img src="{{$novi->path}}" alt="{{$novi->product_name}}">
                    <div class="pi-links">


                        @if(session()->has('user'))
                            <a href="{{asset('add-to-cart/'.$novi->id_product)}}" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>


                            @else
                            <a href="{{route('do-login')}}" class="add-card" onclick="myFunction()"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                          @endif
                    </div>
                </div>

                <div class="pi-text">
                    <h6>${{$novi->price}}</h6>
                    <p>{{$novi->product_name}} </p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<script>
    function myFunction() {
        alert('morate se ulgoovati da bi mogli da dodajete ukorpu ');
    }
</script>