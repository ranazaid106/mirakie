@extends('layouts.main')
@section('content')

<style>
    .gradient-custom {
        /* fallback for old browsers */
        background: #cd9cf2;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to top left, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to top left, rgba(205, 156, 242, 1), rgba(246, 243, 255, 1))
    }
</style>

<section class="h-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-10 col-xl-8">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-header px-4 py-5">
                        <h5 class="text-muted mb-0">Order By, <span style="color: #a8729a;">{{$order->customer->first_name}}</span>!</h5>
                    </div>
                    <div class="card-body p-4">
                        <p class="lead fw-normal mb-0" style="color: #a8729a;"><b>Product Detail</b></p>
                        <p class="text-muted mb-0" style="margin-top:10px;">Name : {{$order->product->name}}</p>
                    </div>
                    <hr>
                    <div class="card-footer border-0 px-4 py-5" style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                        <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total &nbsp;&nbsp;&nbsp;
                            <span class="h2 mb-0 ms-2">{{$order->price}}</span>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection