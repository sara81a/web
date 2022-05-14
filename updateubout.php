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
    if(isset($_FILES['fileim'])){
        if(isset($_FILES['fileim']['tmp_name']  )){
        $phptol=$_FILES['fileim']['tmp_name'];
    $phptol=addslashes(file_get_contents($phptol));  }}
    $about=$_POST['about'];
	$vision=$_POST['vision'];
    $location=$_POST['location'];
	//$photoa=$_POST['photoa'];
    }
    else{
        echo "error";
    }
   if( mysqli_query($db2,"UPDATE  aboutus set about='$about', vision='$vision' , location='$location', phptol='$phptol'  where aboutid='$id' "))
	echo '<script>alert("about us is updated")</script>';  
    header('location:AboutUsU.php');   
 header('location:AboutUsM.php');


    
   
    
mysqli_close($db2);
?>


