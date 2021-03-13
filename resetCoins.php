<?php


$con = mysqli_connect("localhost","id15392864_admin_cricket_max",")51u5brCdQC0_b7I","id15392864_cricket_max");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



if ($sql = mysqli_query($con, "UPDATE coins SET active='0' WHERE active = '1' ")) 
{
//$num_check = mysqli_num_rows($sql);
//message
print(json_encode(array('result'=>"Success")));

}



mysqli_close($con);

?>