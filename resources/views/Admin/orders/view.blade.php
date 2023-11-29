@extends('layouts.main')
@section('yield', 'Order View')
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
<style>
    html,
    body {
        margin: 10px;
        padding: 10px;
        font-family: sans-serif;
    }
    h1,h2,h3,h4,h5,h6,p,span,label {
        font-family: sans-serif;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 0px !important;
    }
    table thead th {
        height: 28px;
        text-align: left;
        font-size: 16px;
        font-family: sans-serif;
    }
    table, th, td {
        border: 1px solid #ddd;
        padding: 8px;
        font-size: 14px;
        color: black
    }

    .heading {
        font-size: 24px;
        margin-top: 12px;
        margin-bottom: 12px;
        font-family: sans-serif;
    }
    .small-heading {
        font-size: 18px;
        font-family: sans-serif;
    }
    .total-heading {
        font-size: 18px;
        font-weight: 700;
        font-family: sans-serif;
    }
    .order-details tbody tr td:nth-child(1) {
        width: 20%;
    }
    .order-details tbody tr td:nth-child(3) {
        width: 20%;
    }

    .text-start {
        text-align: left;
    }
    .text-end {
        text-align: right;
    }
    .text-center {
        text-align: center;
    }
    .company-data span {
        margin-bottom: 4px;
        display: inline-block;
        font-family: sans-serif;
        font-size: 14px;
        font-weight: 400;
    }
    .no-border {
        border: 1px solid #fff !important;
    }
    .bg-blue {
        background-color: #D2691E;
        color: #fff;
    }
    .bg-red {
        background-color: #808000;
        color: #fff;
    }


    .last_footer_css{
    margin-top: 30px!important;
}
</style>



@foreach($orders as $order)

<?php
    // dd($order);
?>

<table class="order-details">
    <thead>
        <tr>
            <th width="50%" colspan="2">
                <h2 class="text-start">Order No {{ $order->id }}   </h2>
            </th>
            <th width="50%" colspan="2" class="text-end company-data">
                <!-- {{-- <span>Invoice Id: #{{ $orders->id }}</span> <br> --}} -->
                <span>Date:  {{ date('d / m / Y')}}</span> <br>  
            </th>
        </tr>
        <tr class="@if($loop->iteration%2 == '1') bg-blue @else bg-red @endif">
            <th width="50%" colspan="4">Order </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Order Id :</td>
            <td>{{ $order->id  ?? 'Empty'}}</td>

            <td>Country :</td>
            <td> {{ $order->short_country ?? 'Empty' }}</td>
        </tr>
        <tr>
            <td>Product Name :</td>
            <td>{{ $order->name ?? 'Empty'}}</td>

            <td> Post Code :</td>
            <td>{{ $order->short_post_code ?? 'Empty' }}</td>
        </tr>
        <tr>
            <td>Delivery Date :</td>
            <td>{{ $order->short_delivery_date ?? 'Empty' }}</td>

            <td>Order Meaasges :</td>
            <td> {{ $order->short_order_message ?? 'Empty' }}</td>
        </tr>
        <tr>
            <td> Created At :</td>
            <td> {{ $order->user_create_date ?? 'Empty' }}</td>

            <td>Created By:</td>
            <td> <span style="padding: 10px;
                background: darkgray;
                color: black;
                border-radius: 3px;">{{ $order->user_name  ?? 'Empty'}}</span></td>
        </tr>
       
    </tbody>
</table>


<table class="order-details">
    <thead>
        <tr class="@if($loop->iteration%2 == '1') bg-blue @else bg-red @endif">
            <th width="50%" colspan="4">Users </th>
        </tr>
    </thead>
    <tbody>
        <tr>
        @if (!is_null($order->user_id))
            <td>User Id :</td>
            <td>{{ $order->user_id ? : '-' }}</td>
        @endif

        @if (!is_null($order->user_name))
            <td>First Name :</td>
            <td>{{ $order->user_name ?: '-' }}</td>
        @endif
        </tr>

        <tr>
        @if (!is_null($order->email))
            <td>Last Name :</td>
            <td> <span style="padding: 10px;
                background: darkgray;
                color: black;
                text-decoration: underline;
                cursor: pointer;
                border-radius: 3px;">{{ $order->email ?: '-' }}</span></td>
        @endif
        </tr>

    </tbody>
</table>

@endforeach


@endsection