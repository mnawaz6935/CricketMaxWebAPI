<?php


$con = mysqli_connect("localhost","id15392864_admin_cricket_max",")51u5brCdQC0_b7I","id15392864_cricket_max");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



if ($sql = mysqli_query($con, "select * from coins where active = '1' ")) 
{
$num_check = mysqli_num_rows($sql);
//message
$coins=0;
if($num_check>0){
    while($row3=mysqli_fetch_assoc($sql))
    {
        $coins =$coins +  $row3['coins'];
        
    }
}
//echo $coins;
//coins
print(json_encode(array('coins'=>$coins)));
}



mysqli_close($con);

?>