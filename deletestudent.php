<?php
include 'connection.php';
$sid = $_GET['sid'];
$Q = "DELETE FROM student WHERE SID = '$sid'";
$data = mysqli_query($conn,$Q);
if($data)
{
	echo "<script>alert('Record Deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Registration/index.php">
	<?php
}
else 
{
		echo "Sorry, Delete Process Failed";
}	

?>