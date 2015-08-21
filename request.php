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
    <title>Ship Online Request Page</title>

</head>
<!-- /Head -->

<!-- Body -->
<body>
      <h1>Ship Online Request Page</h1>
    <form>
      <fieldset>
        <legend>Item information</legend>
         <p>
          <label>Item description</label>
          <textarea id = "myTextArea"
                rows = "3"
                cols = "80">Your text here</textarea>
        </p>
          <p>
          <label>Weight</label>
     
          <select id = "myList">
            <option value = "1">onesdfsdfsdfsdfd</option>
            <option value = "2">two</option>
            <option value = "3">three</option>
            <option value = "4">four</option>
          </select>
        </p>
      
   
       
      </fieldset>
       </br>
      <fieldset>
        <legend>Pick-up Information</legend>
       
          <p>
          <label>Address</label>
          <input type = "text"
                 id = "myAddress"
                 value = "Address here" />
        </p>
            <p>
          <label>Suburb</label>
          <input type = "text"
                 id = "mySuburb"
                 value = "Suburb here" />
        </p>
            
          <p>
          <label>Prefered date</label>   <!-- check that -->
     
          <select id = "myDate">
            <option value = "1">Day</option>
            <option value = "2">two</option>
            <option value = "3">three</option>
            <option value = "4">four</option>
          </select>
          
         
     
          <select id = "myDate">
            <option value = "1">Month</option>
            <option value = "2">two</option>
            <option value = "3">three</option>
            <option value = "4">four</option>
          </select>
          
      
     
          <select id = "myDate">
            <option value = "1">Year</option>
            <option value = "2">two</option>
            <option value = "3">three</option>
            <option value = "4">four</option>
          </select>
        </p>
          
            
            <p>
          <label>Prefered Time</label>       <!-- check that -->
     
          <select id = "myList">
            <option value = "1">Hour</option>
            <option value = "2">two</option>
            <option value = "3">three</option>
            <option value = "4">four</option>
          </select>
     
      
     <label>Minutes</label>
          <input type = "text"
                 id = "myTime"
                 value = " " />
            </p>   
         <p><h5>If you don't input the minute property, we will assume you want to pick the item up at exact hour</h5></p>   
      
      </fieldset>
      </br>
      <fieldset>
         <legend>Delivery Information</legend>
         
           <p>
          <label>Receiver Name</label>
          <input type = "text"
                 id = "myReceiver"
                 value = "Name here" />
        </p>
           
             <p>
          <label>Address</label>
          <input type = "text"
                 id = "myAddress"
                 value = "Address here" />
        </p>
            <p>
          <label>Suburb</label>
          <input type = "text"
                 id = "mySuburb"
                 value = "Suburb here" />
        </p>
            
          <p>
          <label>State</label>
     
          <select id = "myDate">
            <option value = "1">Select State</option>
            <option value = "2">two</option>
            <option value = "3">three</option>
            <option value = "4">four</option>
          </select>
          
       
        <p>
          <button type = "button">
           REQUEST
          </button>
          
          <input type = "button"
                 value = "input button" />
          <input type = "reset" />
          <input type = "submit" />   <!-- check that -->
        </p>       
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
</body>
<!-- /Body -->
</html>