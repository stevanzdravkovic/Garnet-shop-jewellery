@extends ('layouts.layout')
@section('title')
    Garnet Jewellery | eShop
@endsection
<!-- Hero section -->
@section('slider')
    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ session()->get('message') }}
        </div>
    @endif
    @include('components.slider')
@endsection
<!-- Hero section end -->

<!-- letest product section -->
@section('content')
    @include('components.content')
@endsection
<!-- letest product section end -->
