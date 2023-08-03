<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice </title>

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
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Order Details </h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <!-- {{-- <span>Invoice Id: #{{ $orders->id }}</span> <br> --}} -->
                    <span>Date:  {{ date('d / m / Y')}}</span> <br>
                
                  
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="4">Order </th>
              
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>Order Id:</td>
                <td>{{ $order->id }}</td>
    
                <td>Order No:</td>
                <td> {{ $order->order_number }}</td>
            </tr>
            <tr>
                <td>Shipping status</td>
                <td>{{ $order->shipment_status }}</td>
    
                <td> Payment status :</td>
                <td>{{ $order->payment_status }}</td>
            </tr>
            <tr>
                <td>Note:</td>
                <td>{{ $order->note }}</td>
    
                <td>Price:</td>
                <td> {{ $order->price }}</td>
            </tr>
            <tr>
                <td> Quantity :</td>
                <td> {{ $order->qty }}</td>
    
                <td>Created At:</td>
                <td> {{ $order->created_at }}</td>
            </tr>
            @endforeach

        </tbody>
    </table>


    <table class="order-details">
        <thead>
           
            <tr class="bg-blue">
                <th width="50%" colspan="4">Order Details </th>
            
            </tr>
        </thead>
        <tbody>



     

            @foreach($orderdetails as $orderdetail)
            <tr>
            @if (!is_null($orderdetail['ottoman_divan_color']))
                <td>Ottoman Divan Color :</td>
                <td>{{ $orderdetail->ottoman_divan_color ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['ottoman_divan_fabric']))
                <td>Ottoman Divan Fabric :</td>
                <td>{{ $orderdetail->ottoman_divan_fabric ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['ottoman_divan_mattress']))
                <td>Ottoman Divan Mattress :</td>
                <td>{{ $orderdetail->ottoman_divan_mattress ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['divan_size']))
                <td>Divan Size :</td>
                <td>{{ $orderdetail->divan_size ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['divan_color']))
                <td>Divan Color :</td>
                <td>{{ $orderdetail->divan_color ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['divan_headboard']))
                <td>Divan Headboard :</td>
                <td>{{ $orderdetail->divan_headboard ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['divan_fabric']))
                <td>Divan Fabric :</td>
                <td>{{ $orderdetail->divan_fabric ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['divan_storage']))
                <td>Divan Storage :</td>
                <td>{{ $orderdetail->divan_storage ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['divan_mattress']))
                <td>Divan Mattress :</td>
                <td>{{ $orderdetail->divan_mattress ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['monaco_divan_size']))
                <td>Monaco Divan Size :</td>
                <td>{{ $orderdetail->monaco_divan_size ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['monaco_divan_headboard']))
                <td>Monaco Divan Headboard :</td>
                <td>{{ $orderdetail->monaco_divan_headboard ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['monaco_divan_color']))
                <td>Monaco Divan Color :</td>
                <td>{{ $orderdetail->monaco_divan_color ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['monaco_divan_fabric']))
                <td>Monaco Divan Fabric :</td>
                <td>{{ $orderdetail->monaco_divan_fabric ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['monaco_divan_storage']))
                <td>Monaco Divan Storage :</td>
                <td>{{ $orderdetail->monaco_divan_storage ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['monaco_divan_mattress']))
                <td>Monaco Divan Mattress:</td>
                <td>{{ $orderdetail->monaco_divan_mattress ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['created_at']))
                <td>Created At :</td>
                <td>{{ $orderdetail->created_at ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['without_diamond_fabric']))
                <td>Without Diamond Fabric :</td>
                <td>{{ $orderdetail->without_diamond_fabric ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['without_diamond_storage']))
                <td>Without Diamond Storage :</td>
                <td>{{ $orderdetail->without_diamond_storage ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['without_diamond_base']))
                <td>Without Diamond Base :</td>
                <td>{{ $orderdetail->without_diamond_base ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['without_diamond_mattress']))
                <td>Ottoman Divan Fabric :</td>
                <td>{{ $orderdetail->without_diamond_mattress ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['with_diamond_size']))
                <td>With Diamond Size :</td>
                <td>{{ $orderdetail->with_diamond_size ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['with_diamond_design']))
                <td>With Diamond Design :</td>
                <td>{{ $orderdetail->with_diamond_design ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['with_diamond_color']))
                <td>With Diamond Color :</td>
                <td>{{ $orderdetail->with_diamond_color ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['with_diamond_fabric']))
                <td>With Diamond Fabric :</td>
                <td>{{ $orderdetail->with_diamond_fabric ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['with_diamond_button_diamond']))
                <td>With Diamond Button Diamond :</td>
                <td>{{ $orderdetail->with_diamond_button_diamond ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['with_diamond_storage']))
                <td>With Diamond Storage :</td>
                <td>{{ $orderdetail->with_diamond_storage ?: '-' }}</td>
            @endif
            </tr>
          
            <tr>
            @if (!is_null($orderdetail['with_diamond_base']))
                <td>With Diamond Base :</td>
                <td>{{ $orderdetail->with_diamond_base ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['with_diamond_mattress']))
                <td>With Diamond Mattress :</td>
                <td>{{ $orderdetail->with_diamond_mattress ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['ottoman_divan_size']))
                <td>Ottoman Divan Size :</td>
                <td>{{ $orderdetail->ottoman_divan_size ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['ottoman_divan_headboad']))
                <td>Ottoman Divan Headboad :</td>
                <td>{{ $orderdetail->ottoman_divan_headboad ?: '-' }}</td>
            @endif
            </tr>	
          
            <tr>
            @if (!is_null($orderdetail['customer_id']))
                <td>Customer Id :</td>
                <td>{{ $orderdetail->customer_id ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['user_id']))
                <td>User Id :</td>
                <td>{{ $orderdetail->user_id ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['order_id']))
                <td>Order Id :</td>
                <td>{{ $orderdetail->order_id ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['select_country']))
                <td>Select Country :</td>
                <td>{{ $orderdetail->select_country ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['select_product']))
                <td>Select Product :</td>
                <td>{{ $orderdetail->select_product ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['mattress_size']))
                <td>Mattress  Size :</td>
                <td>{{ $orderdetail->mattress_size ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['select_mattress']))
                <td>Select Mattress :</td>
                <td>{{ $orderdetail->select_mattress ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['ottoman_design']))
                <td>Ottoman Design :</td>
                <td>{{ $orderdetail->ottoman_design ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['ottoman_color']))
                <td>Ottoman Color :</td>
                <td>{{ $orderdetail->ottoman_color ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['ottoman_fabric']))
                <td>Ottoman Fabric :</td>
                <td>{{ $orderdetail->ottoman_fabric ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['gaslift_size']))
                <td>Gaslift Size :</td>
                <td>{{ $orderdetail->gaslift_size ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['gaslift_design']))
                <td>Gaslift Design :</td>
                <td>{{ $orderdetail->gaslift_design ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['headboard_size']))
                <td>Headboard Size :</td>
                <td>{{ $orderdetail->headboard_size ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['headboard_design']))
                <td>Headboard Design :</td>
                <td>{{ $orderdetail->headboard_design ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['headboard_color']))
                <td>Headboard Color :</td>
                <td>{{ $orderdetail->headboard_color ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['headboard_fabric']))
                <td>Headboard Fabric :</td>
                <td>{{ $orderdetail->headboard_fabric ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['without_diamond_size']))
                <td>Without Diamond Size :</td>
                <td>{{ $orderdetail->without_diamond_size ?: '-' }}</td>
            @endif

            @if (!is_null($orderdetail['without_diamond_color']))
                <td>Without Diamond Color :</td>
                <td>{{ $orderdetail->without_diamond_color ?: '-' }}</td>
            @endif
            </tr>

        </tbody>
    </table>




    <table class="order-details">
        <thead>
         
            <tr class="bg-blue">
                <th width="50%" colspan="4">Customer </th>
              
            </tr>
        </thead>
        
        <tbody>
            <tr>
            @if (!is_null($orderdetail['id']))
                <td>Customer Id :</td>
                <td>{{ $orderdetail->id ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['first_name']))
                <td>First Name :</td>
                <td>{{ $orderdetail->first_name ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['last_name']))
                <td>Last Name :</td>
                <td>{{ $orderdetail->last_name ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['email']))
                <td>Email :</td>
                <td>{{ $orderdetail->email ?: '-' }}</td>
            @endif
            </tr>
            
            <tr>
            @if (!is_null($orderdetail['address']))
                <td>Addres :</td>
                <td>{{ $orderdetail->address ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['phone_number']))
                <td>Phone No :</td>
                <td>{{ $orderdetail->phone_number ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['social_account']))
                <td>Social Account :</td>
                <td>{{ $orderdetail->social_account ?: '-' }}</td>
            @endif
    
            @if (!is_null($orderdetail['post_code']))
                <td>Post Code :</td>
                <td>{{ $orderdetail->post_code ?: '-' }}</td>
            @endif
            </tr>

            <tr>
            @if (!is_null($orderdetail['created_at']))
                <td>Created At :</td>
                <td>{{ $orderdetail->created_at ?: '-' }}</td>
            @endif 
            </tr>

            @endforeach
        </tbody>
    </table>



    <p class="text-center">
        Thank you.
    </p>

</body>
</html>

	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	
