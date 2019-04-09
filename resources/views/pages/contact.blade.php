@extends('layouts.layout')
@section('title')
    Garnet Jewellery | Contact
@endsection

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">



<div class="content py-5  bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <span class="anchor" id="formContact"></span>
                <!-- form user info -->
                <div class="card card-outline-secondary">
                    <div class="card-header">
                        <h3 class="mb-0">Contact</h3>
                    </div>
                    @if(Session()->has('message'))
                        <div class=".alert alert-success ">
                            {{session()->get('message')}}
                        </div>

                    @endif

                    <div class="card-body">







                        <form class="form" role="form" autocomplete="off" method="post" action="{{route('doContact')}}">
                            {{csrf_field()}}
                            <fieldset>

                                <label for="email2" class="mb-0">Email</label>
                                <div class="row mb-1">
                                    <div class="col-lg-12">
                                        <input type="text" name="email2" id="email2" class="form-control" required="">
                                    </div>
                                </div>
                                <label for="message2" class="mb-0">Message</label>
                                <div class="row mb-1">
                                    <div class="col-lg-12">
                                        <textarea rows="6" name="message2" id="message2" class="form-control" required=""></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary btn-lg float-right">Send Message</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <!-- /form user info -->

            </div></div></div></div>
    @endsection