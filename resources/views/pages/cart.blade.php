@extends('layouts.layout')
@section('title')
    Garnet Jewellery | Cart
@endsection

@section('content')
<!-- Page info -->
@if(Session::has('cart'))
<div class="page-top-info">
    <div class="container">
        <h4>Your cart</h4>
        <div class="site-pagination">
            <a href="{{route('home')}}">Home</a> /
            <a href="">Your cart</a>
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- cart section end -->
<section class="cart-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cart-table">
                    <h3>Your Cart</h3>
                    <div class="cart-table-warp">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-th">Product</th>
                                <th class="quy-th">Quantity</th>

                                <th class="total-th">Price</th>
                                <th class="total-th">Remove</th>
                                <th class="total-th">Remove all</th>

                            </tr>
                            </thead>
                            <tbody>


                            @foreach($products as $product)

                                <tr>

                                    <td class="product-col">
                                        <img src="{{$product['item']->path}}" alt="{{$product['item']->product_name}}">
                                        <div class="pc-title">
                                            <h4>{{$product['item']->product_name}}</h4>
                                            <p>{{$product['item']->price}}</p>
                                        </div>
                                    </td>

                                    <td class="quy-col">
                                        <div class="quantity">


                                            <div class="pro-qty">


                                                <input type="number" value="{{$product['qty']}}">

                                            </div>




                                        </div>
                                    </td>

                                    <td class="total-col"><h4>${{$product['price']}}</h4></td>

                                    <td class="total-col">

                                        <a href="{{asset('/deleteCart/'.$product['item']->id_product)}}" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-remove"></span> Remove
                                        </a>

                                    </td>

                                    <td class="total-col">

                                        <a href="{{asset('/removeCart/'.$product['item']->id_product)}}" class="btn btn-default btn-sm">
                                            <span class="glyphicon glyphicon-remove"></span> Remove all
                                        </a>

                                    </td>

                                </tr>
                            @endforeach




                            </tbody>
                        </table>
                    </div>
                    <div class="total-cost">
                        <h6>Total <span>${{$totalPrice}}</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 card-right">

                <a href="{{route('checkout')}}" class="site-btn">Proceed to checkout</a>
                <a href="{{route('home')}}" class="site-btn sb-dark">Continue shopping</a>
            </div>
        </div>
    </div>
</section>
<!-- cart section end -->

<!-- Related product section -->
    @else
@endif

@endsection

