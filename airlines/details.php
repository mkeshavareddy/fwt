<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','db_connect');

// get the post records
$txtfrom=$_POST['city'];
$txtto=$_POST['city'];
$txtfirstname=$_POST['firstname'];
$txtmiddlename=$_POST['middlename'];
$txtlastname=$_POST['lastname'];
$intmobile=$_POST['Mobile_Number'];
$intaadhar=$_POST['Aadhar'];
$intadult=$_POST['adult'];
$intchild=$_POST['child'];
$intinfant=$_POST['infant'];
$txtclass=$_POST['economy'];

// database insert SQL code
$sql = "INSERT INTO `trip` (`from`, `to`, `firstname`, `middlename`, `lastname`, `mobile`, `aadhar`, `adult`, `child`, `infant`, `class`)
 VALUES ('$txtfrom', '$txtto', '$txtfirstname', '$txtmiddlename','$txtlastname','$intmobile','$intaadhar','$intadult','$intchild ','$intinfant ','$txtclass')";
// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>