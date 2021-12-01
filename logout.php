<?php 
    session_start();
    if(isset($_GET['logout']))
    {
        session_destroy();
        header("location:Login.php");
        $_SESSION['User'] = '';
        $_SESSION['Pass'] = '';
    }

?>