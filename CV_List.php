<?php
	include "Process.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>CV List</title>
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
					<h1 class="display-5 text-center">CV List</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="container  table-responsive">   
						<!-- main -->
						<?php
							$sql = "SELECT NAME FROM DB;";
							$result = $mysqli->query($sql);
							$resultCheck = mysqli_num_rows($result);
							if($resultCheck > 0){
						?>
						<table class="table table-hover">
					  		<thead class="thead-dark">
					    		<tr>
					      			<th scope="col">Name</th>
					      			<th scope="col"></th>

					    		</tr>
					  		</thead>
					  		<tbody>
						<?php	
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr><td>".$row['NAME']."</td><td><center><a href='View.php?name=$row[NAME]'><input type='submit' value='View' id='viewbtn'>&nbsp;<a href='Delete.php?name=$row[NAME]'><input type='submit' value='Delete' id='deletebtn'></td></center></tr>";
							}
						?>
								
							</tbody>
						</table>
						<?php
							}
							else{
								echo "<h3><center>"."No Records"."</center></h3>";
							}
						?>
					
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
