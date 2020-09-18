	<?php


	$username="root";
$password= "";
$server ='localhost';
$db ='curdcontacts';


$con= mysqli_connect($server,$username,$password,$db);

if($con){
	echo "";
}else{
	die("faild".mysqli_connect_error());
}


 if (isset($_POST['submit'])){

$street=$_POST['street'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$state=$_POST['state'];
$phone=$_POST['phone'];

$insertquery =  " insert into contactous(street,pincode,country,state,phone) values('$street','$pincode','$country','$state','$phone')";


$res= mysqli_query($con, $insertquery);

 if ($res)


  {
?>
<script>
	
alert("Thankyou for contact to us"); 

</script>
<?php
 }else{
 	?>
<script>
	
alert("data not insert sucessful");

</script>
<?php

 }



}





?>