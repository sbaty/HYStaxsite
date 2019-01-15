<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" type="text/css" href="style.css">
<title> HYS Tax & Accounting Firm</title>
<body>
<div id="container">
<div class="Header">
		<h1><span "vertical-align: 100px;"> HYS Tax & Accounting Firm</span></h1>
		<br>
		<strong>103 Chester Avenue, Brooklyn, NY 11218&nbsp;&nbsp; Email: hystaxfirm@gmail.com&nbsp;&nbsp;&nbsp; Tel: (347)589-2822</strong>
		</div>
<div class="topnav">
  <a href="#">Home</a>
  <a href="#">About Us</a>
  <a href="#">Services</a>
</div>
	

<h2>MAXIMUM REFUND GUARANTEED</h2>
<hr>
	<div class ="Objective">
		<h2><span style="text-decoration: underline">Who We Are:</span></h2>
			<p class="p">Our tax firm provides comprehensive Tax, Accounting and Payroll services to small businesses and individuals. We combine years of experience with a personal touch that guarantees our clients the best possible 
			service. Johnathan Batyrov, EA serves clients with prudence, passion, and professionalism, and delivers services at a fair and affordable price. 
			If you are looking for personalized one-on-one support from a firm that truly cares about the unique needs of every client it serves, we encourage you to call today!</p>
			</div>
	<div class="List">
	<h2><span style="text-decoration: underline">Our Services:</span></h2>
	<ul>
		<li>Corporation & LLC Setup</li>
		<li>Corporate Returns</li>
		<li>Sales Tax</li>
		<li>Payroll Tax</li>
		<li>Congregation & Non For Profit Setup</li>
		<li>DBA & Trademarks</li>
		<li>E-file Service</li>
		<li>Individual Returns</li>
		<li>Payment Agreements</li>
		<li>Tax Settlement - O.I.C.</li>
	</ul>
	</div>
	<div class="form">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<?php
// define variables and set to empty values
$fnameErr = $emailErr = $lnameErr = $questionErr = "";
$fname = $email = $lname = $question =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
	    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
      $fnameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
	}

  if (empty($_POST["lname"])) {
    $lnameErr = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
	    if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
      $lnameErr = "Only letters and white space allowed"; 
    }
  }

  if (empty($_POST["question"])) {
    $questionErr = "Input cannot be null.";
  } else {
    $question = test_input($_POST["question"]);
  }

}
?>
	<table>
	<th><h2 align="left">Have a Tax Question? Fill Out the Form Below and We Will <br/>Get Back To You  Within One Business Day</h2></th>
	<tr><td><span class="error">* required field</span></tr></td>
	<tr><td>First Name: <input type="text" name="fname"required>  <span class="error">* <?php echo $fnameErr;?></span>
</td></tr>
	<tr><td>Last Name: <input type="text" name="lname"required>  <span class="error">* <?php echo $lnameErr;?></span>
</td></tr>
	<tr><td>E-mail: <input type="email" name="email"required>  <span class="error">* <?php echo $emailErr;?></span>
</td></tr>
	<tr><td>Zip Code: <input type="number" name="phone"required> </td><br><br>
	</tr></table>
	What's Your Question?<br/><textarea name="comment" required rows="8" cols="50" wrap="hard"></textarea>  <span class="error">* <?php echo $questionErr;?></span>
 <input type="submit" name="question">
	
	<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $email = test_input($_POST["email"]);
  $lname = test_input($_POST["lname"]);
  $question = test_input($_POST["question"]);
  $phone = test_input($_POST["phone"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	</form>
	</div>
	<div class="footer">&copy; <?php echo date("Y");?> HYS Tax & Accounting Firm, All Rights Reserved </div>

</div>
</body>
</head>
</html>
