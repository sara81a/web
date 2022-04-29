
<?php 
//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";


$query="SELECT  Nservice FROM servicemanager";



if(!($db=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!($result=mysqli_query($db,$query)))
die("<p>the qurey error</p>");


$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);


//$id = mysqli_real_escape_string($db2, $_POST['id']);





?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Set app finally</title>
	<link href="add-set.css" rel="stylesheet"/> 
	
    
	 <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

   <!-- Google Font -->
   <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
   <link
	 href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
	 rel="stylesheet"
   />
   <link rel="preconnect" href="https://fonts.googleapis.com">
   
    
   

    
    
  

    <!-- font awesome cdn link  -->
    
</head>
<body>


<header>
       
      <a href="./Home Manager.html" class="logo"><img src="logo.png" alt="logo" height="50rem" >
        <span style="font-size: 40px;">WEBETS</span></a>
            <input type="checkbox" id="menu-bar">
            <label for="menu-bar" class="fas fa-bars"></label>
        
            <nav class="navbar">
                <ul class="nav-list">
                    <li  ><a href="home-manager.html">Home</a>
                      
                      </li>
                      
                      
                   <li><a href="p1.html">Services</a></li> 

                   <li><a href="AboutusM.html">About Us</a></li> 
                    <li class="move-right-btn" ><a href="main.html"id="profile"><i class="fas fa-sign-out" ></i></a>
                     
                        </li>
                  </ul>
                
                <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
        
        
            </nav>
    
    </header>
  
    <section>
  





<div class="out">
<div class="container">
<h1 class="BookHead"> Set available appointment! </h1>

<form class="input" method="POST"  >


	
		<div class="selectPet">
		<strong>Select your service :</strong>
		<select id="selection" name="service">
			 <!--<option value="" data-subtitle="--" data-left="MaxPic.jpeg" selected>--Select your service--</option>
			<option value="checkup" data-subtitle="checkup" data-left="MaxPic.jpeg" >checkup</option>
			<option value="Grooming" data-subtitle="Grooming" data-left=".jpeg" >Grooming</option>
			<option value="boarding" data-subtitle="boarding" data-left=".jpeg" >Boarding</option>-->
			<?php foreach($row as $appoi){  ?>
				<option><?php echo $appoi['Nservice'];   ?>  </option>
				<?php }?>
		</select>
	</div>

	<br><br>
<br>


<div class="DateTime">
	<label for="date&time" ><strong>Enter the Date :</strong> </label>
	<input type="date" id="dateTime" name="date" required>
    </div>
	<br><br>
	<div class="DateTime">
		<label for="date&time" ><strong>Enter the Time :</strong> </label>
		<input type="time" id="Time" name="time" required>
		</div>
	
    

	<br><br>
    <label for="Note" ><strong>Add Note :</strong> <br>
	<textarea name="note" rows="4" cols="36" id="Note"Enter your Note about your Appointment></textarea></label>

	<br><br>

	
		
    
	
	<div class="end" >
	<input id="submit" name="submit" value="submit" type="submit" class="toogle" >
	<input id="reset" value="reset" type="reset" >
    </div>  	


	
</form>


</div>
</div>



</section>

<div class="footer">
  <div class="box-container">
	  
	  <div class="box">
		  <h3>Quick links</h3>
		  <a href="./Home Manager.html">Home</a>
		  <a href="./Services Manager.html">Services</a>
		  <a href="./About Us Manager.html">About US</a>    
	  </div>
	  <div class="box">
		  <h3>Find Us</h3>  
		  
		  <div class="info">
			  
			  <i class="fas fa-envelope"></i>
						  <a href="mailto:StudentID@student.ksu.edu.sa">Email</a>
		  </div>
		 
	  </div>
	  <div class="box">
		  <h3>Contact Information</h3>
		  <div class="info">
			  <i class="fas fa-phone"></i>
			  <p>+123-456-789 <br> +111-222-3333</p>
		  </div>
			 
			 
	  </div>
	  
  </div>
  <h1 class="credit">&copy; copyright @ 2022 by software Engineers</h1>
</div>









</body>
</html>
<?php

if(isset($_POST['submit'])){
$service=$_POST['service'];
$datee=$_POST['date'];
$time=$_POST['time'];
$notes=$_POST['note'];

$qry="INSERT  Into setappointment values(null,'$service' ,'$datee', '$time' ,'$notes')";

if(mysqli_query($db,$qry)){
    echo  '<script>alert("added sucsses"); </script>';}
//header('location:SetAvalibleAppFinally.php ');}

else{
    echo mysqli_error($db);}



}





?>