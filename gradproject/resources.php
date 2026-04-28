<!DOCTYPE html>
<!-- Declares this file as an HTML5 document so browsers know how to interpret it -->

<html lang="en">
<!--"lang" helps screen readers and search engines -->

<!--
 Name: Brian Kaestner
 Date: 2/2/1026
 Course: Web Design 
 Description: Resources page
  This header is for documentation and helps track project details.
-->

<head>
  <!-- The <head> contains metadata and resources that are NOT displayed on the page -->

  <meta charset="utf-8">
  <!-- Sets the character encoding so text displays correctly -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Makes the layout responsive on phones and tablets -->


    <link rel="shortcut icon" type="image/x-icon" href="webcontent/favicon.ico">
  <title>Resources Page</title>
  <!-- The title that appears in the browser tab -->
   <!-- Custom font used here -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="nav.css">
  <!-- Connects an external CSS file for styling -->
 
</head>

 <body>
  <!-- Everything visible to the user goes inside the <body> -->

   <?php include 'header.php'; ?>
   
<main>
      <!-- Title to the body page -->
       <!-- Custom font used here -->
    <h1>Resources</h1>

  <div class="resource-card">
    <!-- Custom font used here -->
    <h2>IXL Learning</h2>
    <p id="first">IXL Learning. (n.d.). Solve exponential equations by rewriting the base. IXL.</p>
    <a href="https://www.ixl.com/math/algebra-2/solve-exponential-equations-by-rewriting-the-base" target="_blank">IXL exponential equations</a>
    <p>Used for practice solving exponential equations.</p>
  </div>
  <div class="resource-card">
    <h2>McGraw Hill Algebra 2 Textbook</h2>
    <p>McGraw Hill. (2012). Algebra 2 (Student ed.). McGraw Hill.</p>
    <a href="https://www.mheducation.com/prek-12/program/microsites/MKTSP-GCA06M0/algebra-2.html" target="_blank">McGraw Hill textbook</a>
    <p>Used for examples and explanations from the school textbook.</p>
  </div>
  <div class="resource-card">
    <h2>Khan Academy Video</h2>
    <p>Khan Academy. (2016, February 17). Solving exponential equations using exponent properties [Video]. YouTube.</p>
    <a href="https://www.youtube.com/watch?v=etl9KKf6se0" target="_blank">Video of solving exponential equations</a>
    <p>Used for video instruction on solving exponential equations.</p>
  </div>
  <div class="resource-card">
    <h2>Missouri Learning Standards</h2>
    <p>Missouri Department of Elementary and Secondary Education. (2020). Missouri Learning Standards: Mathematics.</p>
    <a href="https://dese.mo.gov/college-career-readiness/curriculum/missouri-learning-standards" target="_blank">Missouri Learning Standard</a>
    <p>Used to select and align learning standards.</p>
  </div>
  <div class="resource-card">
    <h2>Desmos Graphing Calculator</h2>
    <p>Desmos. (n.d.). Exponential functions [Interactive graph].</p>
    <a href="https://www.desmos.com/calculator/3fisjexbvp" target="_blank">Desmos graphing</a>
    <p>Used for graphing exponential functions.</p>
  </div>
  <div class="resource-card">
    <h2>iStock Photo</h2>
    <p>Ktasimarr. (2018). Drawing business growth and rapid success [Photograph]. iStock.</p>
    <a href="https://www.istockphoto.com/photo/drawing-business-growth-and-rapid-success-gm948053002-258846629" target="_blank">View Image</a>
    <p>Image used on the home page.</p>
  </div>
  <div class="resource-card">
    <h2>Kate's Math Lessons</h2>
    <p>Kate. (n.d.). Solving exponential equations.</p>
    <a href="https://www.katesmathlessons.com/solving-exponential-equations.html" target="_blank">Solving exponential equations lesson</a>
    <p>Image used on the content page.</p>
  </div>
  <div class="resource-card">
    <h2>Microsoft Copilot</h2>
    <p>Microsoft Copilot was used as a digital writing assistant during the development of this material, supporting idea generation, organization, and wording.</p>
  </div>

    </main>

   <?php include 'footer.php'; ?>

 </body>

 
</html>
