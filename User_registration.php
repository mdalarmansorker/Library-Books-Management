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
  .button1 {
    background-color: black;
    padding: 16px 16px;
    }
.button2{
    background-color:#45a049;
  color: white;
  padding: 10.5px 50px;
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
  color: white;
  padding: 12px 50px;
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
<body style="background-color: skyblue;">

<h1 style="background-color: #4CAF50;" ><center>Sign Up</center></h1>

<div class="container">
  <form action="User_registration_back.php" method="post">
  <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
  <div class="row">
    <div class="col-25">
      <label>Name*</label>
    </div>
    <div class="col-75">
      <input type="text" name="Name" placeholder="Your name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Student ID*</label>
    </div>
    <div class="col-75">
      <input type="text" name="ID" placeholder="Your student ID No">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Department*</label>
    </div>
    <div class="col-75">
    <select name="Dept">
        		<option value="CSE">CSE</option>
                <option value="EEE">EEE</option>
                <option value="ME">ME</option>
                <option value="IPE">IPE</option>
                <option value="CIVIL">CIVIL</option>
                <option value="ICT">ICT</option>
                <option value="ENGLISH">ENGLISH</option>
                <option value="BBA">BBA</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Batch*</label>
    </div>
    <div class="col-75">
    <input type="text" name="Batch" placeholder="10">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Email</label>
    </div>
    <div class="col-75">
      <input type="text" name="Email" placeholder="example@mail.com">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Password</label>
    </div>
    <div class="col-75">
      <input type="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Phone</label>
    </div>
    <div class="col-75">
      <input type="text" name="phone" placeholder="+880123456789">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Gender</label>
    </div>
    <div class="col-75">
      <select name="Gender">
        		<option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Address</label>
    </div>
    <div class="col-75">
    <input type="text" name="Address" placeholder="Example: Saidpur,Nilphamari">
    </div>
  </div>
  
  <br>
  <div class="row">
    <div class="col-25">
        <a href="userlogin.php" class="button2">Sign In</a>
    </div> 
    <div class="col-75">
        <input type="submit" value="Confirm" align="center">
    </div>
  
  </div>
  </form>
</div>
</body>
</html>


