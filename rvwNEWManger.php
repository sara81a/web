<?php
$host="localhost";   $duus="root";
$dbp="";     $dbname="webs";

$db=mysqli_connect($host,$duus,$dbp,$dbname);

//$id=$_GET['id'];



if(!$db){
die("error in database connection".mysqli_error($db));
}
else{ 
    $id=$_GET['id'];  
    $Query="SELECT service_rate, recommend,Appid,feedback from feedback WHERE Appid=$id "; 
$run=$db -> query($Query);
if(!empty($run->num_rows) && ($run->num_rows>0)){
    while($row=$run -> fetch_assoc()){

        $service_rate=$row['service_rate'];

        $five_checked=$row['service_rate']=='5' ?'checked' : '';
        $four_checked=$row['service_rate']=='4' ?'checked' : '';
        $three_checked=$row['service_rate']=='3' ?'checked' : '';
        $tow_checked=$row['service_rate']=='2' ?'checked' : '';
        $one_checked=$row['service_rate']=='1' ?'checked' : '';
      
        $recommend=$row['recommend'];
        $feedback=$row['feedback'];
   

    }
}
}
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  
  <title>Feedback</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

    <link href="Header and Footer.css" rel="stylesheet"/> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"rel="stylesheet"/> 

    <link rel="preconnect" href="https://fonts.googleapis.com">
   
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="srvw.css">
</head>
<body>

    <header>
       
        <a href="./Home Manager.html" class="logo"><img src="logo.png" alt="logo" height="50rem" ><span style="font-size: 40px;">WEBETS</span></a>
    
        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fas fa-bars"></label>
    
       <nav class="navbar">
            <ul class="nav-list">
                <li  ><a href="home-owner.html">Home</a>
                  </li>
                  
                  
               <li><a href="pageone.html">Services</a></li> 
               <li><a href="AboutUs.html">About Us</a></li> 
                <li class="move-right-btn" ><a href="#"id="profile"><i class="fas fa-user" ></i></a>
                    <ul class="sub-menu" id="sub-menu-arrow2"> 
                      <li ><a href="Owner_profile.html">View Profile</a></li>
                      <li><a href="My_pets_list.html">Pets</a></li>
                      <li><a href="main.html">Sign Out</a></li>
                
                
                      </ul></li>
              </ul>
            
            <!-- ****if you're working on a pet owner view replace <i class="fa-solid fa-user-doctor"> with <i class="fa-solid fa-user"></i>  -->
    
    
        </nav>
    
    </header>
<section>
    
    <h1 style="text-align: center; font-size: 70px; color: black";><b> Review your appointment</b></h1>

    <img src="mm.png" alt="Pet using Laptop" id="m" style="width:500px;height:600px;">
    <img src="ff.png" alt="Pet using Laptop" id="f" style="width:500px;height:600px;">

<div class="out">
    <div class="container">
        
<?php 
//therE is in table value =appid show

    echo'  <form action="#" method="POST" class="inputA"  >';      
    echo' <p class="imp">Help Us Improve!</p>';
    echo' <br>';
    echo' <p class="rt">Rate our service</p>';
    echo' <div class="rate">';
    echo'  <input type="radio" id="star5" name="rate" value="5"  readonly '.$five_checked.'/>';
    echo' <label for="star5" title="text">5 stars</label>';
    echo' <input type="radio" id="star4" name="rate" value="4"   readonly '.$four_checked.'/>';
    echo' <label for="star4" title="text">4 stars</label>';
    echo' <input type="radio" id="star3" name="rate" value="3"   readonly '.$three_checked.' />';
    echo'  <label for="star3" title="text">3 stars</label>';
    echo' <input type="radio" id="star2" name="rate" value="2"  readonly '.$tow_checked.'/>';
    echo' <label for="star2" title="text">2 stars</label>';
    echo' <input type="radio" id="star1" name="rate" value="1"  readonly'.$one_checked.' />';
    echo'   <label for="star1" title="text">1 star</label>';
    echo' </div>';
    echo' <br><br>';
    echo' <p> any improvements?:</p> ';
echo' <div id="ta">';
echo' <textarea name="recommend"  rows="5" cols="35" style="border: solid 1px grey;" value="" readonly>'.$recommend.' </textarea>';
echo' <br>';
echo' <p> Write a review:</p>';

echo' <textarea name="feedb" rows="5" cols="35" style="border: solid 1px grey;" value="" readonly>'.$feedback.'</textarea>';
echo'</div><br>';
echo'<button name="back" class="submit"><a href="Previous_Page.php" >Back </a></button>';
echo'</div>'; echo'</div>'; echo '</form>';


?>
</section>



  <div class="footer">
            <div class="box-container">
                
                <div class="box">
                    <h3>Quick links</h3>
                    <a href="home-owner.html">Home</a>
                    <a href="pageone.html">Services</a>
                    <a href="AboutUs.html">About US</a>    
                </div>
                <div class="box">
                    <h3>Email Us</h3>  
                    <div class="info">
                       <!--   <i class="fa-brands fa-facebook-f"></i>
                         <a href="https://www.facebook.com/campaign/landing.php?campaign_id=1652911352&extra_1=s%7Cc%7C318309974107%7Ce%7Cfacebook%20com%20login%7C&placement=&creative=318309974107&keyword=facebook%20com%20login&partner_id=googlesem&extra_2=campaignid%3D1652911352%26adgroupid%3D64530180398%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-296947902365%26loc_physical_ms%3D9076972%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQiApL2QBhC8ARIsAGMm-KHd6xAFv1WKdPrMAwFdNWRMSInrgO9iafddEJ0Jnt1zOn3sLR5yi2kaAt5CEALw_wcB">Facebook</a>
                    </div>
                    <div class="info">-->
                        
                        <i class="fas fa-envelope"></i>
                                    <a href="mailto:StudentID@student.ksu.edu.sa">Email</a>
                    </div>
                   <!-- <div class="info">
        
                        <i class="fa-brands fa-twitter"></i>
                                    <a href="https://twitter.com/home">Twitter</a>
                    </div> -->
                </div>
                <div class="box">
                    <h3>Contact Information</h3>
                    <div class="info">
                        <i class="fas fa-phone"></i>
                        <p>+123-456-789 <br> +111-222-3333</p>
                    </div>
                  <!--     <div class="info">
                            <i class="fas fa-envelope"></i>
                            <p>costumerService@Healed.com <br> costumerService2@Healed.com</p>
                        </div>-->
                       
                </div>
                
            </div>
            <h1 class="credit">&copy; copyright @ 2022 by software Engineers</h1>
        </div>
</body>

    </html>
<?php

//display form database i have
if(isset($_POST['back'] )){
   // header("Previous_Page.php");
    ob_end_flush();
}

mysqli_close($db);

?>
