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
*  AGNES CARROLL student id 7403305
*
* This page is REGISTER PAGE that allow to register for new customers
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
    <form action = "" method = "POST">
      <fieldset>
        <legend>New Customer Registration Form</legend>
        <p>
          <label>Name</label>
          <input type = "text" name = "myName" value = "name" />
        </p>
        <p>
          <label>Password</label>
          <input type = "password" name = "myPwd" value = "secret" />
        </p>

         <p>
          <label>Confirm password</label>
          <input type = "password" name = "confPwd" value = "secret" />
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
           <input type="submit" name = "submit" value="Register" /> <br/>
          </button>
      </fieldset>
    </form>
  <!-- footer -->
  <footer class="footer">
            <ul id="menu">
                <a href="register.php">Registration</a>
                <a href="login.php">Log-In</a>
                <a href="admin.php">Administration</a>
            </ul>
      <p>&#169; All Rights Reserved. &#160; <a href="#">Legal Notices</a></p>
  </footer>
  <!-- /footer -->
    </div>
</body>
<!-- /Body -->

<!--PHP-->

<?php

  include_once("settings.php");


  $conn = @mysqli_connect($host, $user, $pwd, $sqldb);
  if($conn)
  {
    $sql = "create table IF NOT EXISTS CUSTOMER(
      userid int auto_increment primary key,
      myName varchar (20) NOT NULL,
      myPwd varchar (10) NOT NULL,
      confPwd varchar(10) NOT NULL,
      myEmail varchar (10) NOT NULL,
      myPhone int (15) NOT NULL
    )";

    $result = mysqli_query($conn, $sql);



   if (isset ($_POST["submit"]))
   {
        $myName  = trim($_POST["myName"]);
        $myPwd   = trim($_POST["myPwd"]);
        $confPwd = trim($_POST["confPwd"]);
        $myEmail = trim($_POST["myEmail"]);
        $myPhone = trim($_POST["myPhone"]);




//function checkEmail($myEmail){
 // return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $myEmail) ? TRUE : FALSE;
//}


    function validation()
    {
        $errMsg = "";
        $result = true;

        $myName  = (isset($_POST["myName"]));
        $myPwd   = (isset($_POST["myPwd"]));
        $confPwd = (isset($_POST["confPwd"]));
        $myEmail = (isset($_POST["myEmail"]));
        $myPhone = (isset($_POST["myPhone"]));

        // Look for data that is wrong
        if(! $myName == preg_match( '/^[A-Za-z]+$/', $myName)) {
            //$errMsg .= "Error: Just letter required.\n";
            $result = false;
        }

        if(strlen ($myPwd) == ""){
            //$errMsg .= "Error: Just letter required.\n";
            $result = false;
        }

        if(strlen ($confPwd) == ""){
            //$errMsg .= "Error: Just letter required.\n";
            $result = false;
        }

        if (! $myEmail == preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $myEmail)) {
            //$errMsg .= "Error: Enter your email.\n";
            $result = false;
        }

        if ($myPhone == 0) {
            $errMsg .= "Error: enter your phone number.";
            $result = false;
        }

        if ($errMsg != ""){   // display message if there are errors
	    echo "<p>  $errMsg  </p>";
	}

        return $result;
    }
    validation();




        //$con = @mysqli_connect($host, $user, $pwd, $sqldb);
        if ($conn)
         {

            $matchquery  = "SELECT myEmail FROM CUSTOMER WHERE myEmail = '$myEmail'";
             $result =mysqli_query($conn, $matchquery);

            if (mysqli_num_rows($result) == 0)
            {
                $sqlInsert = "INSERT INTO CUSTOMER (myName, myPwd, confPwd, myEmail, myPhone)
                              VALUES"; $sqlInsert .=" ('$myName', '$myPwd', '$confPwd', '$myEmail', $myPhone)";

                $result = mysqli_query ($conn, $sqlInsert);
               if ($result)
               {
                    $useridQuery= "SELECT userid FROM CUSTOMER ORDER BY userid DESC LIMIT 1";
                    $idArray=mysqli_query($conn,$useridQuery);
                    $row=mysqli_fetch_assoc($idArray);
                        echo "Thank you for registering! Dear " . $myName . ", you have been sucessful register into Ship Online and your ID is ".$row["userid"].".
                            </br>A confirmation email has been sent to " . $myEmail . "";
                }
                if (($result) > 1)
                {
                    echo 'That username has already been registered';
                }

            }
        mysqli_close($conn); //Close the DB Connection
        }
   }
}

?>

</html>