<?php
  $server ="localhost";
  $username2="root";
  $password2 = "";
  $dbname ="longin";

  $con =mysqli_connect($server,$username2,$password2,$dbname);
  if(!$con)
  {
    echo "not connected";
  }
  else
  {
    echo "connected";
  }


 $fullname = $_POST['fullname'];
  $username = $_POST['username'];
 $email = $_POST['email'];
  $password = $_POST['password'];

  //Database connection
  $sql="INSERT INTO `info` (`fullname`, `username`, `email`, `password`) VALUES ('$fullname', '$username', '$email', '$password')";

  $result=mysqli_query($con,$sql);
  if($result)
  {
    echo "data submited";
  }
  else
  {
    echo "query failed";
  }
  
  
  
