@extends('layouts.layout')
@section('title')
    Garnet Jewellery | Checkout
@endsection

@section('content')



<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Your cart</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Your cart</a>
        </div>
    </div>
</div>
<!-- Page info end -->


<!-- checkout section  -->
<section class="checkout-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-2 order-lg-1">
                <form action="{{route('insert-order')}}" method="get" class="checkout-form">
                    {{csrf_field()}}
                    <div class="cf-title">Billing Address</div>
                    <div class="row">
                        <div class="col-md-7">
                            <p>*Billing Information</p>
                        </div>
                        <div class="col-md-5">
                        </div>
                    </div>
                    <div class="row address-inputs">
                        <div class="col-md-12">
                            <input type="text" placeholder="Address" name="address" required>
                            <input type="text" placeholder="Country" name="country" required>
                            <input type="text" placeholder="City" name="city" required>
                        </div>

                        <div class="col-md-6">
                            <input type="text" placeholder="Phone no." name="phone" required>
                        </div>
                    </div>




                    <button type="submit" class="site-btn submit-order-btn">Place Order</button>
                </form>
            </div>



            <div class="col-lg-4 order-1 order-lg-2">
                <div class="checkout-cart">
                    <h3>Your Cart</h3>
                    <ul class="product-list">
                        <li>


                            <p>YOUR TOTAL:  ${{$total}}</p>

@foreach($products as $product)
                            <p>{{$product['item']->product_name}} --- komada: {{$product['qty']}}</p>
    @endforeach
                        </li>
                    </ul>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- checkout section end -->
@endsection
