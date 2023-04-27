<!DOCTYPE html>
<html>
<head>
	<title>Two Sidebars</title>
    <meta name="csrf-token"  id="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		.side-bar {
			height: 100vh;
		}
	</style>
    <link rel="stylesheet" href="{{asset("assets/css/product.css")}}">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3 side-bar">
				<h3>Search</h3>
				<div class="input-group">
      				<input type="text" class="form-control" placeholder="Search...">
      				<div class="input-group-btn">
        				<button class="btn btn-default" type="submit">
          					<i class="glyphicon glyphicon-search"></i>
        				</button>
      				</div>
    			</div>
    			<br>
    			<h3>Brands</h3>
    			<div class="checkbox">
    				<label><input type="checkbox" value="">Brand1</label>
    			</div>
    			<div class="checkbox">
    				<label><input type="checkbox" value="">Brand2</label>
    			</div>
    			<div class="checkbox">
    				<label><input type="checkbox" value="">Brand3</label>
    			</div>
    			<br>
    			<h3>Categories</h3>
                <div class="checkbox">
    				<label><input type="checkbox" value="">Brand1</label>
    			</div>
    			<div class="checkbox">
    				<label><input type="checkbox" value="">Brand2</label>
    			</div>
    			<div class="checkbox">
    				<label><input type="checkbox" value="">Brand3</label>
    			</div>
			</div>
		
		</div>
	</div>

    <div class="content">
        <div class="row forloop">
            
            


        </div>

        <div class="paginationlink">
            <nav aria-label="Page navigation example">
                <ul class="pagination  justify-content-center">
                
                </ul>
            </nav>
        </div>
    </div>

  

    <script src="{{asset("assets/js/jquery/jquery.js")}}"></script>
    <script src="{{asset('assets/js/products/product.js')}}"></script>
</body>
</html>