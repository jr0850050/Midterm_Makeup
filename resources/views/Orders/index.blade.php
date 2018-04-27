<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/css/one-page-wonder.css">
  <link rel="stylesheet" type="text/css" href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>

</head>

 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <h1>View all orders</h1>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('guitars.index') }}">Browse items</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('orders.index') }}">Browse orders</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <br></br>
  <br></br>
  <br></br>

      <div class="panel">
        <div class="panel-heading">
            <a href="/orders/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i></a>
            <h3 class="panel-title">View all orders</h3>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>orderID</th>
                    <th>customerID</th>
                    <th>orderDate</th>
                    <th>shipAmount</th>
                    <th>taxAmount</th>
                    <th>shipDate</th>
                    <th>shipAddressID</th>
                    <th>cardType</th>
                    <th>cardNumber</th>
                    <th>cardExpires</th>
                    <th>billingAddressID</td>
                    <th style="width: 1px; white-space: nowrap;">
                        <i class="fa fa-cog"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->orderID }}</td>
                        <td>{{ $order->customerID }}</td>
                        <td>{{ $order->shipAmount }}</td>
                        <td>{{ $order->taxAmount }}</td>
                        <td>{{ $order->shipDate }}</td>
                        <td>{{ $order->shipAddressID }}</td>
                        <td>{{ $order->cardType }}</td>
                        <td>{{ $order->cardNumber }}</td>
                        <td>{{ $order->cardExpires }}</td>
                        <td>{{ $order->billingAddressID }}</td>
                        <td>
                            <a href="/Orders/{{ $order->orderID }}/edit" class="btn btn-xs btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</html>