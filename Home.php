<?php
session_start();
if(!empty($_SESSION['User']))
{
  header("location:libraryhome.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <head><title>Library Book Management - Admin Log in</title>
    <style>
* {
  box-sizing: border-box;
}
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
  .button {
    border: 4px solid #4CAF50; /* Green */
    }
  .button1 {
    background-color: black;
    padding: 16px 16px;
    }
.button2{
    background-color:#45a049;
  color: white;
  padding: 10.5px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
  background-color: #4CAF50;
  width: 100%;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f1;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-50{
    float: left;
    width: 50%;
    margin-top: 6px;
}
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
    <body style="font-family: 'Times New Roman', Times, serif; border-radius: 1ch; color:rgb(203, 203, 212); background-image: url('photo-1536411396596-afed9fa3c1b2.jpg'); background-size: cover; background-repeat: no-repeat;">
    <h1 style="background-color:green"><center><img src="InstituteLogoColorFull.png" height="50px" weight="50px"><center></h1>
    <h1 style="text-align: center; background-color: green;">Library Book Management</h1>
    <br><br>
    <table align="center"><tr><th>
<div class="container" align="left">
    <h1 style="background-color: #4CAF50;"><center><marquee behaviour="scroll">Library System</marquee></center></h1>
    <form action="loginback.php" method="post">
            <?php if (isset($_GET['Error'])) { ?>
                <p class="error"><?php echo $_GET['Error']; ?></p>
            <?php } ?>
            <div class="row">
    <div class="col-25">
      <label>Email</label>
    </div>
    <div class="col-75">
      <input type="text" required name="Uname" placeholder="User ID">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Password</label>
    </div>
    <div class="col-75">
      <input type="password" required name="password" placeholder="Password">
    </div>
  </div>
    <div class="row">
        <input type="submit" value="Sign In" align="center">
  </div> 
    </form></th></tr></table>
    <br>
    <pre>
    </pre>
</body>
</html>