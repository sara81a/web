<?php
	  
    if(!isset($_GET['id'] )){
        die('id not provided');
    
    }  

    $id=$_GET['id'];

    $host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");

	mysqli_query($db2,"DELETE from  setappointment where  AppointmentID='$id'");
header('location:manageS.php');
mysqli_close($db2);
?>