<!-- ***********************************************
* This is Assignment 1 for Web Application Development COS80021
* Part of Master of Information Technology at
* Swinburne University of Technology
*
* The assignment is to develop a web-based shipping system called ShipOnline.
* ShipOnline provides an online service for delivering small items for customers from
* Melbourne to elsewhere in Australia. A site map and three components (customer
* registration, login/request, and administration) of such an online service
*
****************************************************-->


<!DOCTYPE html>

<html lang="en">
	
<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.0, user-scalable=yes" />	
    <meta name="description" content=""/>
    <meta name="keywords" content="ship, request, order" />	
    <title>Ship Online Register Page</title>

</head>
<!-- /Head -->

<!-- Body -->
<body>
      <h1>ShipOnline System Regitration Page</h1>
    <form>
      <fieldset>
        <legend>New Customer Registration Form</legend>
        <p>
          <label>Name</label>
          <input type = "text" name = "myName" value = "name here" />
        </p>
        <p>
          <label>Password</label>
          <input type = "password" name = "myPwd" value = "secret" />
        </p>
    
         <p>
          <label>Confirm password</label>
          <input type = "password" name = "myPwd" value = "secret" />
        </p>
         
         <p>
          <label>email address</label> 
          <input type = "email" name = "myEmail" value = "email" /> 
        </p>
         
        <p>
          <label>Contact Phone</label>
          <input type = "phone" name = "myPhone" value = "phone" /> 
        </p>
        </p>
           <input type="submit" value="Register" /> <br/>
          </button> 
      </fieldset>   
    </form>
	<!-- footer -->
	<footer class="footer">
            <ul id="menu">
                <a href="register.php">Registration</a>
                <a href="login.php">Log-In</a>
                <a href="admin.php">Administration</a>
                <a href="register.php">Registration</a>
            </ul>  	
	    <p>&#169; All Rights Reserved. &#160; <a href="#">Legal Notices</a></p>				
	</footer>
	<!-- /footer -->
    </div>
</body>
<!-- /Body -->

<!--PHP-->

<?php
    if(isset($_GET['myName']) && isset($_GET['myPwd']) && isset($_GET['myEmail']) && isset($_GET['myPhone']))
  {
    $userName = $_GET['myName'];
	$userPas = $_GET['myPwd'];
	$userEmail = $_GET['myEmail'];
    $userPhone = $_GET['myPhone'];
	$userInfo = $userName .", " . $userPas .", " . $userEmail .",  " . $userPhone ."\n";
    $userFile = "user_db.txt";
    if(file_put_contents($userFile, $userInfo, FILE_APPEND) > 0)
      echo "<p><em>{$_GET['myName']}</em> has been registered as a member of the Shipping Online Service.</p>";
    else echo "<p>Registration error!</p>";
  }
  //else {
  //  echo "<p>Please enter your name and phone number and click the Register button.</p>";
  //}
?>
</html>