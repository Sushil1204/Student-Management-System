<html>

<body>

<?php include("connection.php");


$a = $_POST['SID'];
$b = $_POST['Fname'];
$c = $_POST['Lname'];
$d = $_POST['bday'];
$e = $_POST['Mo_num'];
$f = $_POST['Gender'];
$g = $_POST['Address'];
$h = $_POST['std'];
$i = $_POST['Roll_no'];



$sql = "INSERT INTO student (SID, Firstname, Lastname, Date_of_Birth, Mobile_number, Gender, Address, Class, 
Roll_No) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";


if ($conn->query($sql) === TRUE) 

{

    header("location:home.php");

} 

else 

{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

</body>

</html>