<?php



//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

$query="SELECT  aboutid, phptol,about, vision,location,photoa  FROM aboutus";

if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!($result=mysqli_query($db2,$query)))
die("<p>the qurey error</p>");


$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);


//$id = mysqli_real_escape_string($db2, $_POST['id']);


//print_r($pizzas);

?>

<html >
    <head>
        

        
    <meta charset="UTF-8">
<title>4-interface</title>
<link rel="stylesheet" href="sara.css" />

<link rel="stylesheet" href="About3.css" />
 
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
   
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">
    
   

    
    
  

    <!-- font awesome cdn link  -->
    
    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
    
    </head>


    <body>
      <div class="bodyall" >


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



       <p class="floa">
       <?php foreach($row as $appoi){  ?>
       <img style="margin-left:20%;"  width="600" height="300"  src="data:image/jpeg;base64,<?php echo base64_encode($appoi['phptol']); ?>"  >  
    <?php }?>

       </p>
     <!--   <img  id="addi"  width="600" height="300"  src/>-->
       <!--<input type="file" id="phAbo" /> </p>-->
       


    
       	<div id="aboutt" class="beforsericle-about" > 
              <p >About Us</p></div>
              <br>
              
      <ul > 
 <div style="display:inline;" class="row">
 <div style="display:inline;" class="column">
          
            <?php foreach($row as $appoi){  ?>
                <div  style="width:800px; margin-left: 15%;" class="card">
                    <p><?php echo"" .$appoi['about'];   ?></p>
                    
                    
        </ul>
</div>
<?php }?>
</div>
</div>
       

  <div  class="beforsericle-aboutvison"> 
    <p > Our vision</p></div> 
    <ul> 
 <div style="display:inline; " class="row">
 <div style="display:inline;" class="column">
          
            <?php foreach($row as $appoi){  ?>
                <div style="width:800px; margin-left: 20%;" class="card">
                    <p><?php echo"" .$appoi['vision'];   ?></p>
                    
                    >
        </ul>
</div>
<?php }?>
</div>
</div>
   <!--
<div class="textara3">
<p>veterinary clinic means a facility for the medical care and treatment of pets,
enable owner to manage pet requests appointment ,add pet,seervice,veterinary clinic means a facility for the medical care and treatment of pets,
enable owner to manage pet requests appointment ,add pet,seervice</p>
<a class="pen" href="#"><li><a href="editAbout.html" ><i class="fas fa-pencil"></i> </a></li>
</div>

<br><br><br>-->

 <div class="beforsericle-aboutloaction"> 
    <p>Our Location</p></div>
    <br>
    <ul  > 
 <div style="display:inline;" class="row">
 <div style="display:inline;" class="column">
          
            <?php foreach($row as $appoi){  ?>
                <div  style="width:800px; margin-left: 20%;"  class="card">
                    <p><?php echo"" .$appoi['location'];   ?></p>
                    
               
      
    
        </ul>
</div>
<?php }?>
</div>
</div>
  
    <!--
      <div class="textara2">
        <p>veterinary clinic means a facility for the medical 
        </p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57955.6826379356!2d46.64733332089844!3d24.787571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee38cc5676f3d%3A0x6f95f398c8a198ff!2z2KfYsdmG2Kgg2YbYtyDZhNmE2K3ZitmI2KfZhtin2Kog2KfZhNin2YTZitmB2KkgLSDZgdix2Lkg2KfZhNmF2YTZgtin!5e0!3m2!1sar!2ssa!4v1644003072374!5m2!1sar!2ssa" width="270" height="120" frameborder="0" style="border:0" allowfullscreen ></iframe>
        <a class="pen" href="#"><li><a href="editAbout.html" ><i class="fas fa-pencil"></i> </a></li>
        </div>-->

    </section>


  <!-- header section ends -->
        <!-- Footer section starts -->
        <div class="footer">
            <div class="box-container">
                
                <div class="box">
                    <h3>Quick links</h3>
                    <a href="#">Home</a>
                    <a href="#">Services</a>
                    <a href="#">About US</a>    
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