<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php
if(isset($_POST['submit']))
{
    $blood=$_POST['blood'];
    $loc=$_POST['location'];
    //CONNECTION
    $conn=mysqli_connect('localhost','root','','rakesh');
    $read="SELECT * from bbm WHERE location='$loc'";
    $query=mysqli_query($conn,$read);
    echo"
    <table border='1'>
    <tr>
    <th>fname</th>
    <th>lname</th>
    <th>gender</th>
    <th>mobileno</th>
    <th>blood</th>
    <th>city</th>
    <th>address</th>
    </tr>
    ";
    while($row=mysqli_fetch_array($query))

    {
        $name=$row['fname'];
        $lname=$row['lname'];
        $gen=$row['gender'];
        $mobile=$row['mobileno'];
        $blood=$row['blood'];
        $city=$row['city'];
        $address=$row['address'];

        echo"
        <tr>
        <td>".$name."</td>
        <td>".$lname."</td>
        <td>".$gen."</td>
        <td>".$mobile."</td>
        <td>".$blood."</td>
        <td>".$city."</td>
        <td>".$address."</td>
        </tr>
        ";

                

    }
    echo"</table>";
}

?>
<html>
<body>
<h2>SEARCHDONOR</h2>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" >SAVE LIFE</a>
  
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
        <label for="blood">blood group:</label>
        <select id="blood" class="form-control" name="blood">
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="B+">B+</option>
        <option value="D-">D-</option>
        </select><br><br>
        </div>
        <div class="form-group">

        <label for="location">location:</label>
        <select id="location" class="form-control" name="location">
        <option value="nizamabad">nizamabad</option>
        <option value="hyderabad">hyderabad</option>
        <option value="nirmal">nirmal</option>
        <option value="adilabad">adilabad</option>
        <option value="pune">pune</option>
        <option value="kashmir">kashmir</option>
        <option value="rajasthan">rajasthan</option>


        </select><br><br>
        </div>

        </select><br><br>
        <button type="submit" name="submit">submit</button>
        </form>
        </body>
        </html>