<!-- ***********************************************
* This is Assignment 1 for Web Application Development COS80021
* Part of Master of Information Technology at
* Swinburne University of Technology
*
* The assignment is to develop a web-based shipping system called ShipOnline.
* ShipOnline provides an online service for delivering small items for customers from
* Melbourne to elsewhere in Australia. A site map and three components (customer
* registration, login/request, and administration) of such an online service
* AGNES CARROLL student id 7403305
*
*This page is LOGIN PAGE where only members of the Ship Online can login
****************************************************-->

<!DOCTYPE html>

<html lang="en">

<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <meta name ="viewport" content ="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.0, user-scalable=yes" />
    <meta name ="description" content =""/>
    <meta name ="keywords" content ="ship, request, order" />
    <title>Ship Online Login Page</title>

</head>
<!-- /Head -->

<!-- Body -->
<body>
      <h1>ShipOnline System Login Page</h1>
    <form action = "" method = "POST">
      <fieldset>
        <legend>Customer Details</legend>
        <p>
          <label>Enter Customer ID Number: </label>
          <input type  = "text"
		 name  = "userid"
                 id    = "userid"
                 value = "userid" />
        </p>
        <p>
          <label>Enter Password: </label>
          <input type  = "password"
		 name  = "myPwd"
                 id    = "myPwd"
                 value = "secret" />
        </p>

       <input type = "submit" name = "submit" value = "login" />
        </fieldset>
    </form>
	<!-- footer -->
	<footer class = "footer">
            <ul id = "menu">
                <a href = "register.php">Registration</a>
                <a href = "login.php">Log-In</a>
                <a href = "admin.php">Administration</a>
            </ul>
	    <p>&#169; All Rights Reserved. &#160; <a href="#">Legal Notices</a></p>
	</footer>
	<!-- /footer -->
    </div>
</body>
<!-- /Body -->

<?php

   if (isset($_POST["userid"]))
    {
	$userid = $_POST["userid"];
	$myPwd =  $_POST["myPwd"];

	include_once ("settings.php");
	$conn = @mysqli_connect ($host,$user,$pwd,$sqldb);



	// To protect MySQL injection (more detail about MySQL injection)

	$userid = mysqli_real_escape_string($conn, $_POST["userid"]);
	$myPwd = mysqli_real_escape_string($conn, $_POST["myPwd"]);


	$login = "SELECT * FROM CUSTOMER WHERE (userid = '".$_POST['userid']."')
		  AND (myPwd = '".$_POST['myPwd']."')";
	$result = mysqli_query ($conn, $login);

	   // Mysql_num_row is counting table row

	$rowcount = mysqli_num_rows($result);

	// If result matched $username and $password, table row must be 1 row

	if($rowcount == 1)
	{
	    {
		$_POST['userid'] = $_POST['userid'];
		$_POST['myPwd']  = $_POST['myPwd'];
		header ("location: request.php");
		echo "Login Successful";
	    }
	}else {
		echo "Wrong Username or Password";
	    }
    }
?>

</html>

