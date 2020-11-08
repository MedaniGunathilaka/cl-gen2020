<?php
include ('conn.php');

$sql = "SELECT SocietyID,SocietyName,tcrID,numstu from csocieties";
mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);

if($result){
  //echo "Sucessfull";
  }
else{
  echo"failed";	
  }



?>

