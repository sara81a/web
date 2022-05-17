<?php
	$host="localhost";   $duus="root";
    $dbp="";     $dbname="webs";
    if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
    die("<p>the connection error</p>");


    if(!isset($_GET['id'] )){
        die('id not provided');
    
    } 
    $id=$_GET['id'];
    if(isset($_POST['submit'])){
    $Nservice=$_POST['Nservice'];
	$price=$_POST['price'];
    $description=$_POST['description'];
	//$note=$_POST['note'];

   
        if(isset($_FILES['photo'])){
            if(isset($_FILES['photo']['tmp_name']  )){
            $phptol2=$_FILES['photo']['tmp_name'];
        $phptol2=addslashes(file_get_contents($phptol2));  }}

            }
    
   
   if( mysqli_query($db2,"UPDATE  servicemanager set Nservice='$Nservice', price ='$price' , description='$description',photo='$phptol2'  where  serviceID='$id'"));
	echo '<script>alert("Service is Updated succsefully")</script>';

 header('location:showservice.php');
  
    mysqli_close($db2);
?>