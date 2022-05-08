<?php 



?>

<?php

$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";
if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!isset($_GET['id'] )){
   die('id not provided');

}
$id=$_GET['id'];

$query="SELECT  about, vision,location,photoa ,phptol FROM aboutus";  ;



if(!($result=mysqli_query($db2,$query)))
die("<p>the qurey error</p>");


$row=mysqli_fetch_array($result);


///
/*
$query2="SELECT  Nservice FROM servicemanager";

if(!($result2=mysqli_query($db2,$query2)))
die("<p>the qurey error</p>");



$row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
mysqli_free_result($result2);
///
//mysqli_free_result($result);*/
mysqli_close($db2);
//print_r($pizzas);
?>

<!DOCTYPE html>
<html>
    <head>
       
       <meta charset="UTF-8">
       <title>editMaxApp1 </title>
       <link rel="stylesheet" href="editStyle.css">
       <link rel="stylesheet" href="Header and Footer.css">
      <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

       <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
   
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
                
          
        
        
            </nav>
    
    </header>
    <section>
       
      
        <div class="wrapper bg-white mt-sm-5">
            <h4 class="pb-4 border-bottom" style="font-size: 40px; color: #ADD8E6; text-align: center; ">Edit About us:</h4>

            
           <!-- <div class="iimg">
                <img src="n.png" alt="user" >
           
                 
                </div>
                <br><br>-->
                <br>
            <form  class="inputA" enctype='multipart/form-data' method="POST" name="testForm3" onsubmit="return(validationFunc3())"  action="updateubout.php?id=<?php echo $id; ?>" >
                
           
               
 <img id="addi"   width="200" height="100"  src="data:image/jpeg;base64,<?php echo base64_encode($row['phptol']); ?>"  >  
       <input type="file" id="phAbo"  name="fileim" /> 
       <br><br>

               
                               <div class="py-2">
                           <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname"> About:</label> <textarea class="bg-light form-control"  name="about" row="4" required>"<?php echo $row['about']; ?>" </textarea></div>
                               </div></div>
                        <br><br>
                               <div class="py-2">
                           <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname"> vision:</label> <textarea class="bg-light form-control"  name="vision" row="4" required>"<?php echo $row['vision']; ?>" </textarea></div>
                               </div></div>
<br><br>
                     <div class="py-2">
                           <div class="row py-2">
                    <div class="col-md-6 pt-md-0 pt-3"> <label for="lastname"> location:</label> <textarea class="bg-light form-control"  name="location" row="4" required>"<?php echo $row['location']; ?>" </textarea></div>
                               </div></div>

                            
                        

                <div class="py-3 pb-4 border-bottom" > 
                    <input type="submit" name="submit"  class="btn border button">
            </div>
        
        </div>
        </form>
       <!-- <div class="pic"><img src="IMG_3875-removebg-preview.png" alt=""></div>
        <div class="pic2"><img src="m.png" alt=""></div>-->
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
                    <div class="info">
                        <i class="fas fa-envelope"></i>
                        <p>costumerService@Healed.com <br> costumerService2@Healed.com</p>
                    </div>
                   
            </div>
            
        </div>
        <h1 class="credit">&copy; copyright @ 2022 by software Engineers</h1>
    </div>
    <script src="editabo.js"> </script>
    </body>
</html>
