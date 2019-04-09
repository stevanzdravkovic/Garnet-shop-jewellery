

<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <div class="cart-table-warp">
                        <br/><br/>
                        <table  align="center" border="10" >
                            <thead>
                            <tr>
                                <th class="product-th">Name, last name</th>

                                <th class="product-th">Address</th>
                                <th class="product-th">Country</th>
                                <th   class="product-th">City</th>
                                <th class="product-th">Phone</th>
                                <th class="product-th">Order</th>
                            </tr>
                            </thead>

                            <tbody>

@foreach($podaci as $p)

                                <tr>
                                    <td align="center" class="product-th">
                                        {{$p->name}} {{$p->lastname}}
                                    </td>



                                    <td  align="center" class="product-th">
                                        {{$p->address}}
                                    </td>

                                    <td align="center" class="product-th">
                                        {{$p->country}}
                                    </td>

                                    <td  align="center" class="product-th">
                                        {{$p->city}}
                                    </td>

                                    <td align="center" class="product-th">
                                        {{$p->phone}}
                                    </td>

                                    <td align="center" class="product-th">


                                     <!-- Do your stuff -->
                                        @foreach($p->cart->items as $item)

                                        <p align="center">naziv:   {{($item['item']->product_name)}}</p>
                                        <p align="center">komada: {{($item['qty'])}}</p>



                                            <p align="center">price: {{($item['item']->price)}}$</p>


                                        __________________________________

                                        @endforeach
                                        <p align="center">total price: {{($p->cart->totalPrice)}}$</p>

                                    </td>





@endforeach


                            </tbody>
                        </table>

                        <div align="center">{{$podaci->links()}}</div>
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