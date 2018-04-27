<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="/css/one-page-wonder.css">
  <link rel="stylesheet" type="text/css" href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css'>

</head>

<style>
    body {
    font-family: "Helvetica Neue", Helvetica, Arial;
    font-size: 14px;
    line-height: 20px;
    font-weight: 400;
    color: #3b3b3b;
    -webkit-font-smoothing: antialiased;
    font-smoothing: antialiased;
    background: #2b2b2b;
    }
    @media screen and (max-width: 580px) {
    body {
        font-size: 16px;
        line-height: 22px;
    }
    }

    .wrapper {
    margin: 0 auto;
    padding: 40px;
    max-width: 800px;
    }

    .table {
    margin: 0 0 40px 0;
    width: 100%;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
    display: table;
    }
    @media screen and (max-width: 580px) {
    .table {
        display: block;
    }
    }

    .row {
    display: table-row;
    background: #f6f6f6;
    }
    .row:nth-of-type(odd) {
    background: #e9e9e9;
    }
    .row.header {
    font-weight: 900;
    color: #ffffff;
    background: #ea6153;
    }
    .row.green {
    background: #27ae60;
    }
    .row.blue {
    background: #2980b9;
    }
    @media screen and (max-width: 580px) {
    .row {
        padding: 14px 0 7px;
        display: block;
    }
    .row.header {
        padding: 0;
        height: 6px;
    }
    .row.header .cell {
        display: none;
    }
    .row .cell {
        margin-bottom: 10px;
    }
    .row .cell:before {
        margin-bottom: 3px;
        content: attr(data-title);
        min-width: 98px;
        font-size: 10px;
        line-height: 10px;
        font-weight: bold;
        text-transform: uppercase;
        color: #969696;
        display: block;
    }
    }

    .cell {
    padding: 6px 12px;
    display: table-cell;
    }
    @media screen and (max-width: 580px) {
    .cell {
        padding: 2px 16px;
        display: block;
    }
    }
</style>

 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <h1>Ready to rock out?</h1>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('guitars.index') }}">Browse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <br></br>
  <br></br>
  <br></br>

      <div class="row header green">
        <div class="panel-heading">
            <a href="/guitars/create" class="btn btn-xs btn-success pull-right"><i class="fa fa-plus"></i></a>
            <h3 class="panel-title">Browse all products</h3>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>productID</th>
                    <th>CategoryID</th>
                    <th>productCode</th>
                    <th>productName</th>
                    <th>listPrice</th>
                    <!-- <th style="width: 1px; white-space: nowrap;">
                        <i class="fa fa-cog"></i>
                    </th> -->
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->productID }}</td>
                        <td>{{ $product->categoryID }}</td>
                        <td>{{ $product->productCode }}</td>
                        <td>{{ $product->productName }}</td>
                        <td>{{ $product->listPrice }}</td>
                        <td>
                            <a href="/Guitars/{{ $product->productID }}/edit" class="btn btn-xs btn-info">
                                <i class="fa fa-edit"></i>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</html>