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
   if(isset($_FILES['img1'])){
      $errors= array();
      $file_name = $_FILES['img1']['name'];
      $file_size =$_FILES['img1']['size'];
      $file_tmp =$_FILES['img1']['tmp_name'];
      $file_type=$_FILES['img1']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['img1']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "img uploaded";
      }else{
         print_r($errors);
      }
   }
   if(isset($_FILES['img2'])){
      $errors= array();
      $file_name = $_FILES['img2']['name'];
      $file_size =$_FILES['img2']['size'];
      $file_tmp =$_FILES['img2']['tmp_name'];
      $file_type=$_FILES['img2']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['img2']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "img uploaded";
      }else{
         print_r($errors);
      }
   }
   if(isset($_FILES['img3'])){
      $errors= array();
      $file_name = $_FILES['img3']['name'];
      $file_size =$_FILES['img3']['size'];
      $file_tmp =$_FILES['img3']['tmp_name'];
      $file_type=$_FILES['img3']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['img3']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "img uploaded";
      }else{
         print_r($errors);
      }
   }
   if(isset($_FILES['img4'])){
      $errors= array();
      $file_name = $_FILES['img4']['name'];
      $file_size =$_FILES['img4']['size'];
      $file_tmp =$_FILES['img4']['tmp_name'];
      $file_type=$_FILES['img4']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['img4']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }

      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "img uploaded ";
      }else{
         print_r($errors);
      }
   }
   $query="INSERT INTO `product`(`name`, `type`, `funding`, `target-consumer`, `model`, `img1`, `img2`, `img3`, `img4`, `owner`, `info`) VALUES('".$_POST['name']."','".$_POST['type']."','".$_POST['funding']."','".$_POST['target-consumer']."','".$_POST['model']."','".$_FILES['img1']['name']."','".$_FILES['img2']['name']."','".$_FILES['img3']['name']."','".$_FILES['img4']['name']."','".$_POST['owner']."','".$_POST['info']."')";
   var_dump($query);
   $result=mysqli_query($con,$query);
   

?>
