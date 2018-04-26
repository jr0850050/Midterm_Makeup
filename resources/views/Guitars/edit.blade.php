<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V05</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap core CSS -->
<link rel="stylesheet" type="text/css" href="/vendor/bootstrap/css/bootstrap.css">

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
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('guitars.index') }}">Browse</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">Edit item</h3>
    </div>
    <div class="panel-body">
        <form action="" method="post">
            <input type="hidden" name="_method" value="PATCH">
            {{ csrf_field() }}
            
                <div class="form-group">
                    <label for="CategoryID">CategoryID</label>
                    <input type="text" name="CategoryID" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="productCode">Product Code</label>
                    <input type="text" name="productCode" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="textr" name="productName" value="" class="form-control">
                </div>

                <div class="form-group">
                    <label for="listPrice">List Price</label>
                    <input type="number" name="listPrice" value="" class="form-control">
                </div>

            <button class="btn btn-primary pull-right">Save item</button>
        </form>

    
    </div>
</div>
</html>