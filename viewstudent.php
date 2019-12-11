<!DOCTYPE html>
<html>
<head>
<title>View Student</title>
<link rel="stylesheet" type="text/css" href="view.css">
</head>
<body>
<?php include 'connection.php';
$q = "select * from student WHERE SID=".$_GET['sid'];
$query= mysqli_query($conn,$q);
$row = $query->fetch_assoc();
?>
<h3>View Student</h3>
<form method="POST" action="">
<table align="center" cellpadding = "10">
<tr>
<td>STUDENT ID</td>
<td>
	<?php echo $row['SID']; ?>
</td>
</tr>	
<tr>
<td>FIRST NAME</td>
<td><?php echo $row['Firstname']; ?>
</td>
</tr> 
<tr>
<td>LAST NAME</td>
<td><?php echo $row['Lastname']; ?>
</td>
</tr>
<tr>
<td>DATE OF BIRTH</td>
<td>
<?php echo $row['Date_of_Birth']; ?>
</td>
</tr>
<tr>
<td>MOBILE NUMBER</td>
<td>
<?php echo $row['Mobile_number']; ?>
</td>
</tr>
<tr>
<td>GENDER</td>
<td>
<?php echo ($row['Gender']=='M'?"Male":"");  ?>
<?php echo ($row['Gender']=='F'?"Female":""); ?>
</td>
</tr>
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><?php echo $row['Address']; ?></td>
</tr>
<tr>
<td>CLASS</td>
<td><?php echo $row['Class']; ?>
</td>
</tr>
<tr>
<td>ROLL NO</td>
<td><?php echo $row['Roll_No']; ?>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Print" name="Print">
</td>
</tr>
</table>
</form> 
</body>
</html>
