<?php
if(isset($_POST['submit']))
{
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $gen=$_POST['gender'];
    $loc=$_POST['location'];
    $mobile=$_POST['mobileno'];
    $blood=$_POST['blood'];
    $city=$_POST['city'];
    $add=$_POST['address'];

    //CONNECTION
    $conn=mysqli_connect('localhost','root','','rakesh');
   
    //INSERT
    $insert="INSERT INTO bbm(fname,lname,gender,location,mobileno,blood,city,address)values('$firstname','$lastname','$gen','$loc','$mobile','$blood','$city','$add')";
    $query=mysqli_query($conn,$insert);
    
    if($query)
    {
        echo"Registration suceessfully...";
    }
   
    
}
?>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<h2>REGISTRATION FORM</h2>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="#">SAVE LIFE</a>
  
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="registration.php">REGISTRATION</a>
    </li>
    <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="searchdonor.php">SEARCHDONOR</a>
    </li>

  </ul>
</nav>

<div class="container">
​<form action="" method="POST">
<div class="form-group">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" class="form-control" type="text" pattern="[a-zA-Z][a-zA-Z ]{0,}"  name="fname" ><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"  class="form-control" pattern="[a-zA-Z][a-zA-Z ]{0,}" ><br>

        <div class="form-check">
        <input type="radio" class="form-check-input" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" class="form-check-input" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" class="form-check-input" id="other" name="gender" value="other">
        <label for="other">Other</label><br>
        </div>
       
        <div class="form-group">
    
        <label for="blood">blood group:</label>
        <select  class="form-control" id="blood" name="blood">
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="B+">B+</option>
        <option value="D-">D-</option>
        </select><br><br>
        </div>

        <label for="location">location:</label>
        <select id="location" name="location">
        <option value="nizamabad">nizamabad</option>
        <option value="hyderabad">hyderabad</option>
        <option value="nirmal">nirmal</option>
        <option value="adilabad">adilabad</option>
        <option value="pune">pune</option>
        <option value="kashmir">kashmir</option>
        <option value="rajasthan">rajasthan</option>
        </select><br><br>


        <label for="fname">mobileno:</label><br>
        <input type="tel"name="mobileno"id="phone_number" class="form-control" pattern="^\d{10}$" required="required"/>
          <br>
      
        <label for="lname">city:</label><br>
        <input type="text" id="city" class="form-control" name="city"><br>

        <label for="address">address:</label><br>
        <textarea rows="4" cols="50" class="form-control" name="address"></textarea><br><br>

        
     
        <button type="submit" name="submit">submit</button>
     
 
             
</div>
</form>
</body>
</html>
​