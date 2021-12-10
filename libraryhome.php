<!DOCTYPE HTML>
<HTML>
    <HEAD>
        <TITLE>Home</TITLE>
    </HEAD>
    <style>
        .button {
    background-color: rgb(2, 109, 112);
    border: none;
    border-radius: 10px;
    color: rgb(255, 255, 255);
    padding: 50px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    margin: 4px 4px;
    cursor: pointer;
  }
@media screen and (max-width: 600px) {
  .button {
    width: 100%;
    margin-top: 0;
  }
}
    </style>
       <body style="font-family: 'Times New Roman', Times, serif; border-radius: 1ch; color:rgb(203, 203, 212); background-image: url('photo-1536411396596-afed9fa3c1b2.jpg'); background-size: cover; background-repeat: no-repeat;">
       <h1 style="background-color:green"><center><img src="InstituteLogoColorFull.png" height="50px" weight="50px"><center></h1>
    <h1 style="text-align: center; background-color: green;">Library Book Management</h1>        <center>
    <?php
    session_start();

    if(isset($_SESSION['User']))
    {
        echo ' Well Come ' . $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:home.php");
    }

?></center>
<div align="right">
<a href="Sign_up.php" class="button">New Admin</a><a href="Admindetails.php" class="button">Admin List</a><br>
<a href="Insert_Books.php" class="button">Insert Books</a><a href="Search_Books.html" class="button">Search Books</a>

</div>
<br><br><br>


       </body>
</HTML>