<?php



//$db=mysql_connect("localhost","root","","webs");
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

$query="SELECT   serviceID ,Nservice,price,description,photo FROM  servicemanager ";
/*$query="SELECT serviceID, photo,  AppointmentID, service,date,time,note FROM setappointment ,servicemanager WHERE serviceID=AppointmentID";*/


//$query2="SELECT serviceID, photo FROM servicemanager";

if(!($db2=mysqli_connect($host,$duus,$dbp,$dbname)))
die("<p>the connection error</p>");

if(!($result=mysqli_query($db2,$query)))
die("<p>the qurey error</p>");
$row=mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);


//$id = mysqli_real_escape_string($db2, $_POST['id']);
//if(!($result2=mysqli_query($db2,$query2)))
//die("<p>the qurey error</p>");
//$row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
mysqli_close($db2);
//print_r($pizzas);

?>








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>showService</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="sara.css" />
    <link rel="stylesheet" href="Header and Footer.css" />
    <script src="https://kit.fontawesome.com/493718cddd.js" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="profile_style.css">
  
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
  <div class="icons2" >  
            <a href="#"> <img src="back-removebg-preview.png" ></a>
       </div>
    <section class="section_Body">
      <div class="row">
          
        <h1 class="head">Service information:</h1>
      </div>

      <div  style="width:70%; height:222%; margin-left:15%;" class="card">
      <a  style="font-size:35px;" href="ReqPage.php" class="rvw">ADD SERVICE <i  style = "font-size:40px;" class="fas fa-plus"></i></a>
</div>   

      <ul style="margin-bottom:20px; display:inline;" > 
 <div style="display:inline; " class="row">
 <div style="display:inline;" class="column">
          
            <?php foreach($row as $appoi){  ?>
           
                <div class="card" style="width:65%; height=10%; margin-left:18%;">
                <div class="img-container"> 
    <img style="margin-left:2%; padding-bottom:10%;"  width="270" height="160" alt="could not dawnload" src="data:image/jpeg;base64,<?php echo base64_encode($appoi['photo']); ?>"  >  

</div>
                 
            <?php  echo '<br> ';   ?>
                    <p style="font-size:23px;" ><?php echo"Name of service:" .$appoi['Nservice'];   ?></p>
                    <p style="font-size:23px;"><?php echo"price:" .$appoi['price'];  ?></p>
                    <p style="font-size:23px;"><?php echo"description:" .$appoi['description'];   ?></p>
                    <div class="icons">
        <a href="editService.php?id=<?php echo $appoi['serviceID']; ?>">Edit <i class="fas fa-pen"></i></a>
        <a href="deleteService.php?id=<?php echo $appoi['serviceID']; ?>" >delete <i class="fas fa-pen"></i></a></div>
                   
                    
        </ul>
</div>

<?php }?>
</div>
</div>

            






<!-- 
      <div class="row">
   





		<div class="column">
            <div class="card">
              <div class="img-container">
                <img src="n.png" />
              </div>
              <h3>Max</h3>
              <p>Service :Dental Care</p>
              <p>date :  4:30PM</p>
              <p>Time : 8/2/2022 - 4:30PM</p>
            <p>note:   </p>
              <div class="icons">
        <a href="editMaxApp1.html" class="rvw">edit <i class="fas fa-pen"></i></a>
        <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>
              </div>
            </div>
          </div>

<br><br>
<br><br>
<br><br>
           





        <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="jen.png" />
              </div>
              <h3>Lisa</h3>
              <p>Service :Hair cut</p>
              <p>Time & date : 2/2/2022 - 7:15PM</p>
              <div class="icons">
              
				<a href="editLiApp1.html" class="rvw">edit <i class="fas fa-pen"></i></a>
        <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>
              </div>
            </div>
          </div>

	







        <div class="column">
          <div class="card">
            <div class="img-container">
              <img src="cat.png" />
            </div>
            <h3>Mochi</h3>
            <p>Service :grooming</p>
			<p>Time & date : 2/2/2022 - 7:15PM</p>
            <div class="icons">
            
                <a href="editMoApp1.html" class="rvw">edit <i class="fas fa-pen"></i></a>
                <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>

            </div>
          </div>
        </div>







<div class="column">
	<div class="card">
	  <div class="img-container">
		<img src="jen.png" />
	  </div>
	  <h3>Lisa</h3>
	  <p>Service :Dental Care</p>
	  <p>Time & date : 3/1/2022 - 10:00AM</p>
	  <div class="icons">
	  
		<a href="editLiApp2.html" class="rvw">edit <i class="fas fa-pen"></i></a>
        <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>

	  </div>
	</div>
  </div>









          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="n.png" />
              </div>
              <h3>Max</h3>
               <p>Service :grooming</p>
			  <p>Time & date : 30/1/2022 - 11:40AM</p>
			  <div class="icons">
			  
                <a href="editMaxApp2.html" class="rvw">edit <i class="fas fa-pen"></i></a>
                <a href="#" class="rvw">delete <i class="fas fa-pen"></i></a>

                
              </div>
            </div>
          </div>




-->
<!--i need it
<div class="column">
  <div class="card"> 
   <div class="img-container"> 	<img src="pluus.png" />
   </div>
    <div class="icons"> 
     
      <a  style="text-align: left;" href="set avalible app finally.html">Set Available Appointment<br></a>
    </div>
  </div>
</div>-->


            
        
     
     <!-- </div>-->
    </section>

  </section>

  <div class="footer">
    <div class="box-container">
        
        <div class="box">
            <h3>Quick links</h3>
            <a href="#">Home</a>
            <a href="#">Services</a>
            <a href="#">About US</a>    
        </div>
        <div class="box">
            <h3>Email Us</h3>  
           
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