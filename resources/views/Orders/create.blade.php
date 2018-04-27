<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/css/one-page-wonder.css">
  <link rel="stylesheet" type="text/css" href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>


<!-- Custom fonts for this template -->
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

</head>

<!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
     <div class="container">
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
           <li class="nav-item">
             <a class="nav-link" href="{{ route('home') }}">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="{{ route('guitars.index') }}">Browse</a>
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
       <h3 class="panel-title">New order</h3>
   </div>
   <div class="panel-body">
       <form action="/orders" method="post">
           <input type="hidden" name="_method" value="post">
           {{ csrf_field() }}
           
               <div class="form-group">
                   <label for="customerID">customerID</label>
                   <input type="number" name="customerID" value="{{ @$order ? $order->customerID : '' }}" class="form-control">
               </div>

               <div class="form-group">
                   <label for="orderDate">order Date</label>
                   <input type="text" name="orderDate" value="{{ @$order ? $order->orderDate : '' }}" class="form-control">
               </div>

               <div class="form-group">
                   <label for="shipAmount">Shipping amount</label>
                   <input type="number" name="shipAmount" value="{{ @$order ? $order->shipAmount : '' }}" class="form-control">
               </div>

               <div class="form-group">
                   <label for="taxAmount">Tax Amount</label>
                   <input type="number" name="taxAmount" value="{{ @$order ? $order->taxAmount : '' }}" class="form-control">
               </div>

                <div class="form-group">
                   <label for="shipDate">Shipping Date</label>
                   <input type="number" name="shipDate" value="{{ @$order ? $order->shipDate : '' }}" class="form-control">
               </div>

               <div class="form-group">
                   <label for="shipAddressID">Shipping Address ID</label>
                   <input type="number" name="shipAddressID" value="{{ @$order ? $order->shipAddressID : '' }}" class="form-control">
               </div>

               <div class="form-group">
                   <label for="cardType">card Type</label>
                   <input type="text" name="cardType" value="{{ @$order ? $order->cardType : '' }}" class="form-control">
               </div>

               <div class="form-group">
                   <label for="cardNumber">card Number</label>
                   <input type="text" name="cardNumber" value="{{ @$order ? $order->cardNumber : '' }}" class="form-control">
               </div>

               <div class="form-group">
                   <label for="cardExpires">Card Experation date</label>
                   <input type="number" name="cardExpires" value="{{ @$order ? $order->cardExpires : '' }}" class="form-control">
               </div>

               <div class="form-group">
                   <label for="billingAddressID">Billing Address ID</label>
                   <input type="number" name="billingAddressID" value="{{ @$order ? $order->billingAddressID : '' }}" class="form-control">
               </div>

           <button class="btn btn-primary pull-right">Save new order!</button>
       </form>

   </div>
</div>
</html>