<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  
      <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <th>order no</th>
            <th>customer id</th>
            <th>user id</th>
          
            <th>note</th>
            <th>price</th>
            <th>payment status</th>
            <th>shipping status</th>
            <th>product id</th>
            <th>qty</th>
            <th>created at</th>
        </tr>

        @foreach($orders as $order)

        <tr>

            <td>{{ $order->id }}</td>

            <td>{{ $order->order_number }}</td>

            <td>{{ $order->customer_id }}</td>
            <td>{{ $order->user_id }}</td>
            <td>{{ $order->note }}</td>
            <td>{{ $order->price }}</td>
            <td>{{ $order->payment_status }}</td>
            <td>{{ $order->shipment_status }}</td>
            <td>{{ $order->product_id }}</td>
            <td>{{ $order->qty }}</td>
            <td>{{ $order->created_at }}</td>

        </tr>  
        @endforeach

        <h1>Details</h1>


        @foreach($orderdetails as $orderdetail)

        <tr>

            <td>{{ $orderdetail->id }}</td>

        

        </tr>  
        @endforeach
        <h1>Customer</h1>

        @foreach($customers as $customer)

        <tr>

            <td>{{ $customer->id }}</td>

        

        </tr>  
        @endforeach
  
    </table>
</body>
</html>