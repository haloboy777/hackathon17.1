<?php
$server = 'localhost';
$username   = 'username';
$password   = 'password';
$database   = 'hackathon';
$con=mysqli_connect($server,$username,$password,$database);

if (mysqli_connect_errno())
  {
  $lol = "Failed to connect to MySQL: " . mysqli_connect_error();
  var_dump($lol);
}
$query = 'select * from product where id=`'.$_GET['id'].'`';
$result = mysqli_query($con, $query);
$row=mysqli_fetch_array($result);

echo "<h1>".$row['name']."</h1>
<br>
<h3>".$row['owner']."</h3>
<br>
likes : ".$row['likes']."
<br>
type of the product : ".$row['type']."
<br>
information about the product :
  <br>
  <pre>
  ".$row['info']."
  </pre>
<br>
business-model : ".$row['model']."
<br>

<br>
<img src='images/".$row[img1]."'><img src='images/".$row[img2]."'><img src='images/".$row[img3]."'><img src='images/".$row[img4]."'>";

if ($row['funding']=="yes") {
  echo "help by funding : <u>donate here</u>

  <br>
  <br>";
}
 echo "help by doing some work : <u>contact the owner</u>";
?>
