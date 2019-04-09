
<!-- Category section -->
<section class="category-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">

                <div class="sort-filter">
                    <span class="text-uppercase">Sort By Price:</span>
                    <a href="{{asset('/categories/men_watches/un/ASC')}}" class="main-btn icon-btn"><i class="fa fa-arrow-circle-up"></i></a>
                    <a href="{{asset('/categories/men_watches/un/DESC')}}" class="main-btn icon-btn"><i class="fa fa-arrow-circle-down"></i></a>
                </div>

            </div>

            <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row">

                    @foreach($earrings as $earring)
                        <div class="col-lg-4 col-sm-6">



                            <div class="product-item">
                                <div class="pi-pic">
                                    <div class="tag-sale">ON SALE</div>


                                    <a href="{{asset('/earrings/'.$earring->id_product)}}"> <img src="{{$earring->path}}" alt="{{$earring->product_name}}"></a>
                                    <div class="pi-links">
                                        <i class="flaticon-bag">click to shop</i>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>${{$earring->price}}</h6>
                                    <p>{{$earring->product_name}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach




                    <div class="text-center w-100 pt-3">
                        <div class="site-btn sb-line sb-dark">


                            {{ $earrings->links() }}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category section end -->


