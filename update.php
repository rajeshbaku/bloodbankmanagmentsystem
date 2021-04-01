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
//CONNECTION
$conn=mysqli_connect('localhost','root','','rakesh');
$read="SELECT * from bbm where id='25'";
$query=mysqli_query($conn,$read);
while($row=mysqli_fetch_array($query))
{
$fname=$row['fname'];
$lname=$row['lname'];
$gen=$row['gender']; 

if($gen == "male")
{
  $male="checked";
  $female = "";
  $other = "";
}
else if($gen == "female")
{
  $male="";
  $female = "checked";
  $other = "";

}
else
{
  $male="";
  $female = "";
  $other = "checked";
}


$mobileno=$row['mobileno'];
$blood=$row['blood'];
$loc=$row['location'];
$city=$row['city'];
$address=$row['address'];


}

?>
<?php
if(isset($_POST['update']))
{
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $gen=$_POST['gender'];
     $loc=$_POST['location'];
    $mobileno=$_POST['mobileno'];
    $blood=$_POST['blood'];
    $city=$_POST['city'];
    $address=$_POST['address'];

    //CONNECTION
    $conn=mysqli_connect('localhost','root','','rakesh');
    $update="UPDATE bbm SET fname='$firstname',lname='$lastname',gender='$gen',location='$loc',mobileno='$mobileno',blood='$blood',city='$city',address='$address'WHERE mobileno='$mobileno' ";
    $query=mysqli_query($conn,$update);

      header('refresh:0');

}
?>

<html>
<body>
<h2>REGISTRATION FORM</h2>
​<form action="" method="POST">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" pattern="[a-zA-Z][a-zA-Z ]{0,}"  name="fname" value="<?php echo"$fname"; ?>"><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" pattern="[a-zA-Z][a-zA-Z ]{0,}" value="<?php echo"$lname"; ?>"><br>
        <input type="radio" id="male" name="gender" value="male" <?php echo"$male";?>>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female" <?php echo"$female";?>>
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other" <?php echo"$other";?>>
        <label for="other">Other</label><br>
        <label for="blood">blood group:</label>
        <select id="blood" name="blood">
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B-">B-</option>
        <option value="B+">B+</option>
        <option value="D-">D-</option>
        </select><br><br>

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
        <input type="tel"name="mobileno"id="phone_number" pattern="^\d{10}$" required="required" value="<?php echo"$mobileno";?>">
          <br>
      
        <label for="lname">city:</label><br>
        <input type="text" id="city" name="city" value="<?php echo"$city"; ?>"><br>

        <label for="address">address:</label><br>
        <textarea rows="4" cols="50" name="address" ><?php echo"".$address."";?></textarea><br><br>

        

        <button type="submit" name="update">update</button>
        
       

</form>
</body>
</html>
​