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
$read="SELECT * from bbm";
$query=mysqli_query($conn,$read);
echo"
<table  border='1'>
<tr>
<th>fname</th>
<th>lname</th>
<th>gender</th>
<th>mobileno</th>
<th>blood</th>
<th>location</th>
<th>city</th>
<th>address</th>
<th>udate</th>
<th>delete</th>
</tr>
";

while($row=mysqli_fetch_array($query))
{
$name=$row['fname'];
$lname=$row['lname'];
$gen=$row['gender'];
$mobile=$row['mobileno'];
$blood=$row['blood'];
$loc=$row['location'];
$city=$row['city'];
$address=$row['address'];

echo"
<tr>
<td>".$name."</td>
<td>".$lname."</td>
<td>".$gen."</td>

<td>".$mobile."</td>
<td>".$blood."</td>
<td>".$loc."</td>
<td>".$city."</td>
<td>".$address."</td>
<td><a href='update.php'>update</a></td>
<td><a href='read.php'>delete</a></td>

</tr>



";

}
echo"</table>";


?>