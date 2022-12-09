<!DOCTYPE html>
<html>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact me 📬</title>
    <link rel="stylesheet" href="css\style.css">
    <link rel="icon" href="imgs\vb_favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet"> 

<style>
    
/*--------------------------------------------*/
body{
  background-color: #E8F3D6;
 }
 
 .placeholder{
   font-size: 50px;
 }
 
 /*--------------------------------------------*/
 h3{
   margin-right: 25px;
   font-size: 17px;
   color: #513252;
   text-decoration: underline;
 }
 
 /*--------------------------------------------*/
 .container{
   border: 4px solid #810CA8;
   border-radius: 10px;
   width: 350px;
   height: 225px;
   padding: 15px;
   margin-bottom: 25px;
 }
 /*------------------------*/
 .urname{
   margin-top: 25px;
   padding: 9px 5px;
   width: 175px;
   border: 2px solid #3AB4F2;
   border-radius: 10px;
   transition: width 0.4s ease-in-out;
   text-align: center;
   font-family: 'Ubuntu';
 }
 
 .urname:hover{
   background-color: #FEF5AC;
 }
 
 .urname:focus{
   width: 235px;
   background-color: #FEF5AC;
 }
 
 /*------------------------*/
 .email{
   margin-top: 35px;
   padding: 9px 5px;
   width: 175px;
   border: 2px solid #3AB4F2;
   border-radius: 10px;
   transition: width 0.4s ease-in-out;
   text-align: center;
   font-family: 'Ubuntu';
 }
 
 .email:hover{
   background-color: #FEF5AC;
 }
 
 .email:focus{
   width: 235px;
   background-color: #FEF5AC;
 }
 
 /*------------------------*/
 .urmessage{
   margin-top: 35px;
   margin-left: 0px;
   border: 3px solid #400D51;
   border-radius: 10px;
   font-family: 'Ubuntu';
 }
 
 .urmessage:hover{
   border: 3px solid #400D51;
   background-color: #FEF5AC;
   border-radius: 10px;
 }
 
 .urmessage:focus{
   background-color: #FEF5AC;
 }
 
 /*------------------------*/
 .submit{
   margin-top: 35px;
   width: 80px;
   padding: 7px;
   background-color: #FFF80A;
   color: black;
   border: 2px solid #293462;
   border-radius: 10px;
   font-family: 'Ubuntu';
 }
 .submit:hover{
   font-size: 16px;
   transition: 0.5s ease-in-out;
   border: 2px solid #FFF80A;
   background-color: #293462;
   color: #FFF80A;
 }
 
 /*------------------------*/
 .reset{
   margin-left: 38px;
   margin-top: 35px;
   width: 80px;
   padding: 7px;
   background-color: #FFF80A;
   color: black;
   border: 2px solid #293462;
   border-radius: 10px;
   font-family: 'Ubuntu';
 }
 .reset:hover{
   font-size: 16px;
   transition: 0.5s ease-in-out;
   border: 2px solid #FFF80A;
   background-color: #293462;
   color: #FFF80A;
 }
 
</style>
   
    </head>
<body>

  <div class="nav_bar" style="padding-left:16px; overflow-x:auto">
    <a href="index.html">🏠 Home</a>
    <a href="about.html">About me 🕵️‍♂️</a>
    <a class="active" href="contact.php">Contact me 📬</a>
  </div>

  <h3 style="margin-left: 18px;">Contact me 📬</h3>

  <center>
  <div class="container">
  
    <form action="insert.php" method="post">
      <input class="urname" type="text" placeholder="Full name" name="name" required><br>

      <input class="email" type="email" placeholder="Business / Personal E-mail" name="email" required><br>

      <input type="submit" class="submit" name="submit" value="Submit">

      <input type="reset" class="reset" value="Reset">
    </form>
    
   </div>
  </center>

  <hr class="contactme_hr">

    <div class="contactme_container">
      <div class="contact-me">
        <h2 class="getintouch">Get In Touch With Me 🤝</h2>
        <br>
        <h3>To discuss on hot topics or collab on projects</h3>
        <h3>👇</h3>
        <a style="text-decoration: none"; href="https://www.linkedin.com/in/ved-bulsara-294637225/" target="_blank">
          <img class="linkedin_logo" src="imgs\linkedin_logo.png" alt="linkedin logo"> 
        </a> 
  
        <a style="text-decoration: none"; href="https://github.com/vedbulsara04" target="_blank">
          <img class="github_logo" src="imgs\github.png" alt="github logo"> 
        </a>

        <a href="contact.html">
          <img class="email_gif" src="imgs\email.gif" alt="email">
        </a>

        <br><br>
  
        <a style="margin-right: 15px;"; class="website_link" href="https://vedbulsara04.github.io/vedbulsara/">
          My Website<span style="font-style:normal;">🕵️‍♂️</span>
        </a>
  
        <p>©2022 Ved Bulsara.</p>
        
      </div>
    </div>
      
  </body>
</html>
