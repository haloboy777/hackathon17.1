<!--TODO

!!List display page!!

* show according to the target-consumer and product class[type] desc by number of likes on the post-->

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
$query = 'select name,owner,likes from product where type=`'.$type.'` and target-consumer=`'.$target-consumer.'` order by desc(likes) limit 20';
$result = mysqli_query($con, $query);
echo "<ul style='list-style-type:none'>";
while($row=mysqli_fetch_array($result))
    {
      echo '<li>
    <h4><a href="preview.php?pcode='.$row['id'].'">'.$row['name'].'</a></h4>
    <a href="preview.php?pcode='.$row['id'].'"><img src="'.$row['img1'].'" style="height:150px; width:auto;" alt="" /></a>
</li>
<hr />';}
echo "</ul>";
?>
