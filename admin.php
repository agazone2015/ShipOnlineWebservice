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
*This page is THE ADMIN PAGE where data can be retrieve and displayed from database
****************************************************-->

<!DOCTYPE html>

<html lang="en">

<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.0, user-scalable=yes" />
    <meta name="description" content=""/>
    <meta name="keywords" content="ship, request, order" />
    <title>Ship Online Administration Page</title>

</head>
<!-- /Head -->

<!-- Body -->
<body>
      <h1>Ship Online Administration Page</h1>
 <form action = "" method = "POST">
      <fieldset>
        <legend>Data Retrieve Details</legend>
        <p>
          <label>Date for Retrieve</label>

                       <!-- check that -->
		<select name="date" id = "myDay" required>
			<?php
				for ($i = 1; $i < 32; $i++) {
				    echo "<option>$i</option>";
				}
			?>
		</select>

		<select name="month" id = "myMonth">
		    <option value = "1">January</option>
		    <option value = "2">February</option>
		    <option value = "3">March</option>
		    <option value = "4">April</option>
		    <option value = "5">May</option>
		    <option value = "6">June</option>
		    <option value = "7">July</option>
		    <option value = "8">August</option>
		    <option value = "9">September</option>
		    <option value = "10">October</option>
		    <option value = "11">November</option>
		    <option value = "12">December</option>
		</select>

		<select name="year" id = "myYear">
		    <option>2015</option>
		    <option>2016</option>
		</select>
	</p>
        <p>
          <label>Select Date Item for Retrieve. </label>
         <br>
	  <br>

          <label for = "RequestDate">Request Date</label>

          <input type = "radio"
                 name = "RequestDate"
                 id = "RequestDate"
                 value = "RequestDate" />

          <label for = "PickDate">Pick-up Date</label>

	   <input type = "radio"
                 name = "PickDate"
                 id = "PickDate"
                 value = "PickDate"/>

        </p>
         </br>
       <input type="submit" name = "submit" value="Submit" /> <br/>
        </fieldset>
    </form>



<?php

require_once("settings.php");
    if(isset($_POST['RequestDate']) || isset($_POST['PickDate']))
    {
	$conn = @mysqli_connect($host,$user,$pwd,$sqldb);

	$RequestDate = isset($_POST['RequestDate']);
	$PickDate = isset($_POST['PickDate']);

	//if($RequestDate=="All")
	//{
	    //$query = "SELECT * from REQUEST";
            $query = "SELECT  r.RequestId, c.userid, r.ItemDesc, r. ItemWeight, r.PickSuburb, r.PickDate, r.DeliverySuburb, r.State
	    FROM  r.REQUEST, c.CUSTOMER
	    WHERE r.RequestDate ='".$RequestDate."' AND r.userid = c.userid";


	$result = mysqli_query($conn, $query);
	if(!$result)
	{

	    echo "<hr>";
	    echo "<h1>RESULT OF QUERY</h1>";
	    echo "<table width='100%' border='1'>";
	    echo "<th>RequestId</th><th>userid</th><th>ItemDesc</th><th>ItemWeight</th><th>PickAddress</th><th>PickSuburb</th><th>PickDate</th><th>PickTime</th><th>Receiver</th><th>DeliveryAddress</th><th>DeliverySuburb</th><th>State</th>";

	    while($row = mysqli_fetch_assoc($result))
	    {

		echo"<tr>";
		echo "<td>",$row["RequestId"],"</td>";
		echo "<td>",$row["userid"],"</td>";
		echo "<td>",$row["ItemDesc"],"</td>";
		echo "<td>",$row["ItemWeight"],"</td>";
		echo "<td>",$row["PickSuburb"],"</td>";
		echo "<td>",$row["PickDate"],"</td>";
		echo "<td>",$row["DeliverySuburb"],"</td>";
		echo "<td>",$row["State"],"</td>";
		echo "</tr>";
	    }
	    echo "</table>";
	}else{
	     echo "<p> No records found</p>";
	}

	mysqli_close($conn);

    }

?>

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
</html>



