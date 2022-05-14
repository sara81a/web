<?php
	$host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");


    if(!isset($_GET['id'] )){
        die('id not provided');
    
    } 
    $id=$_GET['id'];
    
    $Nservice=$_POST['Nservice'];
	$price=$_POST['price'];
    $description=$_POST['description'];
	//$note=$_POST['note'];


   
   if( mysqli_query($db2,"UPDATE  servicemanager set Nservice='$Nservice', price ='$price' , description='$description',photo=null  where  serviceID='$id'"));
	echo '<script>alert("Service is Updated succsefully")</script>';

 header('location:showservice.php');
  
    mysqli_close($db2);
?>