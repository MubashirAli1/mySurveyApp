<?php
$email=$_REQUEST['pemail'];
$country=$_REQUEST['pcountry'];
$q1=$_REQUEST['pa1'];
$q2=$_REQUEST['pa2'];
$q3=$_REQUEST['pa3'];
$q4=$_REQUEST['pa4'];
$q5=$_REQUEST['pa5'];
$q6=$_REQUEST['pa6'];
$q7=$_REQUEST['pa7'];
$q8=$_REQUEST['pa8'];
$q9=$_REQUEST['pa9'];
$q10=$_REQUEST['pa10'];


$con =  mysqli_connect('sql6.freemysqlhosting.net','sql6112842','d5w2TkFiFQ','sql6112842');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
	echo "kl";
}

$sql= "INSERT INTO allsurvey (email,country,q1,q2,q3,q4,q5,q6,q7,q8,q9,
q10) VALUES ('$email','$country','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";

$rest=mysqli_query($con,$sql);
mysqli_close($con);
?>