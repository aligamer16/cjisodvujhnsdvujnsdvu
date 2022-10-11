<?php
include('confing.php'); 
if (isset($_POST['sub'])) {
  $chart=$_POST['chart'];
  
  $result=$connection->prepare("INSERT INTO chart SET chart=?");
  $result->bindValue(1,$chart);
  
  $result->execute();
  }
header("location:index.php");
?>
 
