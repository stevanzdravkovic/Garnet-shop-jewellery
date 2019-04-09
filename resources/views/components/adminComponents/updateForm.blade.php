<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <div class="cart-table-warp">
                        <br/><br/>
                        <table align="center" border="10">
                            <thead>
                            <tr>
                                <th class="product-th">Name</th>

                                <th class="product-th">Price</th>

                                <th class="product-th">Image</th>

                                <th class="product-th">Update</th>


                            </tr>
                            </thead>
                            <tbody>


                            @foreach($podaci as $p)

                                <tr>

                                    <td class="product-th"><h4>{{$p->product_name}}</h4></td>
                                    <td class="product-th"><h4>${{$p->price}}</h4></td>
                                    <td class="product-col">
                                        <img height="80" width="80" src="{{asset($p->path)}}" alt="{{$p->product_name}}">

                                    </td>
                                    <td class="total-col">

                                        <a href="{{asset('/admin/update/products/'.$p->id_product)}}" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-remove"></span> Update
                                        </a>

                                    </td>

                            @endforeach




                            </tbody>
                        </table>
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        <br/><br/>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>