<?php
include "Process.php";

$name = $_GET['name'];
$sql = "DELETE FROM DB WHERE NAME= '$name'";
$result = mysqli_query($mysqli,$sql);
if($result)
{
	echo "<script>RECORD DELETED FROM DB</script>";
?>
	<meta http-equiv="refresh" content="-1" URL=http://localhost/AssessmentAssignmentSheraspaceLtd/CV_List.php">
<?php

}

?>