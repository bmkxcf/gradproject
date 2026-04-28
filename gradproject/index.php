<!DOCTYPE html>
<!-- Declares this file as an HTML5 document so browsers know how to interpret it -->

<html lang="en">
<!--"lang" helps screen readers and search engines -->

<!--
 Name: Brian Kaestner
 Date: 3/2/2026
 Course: Web Design 
 Description: Home page
  This header is for documentation and helps track project details.
-->

<head>
  <!-- The <head> contains metadata and resources that are NOT displayed on the page -->

  <meta charset="utf-8">
  <!-- Sets the character encoding so text displays correctly -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Makes the layout responsive on phones and tablets -->

  <link rel="shortcut icon" type="image/x-icon" href="webcontent/favicon.ico">
  <title>Home Page</title>
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

  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to Algebra II</h1>
      <blockquote>"Sometimes the questions are complicated and the answers are simple." — Dr. Seuss</blockquote>
      <a href="https://yourcountdown.to/pi-day" class="btn">PI Day Countdown</a>
    </div>
  </section>

   <main>
    <h2>Home Page</h2>
    <h3>Welcome</h3>
    <p id="first">Welcome to our Algebra 2 learning space, where exponential equations become approachable and even understandable. This page will guide you step-by-step as you build confidence with one of the most powerful topics in mathematics solving equations.</p>

    <blockquote>“Small steps lead to big growth — just like exponential functions.”</blockquote>

    <p>Solving exponential equations is a key skill in Algebra 2 and an essential part of understanding how quantities grow and change in the real world. These equations appear in situations involving population growth, radioactive decay, compound interest, and many other natural and financial processes. In this lesson, you’ll learn how to recognize exponential equations by identifying growth and decay, and rewrite expressions using common bases to solve equations that can’t be simplified by inspection. You’ll also explore strategies for isolating exponential expressions and avoiding common mistakes students often make. By the end, you’ll have a strong foundation for solving exponential equations with confidence and accuracy.  These skills will support you in advanced math courses and real-life applications.</p>
    
   </main>

      <?php include 'footer.php'; ?>

</html>
