<!DOCTYPE HTML>
<html>
<head>
<title>Registration</title>
</head>
<body style="background-color:blue;">
<?php

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','library');



// get the post records
	$Name = $_POST['Name'];
    $ID = $_POST['ID'];
    $Dept = $_POST['Dept'];
    $Batch = $_POST['Batch'];
	$Email = $_POST['Email'];
	$Password = $_POST['password'];
	$Phone = $_POST['phone'];
	$Gender = $_POST['Gender'];
	$Address = $_POST['Address'];
	//Checking the datas if input is empty 
	if(empty($Name) || empty($ID) || empty($Password) )
    {
        header("Location: User_registration.php?error=Fill up the form");

        exit();
    }
    else{
// database insert SQL code
//declare the query
$sql = "INSERT INTO `registration` (`S_ID`,`S_Name`,`S_Dept`,`Batch`,`Email`,`Password`,`Phone`,`Address`,`Gender`) VALUES('$ID', '$Name', '$Dept', '$Batch', '$Email','$Password','$Phone','$Address','$Gender')";
	}
// insert in database 
//run the query
$rs = mysqli_query($con, $sql);

if($rs)
{
	/*echo "Signing up successfull.\n";
	echo "Thank you ".$firstname." ".$lastname;
	echo "<br>";
	echo "Now you can log in to your account.";
	echo "<br>";*/
	header("location: User_registration.php?error=Registration completed");
}
else
{
	header("location: User_registration.php?error=ID already exist");
}

?>

</body>
</html>