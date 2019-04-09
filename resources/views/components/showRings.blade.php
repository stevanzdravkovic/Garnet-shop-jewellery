
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

                    @foreach($rings as $ring)
                        <div class="col-lg-4 col-sm-6">



                            <div class="product-item">
                                <div class="pi-pic">
                                    <div class="tag-sale">ON SALE</div>
                                    <a href="{{asset('/rings/'.$ring->id_product)}}" ><img src="{{$ring->path}}" alt="{{$ring->product_name}}"></a>
                                    <div class="pi-links">
                                        <i class="flaticon-bag">click to shop</i>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>${{$ring->price}}</h6>
                                    <p>{{$ring->product_name}}</p>
                                </div>
                            </div>
                        </div>

                    @endforeach




                    <div class="text-center w-100 pt-3">
                        <div class="site-btn sb-line sb-dark">


                            {{ $rings->links() }}



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Category section end -->


