<?php
	include 'Process.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create CV</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<div >
	<div class="row mt-3">
		<?php
			include "Sidebar.php";
		?>			
		<div class="col-lg-9">
			<div class="row">
				<div class="col-12 mt-2">
					<!-- header -->
					<h1 class="display-5 text-center">Create CV</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- main -->
					<form class="border p-5" action="process.php" method = "POST" >
						<div class="form-row ">
							<div class="col-6">
								<label for = "name">Name</label>
								<input type="text" name="name" class="form-control" placeholder="Name" required>
							</div>
							<div class="col-6">
								<label>Father Name</label>
								<input type="text" name="father_name" class="form-control" placeholder="Father Name"required>
							</div>
						</div>

						<div class="form-row mt-3">
							<div class="col-6">
								<label>Date of Birth</label>
								<input type="Date" name="date_of_birth" class="form-control" placeholder="yyyy-mm-dd"required>
							</div>
							<div class="col-6">
								<label>Gender</label>
								<select name="gender" class="form-control" required>
									<option>Male</option>
									<option>Female</option>
								</select>
							</div>
						</div>

						<div class="form-row mt-3">
							<div class="col-6">
								<label>Phone</label>
								<input type="tel" name="phone" class="form-control" placeholder="+88 01 XXX XXX XXX" pattern="^(?:\+?88)?01[13-9]\d{8}$" required>
							</div>
							<div class="col-6">
								<label>Email</label>
								<input type="Email" name="email" class="form-control" placeholder="example@gmail.com" required>

							</div>
						</div>

						<div class="form-row mt-3">
							<div class="col-6">
								<label>Address</label>
								<input type="text" name="address" class="form-control" placeholder="Address"required>

							</div>
							<div class="col-6">
								<label>District</label>
								<select name="district" class="form-control"required >
									<option>Dhaka</option>
									<option>Feni</option>
									<option>Chadpur</option>
									<option>Bogura</option>
								</select>
							</div>
						</div>

						<div class="form-row mt-3">
							<div class="col-6">
								<label>Institute</label>
								<input type="text" name="institute" class="form-control" placeholder="Institute"required>
							</div>
							<div class="col-6">
								<label>Subject</label>
								<input type="text" name="subject" class="form-control" placeholder="Subject"required>
							</div>
						</div>

						<div class="form-row mt-3">
							<div class="col-6">
								<label>Passing Year</label>
								<input type="number" name="passing_year" class="form-control" placeholder="yyyy" min="2000" max="2020"required>
							</div>
						</div>
						<button type="submit" name=save class="btn btn-primary mt-3">Submit</button>
					</form>
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