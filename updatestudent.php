<!DOCTYPE html>
<html>
<head>
<title>UPDATE Student</title>
<link rel="stylesheet" type="text/css" href="add.css">
</head>
<body>
<?php include 'connection.php';
$q = "select * from student WHERE SID=".$_GET['sid'];
$query= mysqli_query($conn,$q);
$row = $query->fetch_assoc();
?>
<h3>UPDATE STUDENT FORM</h3>
<form method="POST" action="">
<table align="center" cellpadding = "10">
<tr>
<td>STUDENT ID</td>
<td><input type="text" name="sid" maxlength="20" />
</td>
</tr>	
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="fname" maxlength="30" value="<?php echo $row['Firstname']; ?>" required/>
</td>
</tr> 
<tr>
<td>LAST NAME</td>
<td><input type="text" name="lname" maxlength="30" value="<?php echo $row['Lastname']; ?>" required/>
</td>
</tr>
<tr>
<td>DATE OF BIRTH</td>
<td>
<input type="date" name="bday" value="<?php echo $row['Date_of_Birth']; ?>" required>
</td>
</tr>
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="number" maxlength="10" value="<?php echo $row['Mobile_number']; ?>" required/>
</td>
</tr>
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="M" <?php echo ($row['Gender']=='M'?"checked":"")  ?>/>
Female <input type="radio" name="Gender" value="F"<?php echo ($row['Gender']=='F'?"checked":"")  ?>/>
</td>
</tr>
<tr>
<td>ADDRESS <br /><br /><br /></td>
<td><textarea name="Address" rows="4" cols="30" required ><?php echo $row['Address']; ?></textarea></td>
</tr>
<tr>
<td>CLASS</td>
<td><input type="text" name="Class" maxlength="10" value="<?php echo $row['Class']; ?>" required/>
</td>
</tr>
<tr>
<td>ROLL NO</td>
<td><input type="text" name="rollno" maxlength="10" value="<?php echo $row['Roll_No']; ?>" required/>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Update" name="update">
</td>
</tr>
</table>
</form> 
</body>
</html>
<?php
if (isset($_POST['update'])) 
{
	$a = $_POST['sid'];
	$b = $_POST['fname'];
	$c = $_POST['lname'];
	$d = $_POST['bday'];
	$e = $_POST['number'];
	$f = $_POST['Gender'];
	$g = $_POST['Address'];
	$h = $_POST['Class'];
	$i = $_POST['rollno'];
	$q = "UPDATE student SET  Roll_No='$i', Firstname='$b',Lastname='$c',Date_of_Birth='$d',Mobile_number='$e',Gender='$f',Address='$g',Class='$h' WHERE SID=".$_GET['sid'];
	echo $q;
	$query= mysqli_query($conn,$q);

	if ($query==true) 
	{
		echo '<script type="text/javascript"> alert("Data Updated")</script>';
		header("location:home.php");
	}
	else 
	{
		echo '<script type="text/javascript"> alert("Data Not Updated")</script>';
	}
}
?>