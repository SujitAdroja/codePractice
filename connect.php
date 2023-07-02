<?php
  $name=$_POST['name'];
  $age=$_POST['age'];
  $weight=$_POST['weight'];
  $file=$_POST['health_file'];
  $email=$_POST['email'];
  echo $file;
  
  $conn=new mysqli('localhost','root','','test');
  if($conn->connect_error){
    die('connection failed : '.$conn->connect_error );
  }else{
    $stmt=$conn->prepare("insert into user(name,age,weight,email,file) values(?,?,?,?,?)");
    $stmt->bind_param("siisb",$name,$age,$weight,$email,$file);
    $stmt->execute();
    echo " refistration successfully";
    $stmt->close();
    $conn->close();
  }
?>