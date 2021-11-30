<?php
    $con=mysqli_connect('localhost','root','','library');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
    session_start();
    $query1="select * from admin where Username='".$_SESSION['User']."' and Password='".$_SESSION['Pass']."'";
    $result1=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result1))
            {
                // $_SESSION['User']=$_POST['Uname'];
                // $_SESSION['Pass']=$_POST['password'];
                header("location:Library.php");
            }
       if(empty($_POST['Uname']) && empty($_POST['password']))
       {
           header("location:Login.php?Error=Please Fill in the Blanks");
       }
       else if(empty($_POST['Uname']))
       {
            header("location:Login.php?Error=Please inter Username");
       }
       else if(empty($_POST['password']))
       {
           header("location:Login.php?Error=Please inter password");
       }
       else
       {
            $query="select * from admin where Username='".$_POST['Uname']."' and Password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['Uname'];
                $_SESSION['Pass']=$_POST['password'];
                header("location:libraryhome.php");
            }
            else
            {
                header("location:Login.php?Error=Please Enter Correct User Name and Password ");
            }
        }
 
?>