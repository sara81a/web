<?php
	$host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");


    if(!isset($_GET['id'] )){
        die('id not provided');
    
    } 
    $id=$_GET['id'];
    
    $service=$_POST['service'];
	$date=$_POST['date'];
    $time=$_POST['time'];
	$note=$_POST['note'];



    mysqli_query($db2,"UPDATE setappointment set service='$service', date='$date' , time='$time',note='$note' where  AppointmentID='$id'");
	header('location:manageS.php');
  
    mysqli_close($db2);
?>