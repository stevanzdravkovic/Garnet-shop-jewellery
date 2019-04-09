
<!-- Category section -->
<section class="category-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">



                <div class="pull-left">

                    <div class="sort-filter">
                        <span class="text-uppercase">Sort By Price:</span>
                        <a href="{{asset('/categories/men_watches/un/ASC')}}" class="main-btn icon-btn"><i class="fa fa-arrow-circle-up"></i></a>
                        <a href="{{asset('/categories/men_watches/un/DESC')}}" class="main-btn icon-btn"><i class="fa fa-arrow-circle-down"></i></a>
                    </div>
                </div>

            </div>

            <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row">
                    @foreach($necklaces as $necklace )
                        <div class="col-lg-4 col-sm-6">



                            <div class="product-item">
                                <div class="pi-pic">
                                    <div class="tag-sale">ON SALE</div>
                                    <a href="{{asset('/necklaces/'.$necklace->id_product)}}"  ><img src="{{$necklace->path}}" alt="{{$necklace->product_name}}"></a>
                                    <div class="pi-links">

                                        <i class="flaticon-bag">click to shop</i>


                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>${{$necklace->price}}</h6>
                                    <p>{{$necklace->product_name}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach



                    <div class="text-center w-100 pt-3">
                        <div class="site-btn sb-line sb-dark">


                            {{ $necklaces->links() }}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category section end -->


