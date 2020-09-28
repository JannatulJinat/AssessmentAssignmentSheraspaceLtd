<?php

$mysqli = new mysqli('localhost','root','','crud')or die(mysqli_error($mysqli));

//TO INSERT DATA
if(isset($_POST['save']))
{
	$name = $_POST['name'];
	$father_name = $_POST['father_name'];
	$date_of_birth = $_POST['date_of_birth'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$district = $_POST['district'];
	$institute = $_POST['institute'];
	$subject = $_POST['subject'];
	$passing_year = $_POST['passing_year'];


	$mysqli->query("INSERT INTO db(NAME,FNAME,DOB,GENDER,PHONE,EMAIL,ADDRESS,DISTRICT,INSTITUTE,SUBJECT,PASSING_YEAR) VALUES('$name','$father_name','$date_of_birth','$gender','$phone','$email','$address','$district','$institute','$subject','$passing_year')")or die($mysqli->error);
}

?>