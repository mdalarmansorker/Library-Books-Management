<?php
    $con=mysqli_connect('localhost','root','','library');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
    session_start();
       if(empty($_POST['Uname']) && empty($_POST['password']))
       {
           header("location:Home.php?Error=Please Fill in the Blanks");
       }
       else if(empty($_POST['Uname']))
       {
            header("location:Home.php?Error=Please inter Username");
       }
       else if(empty($_POST['password']))
       {
           header("location:Home.php?Error=Please inter password");
       }
       else
       {
            $query="select * from `admin` where `Email`='".$_POST['Uname']."' and Password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);

            if($data = mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$data['Name'];
                $_SESSION['Email']=$data['Email'];
                header("location:libraryhome.php");
            }
            else
            {
                header("location:home.php?Error=Please Enter Correct User Name and Password ");
            }
        }
 
?>