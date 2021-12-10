
<!DOCTYPE html>
<html>
<head>
    <title>Inserting Books</title>
<style>
* {
  box-sizing: border-box;
}
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
  background-color: #f0f0e0;
  width: 50%;
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
<h1 style="background-color: #4CAF50;" ><center>Insert Books</center></h1>
<a href="libraryhome.php">Back</a>
<!-- <table><tr><th> -->
    <center>
<div class="container" align="left">
  <form action="ibook.php" method="post">
<?php if (isset($_GET['error'])) { ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
            <div class="row">
                <div class="col-25">
                  <label>Department's Name</label>
                </div>
                <div class="col-75">
                    <select name="dept">
                      <option value="CSE">CSE</option>
                      <option value="EEE">EEE</option>
                      <option value="ME">ME</option>
                      <option value="CIVIL">CIVIL</option>
                      <option value="IPE">IPE</option>
                      <option value="ENGLISH">ENGLISH</option>
                      <option value="BBA">BBA</option>
                      <option value="ICT">ICT</option>
                    </select>
                  </div>
              </div>
  <div class="row">
    <div class="col-25">
      <label>Date</label>
    </div>
    <div class="col-75">
      <input type="text" name="date" placeholder="YYYY-MM-DD">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Book's Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="bname" placeholder="Name of the book">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Writer's Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="wname" placeholder="Name of the writer">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Amount</label>
    </div>
    <div class="col-75">
      <input type="text" name="amount" placeholder="Amount">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Edition</label>
    </div>
    <div class="col-75">
      <input type="text" name="edition" placeholder="Book's Edition">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label>Price Per Book</label>
    </div>
    <div class="col-75">
      <input type="text" name="price" placeholder="Price per book">
    </div>
  </div>
  
    <div class='row'>
        <input type="submit" value="Submit" align="center">
    </div>
  
  </form>
</div></center>
<!-- </th></tr>
</table> -->
</body>
</html>


