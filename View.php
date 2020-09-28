<?php
include 'Process.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
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
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- main -->
					<div class="card text-white bg-dark m-5" style="max-width: 100rem;">
					 	<div class="card-header text-center ">Curriculum Vitae</div>
						<div class="card-body">
							<h5 class="card-title"></h5>					
							<?php
								$name = $_GET['name'];
								$sql = "SELECT * FROM DB WHERE NAME = '$name'";
								$result = mysqli_query($mysqli,$sql);
								$resultCheck = mysqli_num_rows($result);
								if($resultCheck > 0){	
									while($row = mysqli_fetch_assoc($result)){
										echo "<p>"."Name:&nbsp;".$row["NAME"]."</p>".
										"<p>"."Father Name:&nbsp;".$row["FNAME"]."</p>".
										"<p>"."gender:&nbsp;".$row["GENDER"]."</p>".
										"<p>"."Phone:&nbsp;".$row["PHONE"]."</p>".
										"<p>"."Email:&nbsp;".$row["EMAIL"]."</p>".
										"<p>"."Address:&nbsp;".$row["ADDRESS"]."</p>".
										"<p>"."District:&nbsp;".$row["DISTRICT"]."</p>".
										"<p>"."Date of birth:&nbsp;".$row["DOB"]."</p>".
										"<p>"."Institute:&nbsp;".$row["INSTITUTE"]."</p>".
										"<p>"."Subject:&nbsp;".$row["SUBJECT"]."</p>".
										"<p>"."Passing year:&nbsp;".$row["PASSING_YEAR"]."</p>";

									}
								}
							
							?>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>