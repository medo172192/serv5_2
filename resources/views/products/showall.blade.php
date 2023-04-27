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
				<form id='globalSearch'>
							
						<h3>Search</h3>
						<div class="input-group">
							<input type="search" name='search' class="form-control searchInput" placeholder="Search...">
							<div class="input-group-btn">
								<button class="btn btn-default" type="button">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</div>
						</div>
						<br>
						<h3>Brands</h3>
						<div class="checkbox">
							<label><input type="checkbox"  class="bra1" value="brand-1"   name="b1">Brand1</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" class="bra2" value="brand-2"   name="b2">Brand2</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox"  class="bra3" value="brand-3"   name="b3">Brand3</label>
						</div>
						<br>
						<h3>Categories</h3>
						<div class="checkbox">
							<label><input type="checkbox" class="cate1" value="category-1" name="cate1">category1</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox"class="cate2" value="category-2" name="cate2">category2</label>
						</div>
						<div class="checkbox">
							<label><input type="checkbox" class="cate3" value="category-3"  name='cate3'>category3</label>
						</div>
				</form>
			</div>
		
		</div>
	</div>

    <div class="content">
		<div class="charts">
			<div class='checkbox'>
				<canvas id="myChart"></canvas>
			</div>
			<div class='checkbox'>
				<canvas id="myChartBar"></canvas>
			</div>
			
			
		</div>
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
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 
    <script src="{{asset('assets/js/products/product.js')}}"></script>
</body>
</html>