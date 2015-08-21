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
    <title>Ship Online Administration Page</title>

</head>
<!-- /Head -->

<!-- Body -->
<body>
      <h1>Ship Online Administration Page</h1>
    <form>
      <fieldset>
        <legend>Data Retrieve Details</legend>
        <p>
          <label>Date for Retrieve</label>
          
               <select id = "myList">
            <option value = "1">one</option>
            <option value = "2">two</option>
            <option value = "3">three</option>
            <option value = "4">four</option>
          </select>
               
                 
               <select id = "myList">
            <option value = "1">one</option>
            <option value = "2">two</option>
            <option value = "3">three</option>
            <option value = "4">four</option>
          </select>
               
                 
               <select id = "myList">
            <option value = "1">one</option>
            <option value = "2">two</option>
            <option value = "3">three</option>
            <option value = "4">four</option>
          </select>
        </p>
    
      
        <p>
          <label>Select Date Item for Retrieve</label>      <!-- check that -->          
          <input type = "radio"
                 name = "radSize"
                 id = "sizeSmall"
                 value = "small"
                 checked = "checked" />
          <label for = "sizeSmall">Request Date</label>    <!-- check that -->
          
          <input type = "radio"
                 name = "radSize"
                 id = "sizeMed"
                 value = "medium" />
          <label for = "sizeMed">Pick-up Date</label>    <!-- check that -->
        </p>
         </br>
       <button type = "button">
            SHOW
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
</html>