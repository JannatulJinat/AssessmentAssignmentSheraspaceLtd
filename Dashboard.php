<?php
include "Process.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div>
	<div class="row mt-3">
		<?php
			include "Sidebar.php";
		?>			
		<div class="col-lg-9">
			<div class="row">
				<div class="col-12 mt-2">
					<!-- header -->
					<h1 class="display-5 text-center">Dashboard</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- main -->
					<canvas id="chart" aria-label="chart" role="img" ></canvas>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/chart.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>