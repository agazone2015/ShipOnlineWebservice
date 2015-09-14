<!-- ***********************************************
* This is Assignment 1 for Web Application Development COS80021
* Part of Master of Information Technology at
* Swinburne University of Technology
*
* The assignment is to develop a web-based shipping system called ShipOnline.
* ShipOnline provides an online service for delivering small items for customers from
* Melbourne to elsewhere in Australia. A site map and three components (customer
* registration, login/request, and administration) of such an online service
**
*  AGNES CARROLL student id 7403305
*
* This page is REQUEST PAGE that allow customer to submit request for the service
****************************************************-->


<!DOCTYPE html>

<html lang="en">

<!-- Head -->
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.0, user-scalable=yes" />
    <meta name="description" content=""/>
    <meta name="keywords" content="ship, request, order" />
    <title>Ship Online Request Page</title>

</head>
<!-- /Head -->

<!-- Body -->
<body>
      <h1>Ship Online Request Page</h1>
    <form action = "" method = "POST">
    <fieldset>
        <legend>Item information</legend>
        <p>
        <label>Item description</label>
        <textarea name = "ItemDesc"
		    id = "myTextArea"
                  rows = "3"
                  cols = "80"
		  required >Please describe item here</textarea>
        </p>
        <p>
	    <label>Weight</label>
		<select name = "ItemWeight" id = "myList" required>
		    <option >Select item weight</option>
		    <option >0-2 kg</option>
		    <option >2-4 kg</option>
		    <option >4-6 kg</option>
		    <option >6-8 kg</option>
		    <option >8-10 kg</option>
		    <option >10-12 kg</option>
		    <option >12-14 kg</option>
		    <option >14-16 kg</option>
		    <option >16-18 kg</option>
		    <option >18-20 kg</option>
		</select>
	</p>

    </fieldset>
    </br>
    <fieldset>
        <legend>Pick-up Information</legend>

        <p>
	    <label>Address</label>
		<input type = "text"
		       name = "PickAddress"
			 id = "myAddress"
		      value = "Address here" />
        </p>
        <p>
	    <label>Suburb</label>
		<input type = "text"
		       name = "PickSuburb"
			 id = "mySuburb"
		      value = "Suburb here" />
        </p>
        <p>
	    <label>Prefered date</label>
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
	    <label>Prefered Time</label>       <!-- check that -->
		<select name="PickTime"  id = "PickTime">
			<?php
			    for ($i = 7; $i < 20; $i++) {
				echo "<option>$i:00</option>";
				echo "<option>$i:30</option>";
			    }
			?>
		</select>

    <label>Minutes</label>
          <input type = "text"
                   id = "myTime"
                value = " " />
            </p>
         <p><h5>If you don't input the minute property, we will assume you want to pick the item up at exact hour specified</h5></p>

    </fieldset>
    </br>
    <fieldset>
         <legend>Delivery Information</legend>

           <p>
          <label>Receiver Name</label>
          <input type = "text"
		 name = "Receiver"
                   id = "myReceiver"
            	value = "Name here" />
        </p>

             <p>
          <label>Address</label>
          <input type = "text"
		 name = "DeliveryAddress"
                   id = "myAddress"
                value = "Address here" />
        </p>
            <p>
          <label>Suburb</label>
          <input type = "text"
	 	 name = "DeliverySuburb"
               	   id = "mySuburb"
                value = "Suburb here" />
        </p>

        <p>
	    <label>State</label>
		<select name = "State" id = "myState">
		    <option value = "act">Australian Capital Territory</option>
		    <option value = "nsw">New South Wales</option>
		    <option value = "nt">Northern Territory</option>
		    <option value = "qld">Queensland</option>
		    <option value = "sa">South Australia</option>
		    <option value = "tas">Tasmania</option>
		    <option value = "vic">Victoria</option>
		    <option value = "wa">Western Australia</option>
		</select>
        <p>

           <input type="submit" name = "submit" value="REQUEST" /> <br/>
        </p>
    </fieldset>
    </form>
    <!-- footer -->
	<footer class="footer">
	    <ul id="menu">
		<a href="register.php">Registration</a>
		<a href="login.php">Log-In</a>
		<a href="admin.php">Administration</a>
            </ul>
	    <p>All Rights Reserved. &#160; <a href="#">Legal Notices</a></p>
	</footer>
	<!-- /footer -->
    </body>

<?php

include_once("settings.php");
$conn = @mysqli_connect($host, $user, $pwd, $sqldb);

if($conn)
{
    $sql = "create table IF NOT EXISTS REQUEST
    (
	RequestId int NOT NULL auto_increment PRIMARY KEY,
        userid int NOT NULL,
	RequestDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	ItemDesc varchar(100) NOT NULL,
	ItemWeight int (4) NOT NULL,
	PickAddress varchar (40) NOT NULL,
	PickSuburb varchar (10) NOT NULL,
	PickDate  Date NOT NULL,
	PickTime  Time NOT NULL,
	Reciver varchar (15) NOT NULL,
	DeliveryAddress varchar (40) NOT NULL,
	DeliverySuburb varchar (10) NOT NULL,
	State varchar (15) NOT NULL,
	FOREIGN KEY (userid) REFERENCES CUSTOMER (userid)
    )";

    $result = mysqli_query($conn, $sql);



	if (isset($_POST['submit']))
	{
		if (isset($_POST['ItemDesc']))
		{
		    $ItemDesc = trim($_POST['ItemDesc']);
		} else
		{
		    $ItemDesc = '';
		}
		if (isset($_POST['ItemWeight']))
		{
		    $ItemWeight = trim($_POST['ItemWeight']);
		    if ($ItemWeight<=2){
			$cost = 10;
		    }elseif ($ItemWeight>2){
			$cost = 10 + 2*($ItemWeight-2);
		    }

		if (isset($_POST['PickAddress']))
		{
		    $PickAddress = trim($_POST['PickAddress']);
		}else
		{
	    	    $PickAddress = '';
		}
		if (isset($_POST['PickSuburb']))
		{
		    $PickSuburb = trim($_POST['PickSuburb']);
		}else
		{
	    	    $PickSuburb = '';
		}

		// Get date, month, year
		$year 	= isset($_POST['year']) ? $_POST['year'] : '2015';
		$month 	= isset($_POST['month'])? $_POST['month']: '01';
		$date 	= isset($_POST['date']) ? $_POST['date'] : '01';

		$PickDate = $year.'-'.$month.'-'.$date;
//echo "<br/>".$PickDate;

		    // pick-up time has to 24 hours after the request time
		if (strtotime($PickDate)<strtotime("+1 days"))
		{
		  echo "<p >Select your pick-up DATE again, service works after 24 hours after the request!</p>";
		    $conn = false;
		}


		// Get time
		//$time = isset($_POST['PickTime']) ? $_POST['PickTime']: '00:00';
		//$PickTime = strtotime($time);

		if (strtotime($_POST['PickTime']))
		{
		   $PickTime =  strtotime($_POST['PickTime']);
		}else{
		   $conn = false; // cancel request!
		}

		$Receiver = isset($_POST['Receiver']) ? $_POST['Receiver'] : '';

		if (isset($_POST['DeliveryAddress']))
		{
		    $DeliveryAddress = trim($_POST['DeliveryAddress']);
		}else
		{
	    	    $DeliveryAddress = '';
		}
		if (isset($_POST['DeliverySuburb']))
		{
		    $DeliverySuburb = trim($_POST['DeliverySuburb']);
		}else
		{
	    	    $DeliverySuburb = '';
		}


		if (isset($_POST['State']))
		{
		    $State = trim($_POST['State']);
		}else{
	    	    $State = '';
		}
		// date format for sql yyyy-mm-dd

		$sql = "INSERT INTO REQUEST (ItemDesc, ItemWeight, PickAddress, PickSuburb, PickDate, PickTime, Receiver, DeliveryAddress, DeliverySuburb, State)
			VALUES ('$ItemDesc', '$ItemWeight', '$PickAddress', '$PickSuburb', '$PickDate', $PickTime, '$Receiver', '$DeliveryAddress', '$DeliverySuburb', '$State');";
//echo $sql;

		$result = mysqli_query($conn, $sql);
		if ($result)
		{
		    $recidQuery= "SELECT RequestId, myName, myEmail FROM REQUEST INNER JOIN CUSTOMER ORDER BY RequestId DESC LIMIT 1";
		    $idArray=mysqli_query($conn,$recidQuery);
		    $row=mysqli_fetch_assoc($idArray);

			echo "Thank you! Your request number is: ".$row["RequestId"].", the cost is $cost $. We will pick up item at $PickTime on $PickDate.
			A confirmation email will be sent to the ".$row["myEmail"]."<br/>";


			echo "Recipient: ".$row["myEmail"]." of the customer<br/>";
			$subject = "\"Shiping request with ShipOnline!\"";
			echo "Subject: ".$subject ."<br/>";
			$message= "\"Dear ".$row["myName"].",
			Thank you for using ShipOnline! Your request number
			is ".$row["RequestId"].". The cost is $cost $ We will pick up the item  at $PickTime on $PickDate.";

			echo "Message:".$message."<br/>";
			$header= "\"From request@shiponline.com.au\"";
			echo "Header: ".$header;
			$additional="-7403305@student.swin.edu.au";

			mail($email="$row[myEmail]",$subject,$message,$header,"-r7403305@student.swin.edu.au");
		}
		if (!$result)
		{
		    echo "<p>Error in the input!</p>";
//echo mysqli_error($conn);
		} else
		{
		    mysqli_close($conn); //Close the DB Connection
		}
	}
	}
}

?>
</html>