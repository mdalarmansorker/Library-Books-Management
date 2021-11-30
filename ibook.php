<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','library');



// get the post records
	$dept = $_POST['dept'];
	$date = $_POST['date'];
	$bname = $_POST['bname'];
    $wname = $_POST['wname'];
    $amount = $_POST['amount'];
    $edition = $_POST['edition'];
    $price = $_POST['price'];
	if(empty($date) || empty($dept) || empty($price) || empty($bname) || empty($wname) || empty($edition) ||empty($amount))
    {
        header("Location: Insert_Books.php?error=Fill up the form");

        exit();
    }
    else{
        $sql = "SELECT * FROM `books` WHERE `dept` = '$dept' AND `Bname` = '$bname' AND `Wname` = '$wname' AND `Edition` = '$edition'";
// database insert SQL code
// $sql = "INSERT INTO `cost` (`Cdate`,`Reason`,`Price`) VALUES('$date', '$reason', '$price')";
	
// insert in database 
$rs = mysqli_query($con, $sql);

if($data = mysqli_fetch_array($rs))
{
    $sql3 = "UPDATE `books` SET `Amount`=`Amount`+'$amount', `Price` = '$price', `Bdate` = '$date' WHERE `dept` = '$dept' AND `Bname` = '$bname' AND `Wname` = '$wname' AND `Edition` = '$edition'";
	mysqli_query($con, $sql3);
    header("location: Insert_Books.php?error=Book's Information Updated Successfully");
}
else
{
    $sql2 = "INSERT INTO `Books` (`Dept`,`Bdate`,`Bname`,`Wname`,`Amount`,`Edition`,`Price`) VALUES('$dept','$date','$bname','$wname','$amount','$edition','$price')";
    $result = mysqli_query($con,$sql2);
    if($result)
    {
        header("location: Insert_Books.php?error=Book Inserted successfully");
    }
    else
    {
        header("location: Insert_Books.php?error=Something wrong, Please try again. $sql2");
    }
	
}
}

?>
