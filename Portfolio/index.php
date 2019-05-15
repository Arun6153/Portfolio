<?php

$con=mysql_connect('localhost','root','');
mysql_select_db('cst_portfolio',$con);

$test="NOT Work";

  if(isset($_POST['btn']) )
  {
    if(!empty($_POST['username']) && !empty($_POST['useremail']) && !empty($_POST['contactext']))
    {
      $n=$_POST['username'];
      $e=$_POST['useremail'];
      $ct=$_POST['contactext'];
      mysql_query("INSERT INTO contact(name,email,discription) VALUES('$n','$e','$ct')");
      //mail('sarun6153@gmail.com','contact_info','$n want to share some updates with you.','From: h.r.budddddy@gmail.com');
        
    }
    
  }

?>


<!DOCTYPE html>
<html>
<head>
  <meta name="veiwport" content="width=device-width,initial-scale=1">
  <title>PortFolio</title>
    <link rel="stylesheet" type="text/css" href="Style/projectPart.css">
    <link rel="stylesheet" type="text/css" href="Style/footer.css">
    <link rel="stylesheet" type="text/css" href="Style/skillPart.css">
  <link rel="stylesheet" type="text/css" href="Style/realMoodAura.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:300" rel="stylesheet">
  <style type="text/css">html{scroll-behavior: smooth;}</style>
</head>
<body id="home23">

<div class="container-fluid">
<div class="headerPart" style="z-index: 10000">
  <ul id="ho">
  <li><a class="h1" href="#home23">HOME</a></li> 
  <li><a class="h1" href="#ab">ABOUT</a></li>
  <li><a class="h1" href="#si">SIDEWORK</a></li>
  <li><a class="h1" href="#pr">PROJECT</a></li>
  <li><a class="h1" href="#sk">SKILLS</a></li>
  <li><a class="h1" href="#co">CONTACT</a></li>
</ul>
</div>



<div class="head2"> P O R T F O L I O<sub style="font-size: 15px;">ARUN SAINI</sub></div>
<div class="parallax"></div>



<div class="head-ab" id="ab" style="background: white;">
  <video autoplay muted loop>
    <source src="Media/about.mp4" type="video/mp4">
  </video>
  <div style="  background: rgba(0,0,0,0);position: absolute;top: 0; right: 0;bottom: 0;left: 0;display: flex;align-items: center;justify-content: center;">
    <h1>A B O U T</h1><br><br><br>
    </div>
    <div style="word-spacing: 7px; background: rgba(0,0,0,0);position: absolute;padding:20vh 20% 0 20%; right: 0;bottom:-80%;left: 0;display: flex;align-items: center;justify-content: center;"><h4>“My name is Arun Saini, and I’m currently studying in Chitkar University(H.P). I have experience in various technologies, some of them are mentioned in below. I am pursuing bachelor’s degree in CS education. I love to gain knowledge. From Feb - April(2019) i have completed my 3 Projects Which are dynamic. I consider myself a good Full Stack Developer, I have a good sense of humor and i also have a great vocal.<br><br><i style="padding: 0 0 0 60%;">“Always strive for better work”</i></h4>
  </div>
</div>



<div class="head-sdw" id="si" style=" background-color: #B2A635;">
  <h1 style="position: relative;left:32%;padding-bottom: 3px;">S I D E W O R K</h1>
  <a target="_blank" href="subFiles\log_in.php"><i class="fa fa-youtube"></i></a>

</div>



<div class="head" id="pr">
<div class="head-t">
  <h2 style="border-bottom:1px solid;" >P R O J E C T S</h2>
</div>
<div class="head-r">
  <div  style="background-color: #6B0944;">
  <h2><a href="https://github.com/Arun6153/TicTacToe">TicTacToe</a></h2>
  <div style="width:80%;margin-left: 10%;"><p style="font-size: 17px;">I made this TicTacToe Game with C++ language , just by using basic concepts. I have uploaded its source code at Github(Arun6153).Is you wanna see its <b style="color: black;">source code</b> then click on Heading. 
  </p></div>
  </div>
  <div style="background-color: #2D6739;">
  <h2><a href="http://localhost/project/index.php">Exam Management System</a></h2>
  <div style="width:80%;margin-left: 10%;"><p style="font-size: 17px;">I made this project in just 3 days .Its Front End, Back End  and its DataBase part is done by me , as i have mentioned above that i am full stack developer. And yes i have uploaded this on Github server. If you wanna visit it, then just click here.
</p></div>
</div>
<div  style="background-color: rgb(31,88,107);">
  <h2><a href="http://localhost/WebApp-anbdroidVotingSys/">Android Voting System</a></h2>
  <div style="width:80%;margin-left: 10%;"><p style="font-size: 17px;">This webApp provides  function to vote. In this we can get vote on a particular dilemma/ambiguos situation on which participation of  people is required. So in webApp host will set the Querry in a form on which voting has required - so that all the Voters can vote according to their choice.  
</p></div>
</div>
<div  style="background-color: #5A5012;">
  <h2>Portfolio</h2>
  <div style="width:80%;margin-left: 10%;"><p style="font-size: 17px;">LOL - As this Portfolio(website) ,on which you are watching this text, is also my Project. Actually this website gives information regarding some collected stuff about me , like as sidework i love to work as VideoDirector at MoodAura.If you like my Work or have a querry , then feel free to contact me.</p>
</div></div>
</div>
</div>




<div class="skillP" id="sk" style=" background:linear-gradient(to bottom,#4da0b0,#d39d38);">
<div class="skills">
  <div style="padding: 4px 10px; margin-top: 60px;"><h2 style="text-align: center; color: black;font-size: 25px;"><pre>M Y   S K I L L S</pre></h2></div>
 <li> <h4>HTML</h4><span class="bar"><span class="html"></span></span> </li>
 <li> <h4>CSS3</h4><span class="bar"><span class="css"></span></span> </li>
 <li> <h4>JavaScript</h4><span class="bar"><span class="js"></span></span> </li>
 <li> <h4>C</h4><span class="bar"><span class="c"></span></span> </li>
 <li> <h4>C++</h4><span class="bar"><span class="cc"></span></span> </li>
 <li> <h4>PYTHON</h4><span class="bar"><span class="python"></span></span> </li>
 <li> <h4>SONY VEGAS PRO</h4><span class="bar"><span class="svp"></span></span> </li>
 <li> <h4>JAVA</h4><span class="bar"><span class="java"></span></span> </li>
</div>
</div>



<div class="contact-in" id="co"> </div>
<div class="contact">
  <div style="position:relative;color: white; top: 60px;width: 50%;">
    <h1 style="font-family: 'Montserrat', sans-serif;font-size: 3vw; position: relative; left: 5%;">Get In Touch</h1>
    <h3 style="position:relative;top:-15px;left:5%; opacity: 0.5;" ><i>" Always Strive For Better Work "</i></h3>
  </div>
  <div class="input">

      <form action="index.php" method="post" class="box-form">
        <input style="width: 49%;" type="text" name="username" placeholder="Name">
        <input style="width: 49%;" type="email" name="useremail" placeholder="Email"><br>
 <br><textarea style="width: 98%;"  name="contactext" placeholder="Enter Your Message Here!" rows="10" cols="48" wrap="hard"></textarea>
          <br><br><button class="submit1" name="btn" type="submit" value="Submit">Submit</button>
          <input class="reset1" type="reset" value="Reset">
      </form>

  </div>
  <div style="position:relative; left:5%;margin-top: 10vw;color:powderblue; text-shadow:2px 2px black; width: 50%;">
    <h2 style="color: brown;">Phone No.</h2>
    <h3><a href="tel:+91 - 8607972097" style="text-decoration: none;color:rgba(0,0,0,0.3);"> +91 - 8607972097</a></h3>
    <h3><a href="tel:+91 - 7082313499" style="text-decoration: none;color:rgba(0,0,0,0.3);">+91 - 7082313499</a></h3>
  </div>
</div>


<div class="foot-main-div">
  <div class="border-footer">
   <div class="footer-social-icons">
    <a class="tb aa" target="_blank" href="https://twitter.com/ArunSai60435674/followers"><i class="fa fa-twitter"></i></a>
    <a class="tb ab" target="_blank" href="https://www.instagram.com/a_saini_in/"><i class="fa fa-instagram"></i></a>
    <a class="tb ac" target="_blank" href="https://www.quora.com/profile/Arun-Saini-266"><i class="fa fa-quora"></i></a>
    <a class="tb ad" target="_blank" href="https://github.com/Arun6153"><i class="fa fa-github"></i></a>
    <a class="tb ae" target="_blank" href="https://www.facebook.com/profile.php?id=100004857307676"><i class="fa fa-facebook"></i></a>
    <a class="tb af" target="_blank" href="https://www.linkedin.com/in/arun-saini-6bba81148/"><i class="fa fa-linkedin"></i></a>
    <a class="tb ag" target="_blank" href="https://www.youtube.com/channel/UCY1Eo15VNMQT6Ob2JZ2zVEg?view_as=subscriber"><i class="fa fa-youtube"></i></a>
  </div>
</div>
<div style="position: relative; text-align: center;">
  <h4>Lives in kalka(Haryana) , India</h4>
  </div>
</div>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/debug.addIndicators.min.js"></script>
<script src="app.js"></script>
</body>
</html>