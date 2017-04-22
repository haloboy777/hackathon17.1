<?php
$server = 'localhost';
$username   = 'username';
$password   = 'password';
$database   ='database';
$con=mysqli_connect($server,$username,$password,$database);

if (mysqli_connect_errno())
  {
  $lol = "Failed to connect to MySQL: " . mysqli_connect_error();
  var_dump($lol);
}
else {
  if(isset($_POST['submit']) && !empty($_POST['submit'])):
              $query="insert into contact_page(fname,lname,email,pass) values('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['pass']."')";
              var_dump($query);
              $result=mysqli_query($con,$query);
              $succMsg = 'You have successfully registered';
              header("Location: ".$redirect_to,true,303);
              //var_dump($succMsg)
}
  endif;
header("Location: ".$redirect_to,true,303);
}?>
