
<!DOCTYPE html>
<html>
<head>
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
    .button3{
      border-radius: 10px;
      background-color: black;
      color: white;
      padding: 16px 50px;
      font-size: 20px;
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
input[type=email]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=tel]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
  background-color: white;
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
  background-color: black/*#f2f2f1*/;
  color: white;
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
<body style="background-image: url('library-books-laptop-table-wallpaper.jpg'); background-size: cover; background-repeat: no-repeat;">
<h1 style="background-color:green"><center><img src="InstituteLogoColorFull.png" height="50px" weight="50px"><center></h1>
    <h1 style="text-align: center; background-color: green;">Library Book Management</h1>
<h1 style="background-color: rgb(0, 0, 0);color:white;" ><center>Sign Up</center></h1>
<a href="libraryhome.php" class="button3">Home</a>

<center>
<?php
    session_start();
// Check the session is empty or not, if empty go to log in page else in this page
    if(isset($_SESSION['User']) && isset($_SESSION['Email']))
    {
        echo $_SESSION['User'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
    }
    else
    {
        header("location:Home.php");
    }

?>
</center>

<table align="right"><tr><th>
<div class="container">
  <form action="Signupdata.php" method="post">
    <!-- to print a message receive from backend page -->
  <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
  <?php } ?>
  <div class="row">
    <div class="col-25">
      <label>Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="Name" required placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Email</label>
    </div>
    <div class="col-75">
      <input type="email" name="Email" required placeholder="example@mail.com">
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
    <div class="col-25">
      <label>Designation</label>
    </div>
    <div class="col-75">
      <input type="text" required name="Designation" placeholder="Designation">
    </div>
  </div>
 
  </div>
  
  <br>
  <div class="row">
    
  <input type="submit" value="Sign Up" align="center" style="color: black;font-weight:bold;font-size:20px;font-family:Time New Roman;">
    </div>
  
  </div>
  </form>
</div>
</th></tr>
</table>
</body>
</html>


