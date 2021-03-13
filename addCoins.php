<?php

$con = mysqli_connect("localhost","id15392864_admin_cricket_max",")51u5brCdQC0_b7I","id15392864_cricket_max");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}


$id=$_GET["account_Id"];//$_POST['account_Id'];
$token=$_GET["account_accessToken"];
$coins=$_GET["deposit"];

//echo $id;

$sqlinsert = mysqli_query($con,"INSERT INTO coins (`account_Id`, `account_accessToken`, `active`,`coins`)
VALUES ('$id','$token','1','$coins');") or die ("Select Error". mysql_error());

// $arrd = array();
// array_push($arrd, array('status'=>'Success'));
print(json_encode(array('result'=>"Success")));

mysqli_close($con);

?>