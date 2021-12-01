<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>Library Book Management</TITLE>
    </HEAD>
    <style>
        .button {
background-color: rgb(2, 109, 112);
border: none;
border-radius: 10px;
color: rgb(255, 255, 255);
padding: 10x 100px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 30px;
margin: 4px 4px;
cursor: pointer;
}
    </style>
       <body style="font-family: 'Times New Roman', Times, serif; border-radius: 1ch; color:rgb(203, 203, 212); background-image: url('photo-1536411396596-afed9fa3c1b2.jpg'); background-size: cover; background-repeat: no-repeat;">
        <h1 style="text-align: center; background-color: green;"><a href="libraryhome.php" class="button">Library Book Management</a></h1>
        <table border="1" style="color:black;background-color:white;" align="center">
  <tr>
    <td>ID</td>
    <td>Department</td>
    <td>Book's Name</td>
    <td>Writer's Name</td>
    <td>Amount</td>
    <td>Edition</td>
    <td>Price</td>
  </tr>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','library');



// get the post records
	$dept = $_POST['dept'];
	$bname = $_POST['bname'];
    $wname = $_POST['wname'];
    
	if(empty($bname) && empty($wname) )
    {
        $sql = "SELECT * FROM `books` WHERE `Dept` = '$dept'";
    }
    else if(empty($wname))
    {
        $sql = "SELECT * FROM `books` WHERE `Dept` = '$dept' AND `Bname`='$bname'";
    }
    else if(empty($bname))
    {
        $sql = "SELECT * FROM `books` WHERE `Dept` = '$dept' AND `Wname`='$Wname'";
    }
    else{
        $sql = "SELECT * FROM `books` WHERE `Dept` = '$dept' AND `Bname`='$bname' AND `Wname`='$wname'";
    }
// database insert SQL code
// $sql = "INSERT INTO `cost` (`Cdate`,`Reason`,`Price`) VALUES('$date', '$reason', '$price')";
	
// insert in database 
$rs = mysqli_query($con, $sql);
 
while($data = mysqli_fetch_array($rs))
{
    ?>
    <tr>
    <td><?php echo $data['ID'];?></td>
    <td><?php echo $data['Dept'];?></td>
    <td><?php echo $data['Bname'];?></td>
    <td><?php echo $data['Wname'];?></td>
    <td><?php echo $data['Amount'];?></td>
    <td><?php echo $data['Edition'];?></td>
    <td><?php echo $data['Price'];?></td>
  </tr>	
  <?php
}
?>
</table>
<?php mysqli_close($con); // Close connection ?>
</body>
</html>
