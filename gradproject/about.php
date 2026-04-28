<!DOCTYPE html>
<!-- Declares this file as an HTML5 document so browsers know how to interpret it -->

<html lang="en">
<!--"lang" helps screen readers and search engines -->

<!--
 Name: Brian Kaestner
 Date: 2/2/1026
 Course: Web Design 
 Description: about page
  This header is for documentation and helps track project details.
-->

<head>
  <!-- The <head> contains metadata and resources that are NOT displayed on the page -->

  <meta charset="utf-8">
  <!-- Sets the character encoding so text displays correctly -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Makes the layout responsive on phones and tablets -->

  <link rel="shortcut icon" type="image/x-icon" href="webcontent/favicon.ico">
  <title>About Page</title>
  <!-- The title that appears in the browser tab -->
   <!-- Custom font used here -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <!-- Connects an external CSS file for styling -->
 
</head>

 <body class="about-page">
  <!-- Everything visible to the user goes inside the <body> -->

<?php include 'header.php'; ?>

   <main>
      <!-- Title to the body page -->
    <h1>Brian Kaestner</h1>
    <h2>Educator credentials</h2>
    <p id="first">Hello my name is Brian Kaestner.  I am working towards my masters degree at the University of Missouri.  I am studying Learning Technology and Design with an emphasis in school.  I plan to graduate in December 2026.  I have my undergraduate from Lindenwood University in mathematics education.  I am currently a high school math teacher but have also taught middle school in the past.  Some of my hobbies include camping at different parks such as; The Grand Canyon, Yellowstone, Banff, Jasper, Glacier, Bryce Canyon, and Zion to name a few.  I am also interested in pc gaming and woodworking. Most of my woodworking experience is from working on different projects around my house.  My wife and I have two kids now, a three year old boy and a one year old baby girl.  The two kids now take up most of my time and money. </p>
    
    <ul class="list">
      <li>Oakville High School 2011 graduation</li>
      <li>Lindenwood University 2016 undergraduate in middle school mathematics education</li>
      <li>MEGA 2023 passed high school math certified </li>
      <li>Mizzou Grad 2026 MS in Learning Technologies and Design </li>
    </ul>

    <ul class="resume-link">
      <li><a href="webcontent/Kaestnerresume.pdf">Download My Resume</a></li>
    </ul> 

    <div class="media">
    <img src="webcontent/headshot.jpeg" alt="head shot photo of the autor" class="headshot">

    <figure class="mymovie">
     <video controls width="400">
      <source src="webcontent/mymovie.mp4" type="video/mp4"> 
      Your browser does not support the video tag.
     </video>
     <figcaption>Algebra II Video Instruction</figcaption>
    </figure>
   </div>

    
   </main>

   <?php include 'footer.php'; ?>

  </body>

</html>
