<!DOCTYPE html>
<!-- Declares this file as an HTML5 document so browsers know how to interpret it -->

<html lang="en">
<!--"lang" helps screen readers and search engines -->

<!--
 Name: Brian Kaestner
 Date: 3/12/1026
 Course: Web Design 
 Description: Contact Page
  This header is for documentation and helps track project details.
-->

<head>
  <!-- The <head> contains metadata and resources that are NOT displayed on the page -->

  <meta charset="utf-8">
  <!-- Sets the character encoding so text displays correctly -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Makes the layout responsive on phones and tablets -->
  
  <link rel="shortcut icon" type="image/x-icon" href="webcontent/favicon.ico">

  <title>Contact Page</title>
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
    <h1>Contact Me</h1>
    <form class="contact-form">

  <label for="title">Title</label>
  <select id="title" name="title" required>
    <option value="" disabled selected>Select your title</option>
    <option>Mr.</option>
    <option>Ms.</option>
    <option>Mrs.</option>
    <option>Dr.</option>
    <option>Prof.</option>
  </select>

  <label for="fullname">Full Name</label>
  <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

  <label for="email">Email Address</label>
  <input type="email" id="email" name="email" placeholder="Enter your email" required>

  <label for="message">Message</label>
  <textarea id="message" name="message" placeholder="Type your message here" required></textarea>

  <label for="reason">Reason for Contact</label>
  <select id="reason" name="reason" required>
    <option value="" disabled selected>Select a reason</option>
    <option>General Question</option>
    <option>Classroom Inquiry</option>
    <option>Tutoring Request</option>
    <option>Professional Collaboration</option>
  </select>

  <button type="submit" class="submit-btn">Submit</button>

</form>

   </main>

      <?php include 'footer.php'; ?>

   </body>
 
</html>
