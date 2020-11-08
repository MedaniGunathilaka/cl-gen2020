
    <?php
include ('conn.php');

$sql = "SELECT sportID,sportName,tcrID,numstu from csports";
mysqli_query($conn, $sql);
$result = mysqli_query($conn,$sql);

if($result){
  //echo "Sucessfull";
  }
else{
  echo"failed";	
  }



?>



