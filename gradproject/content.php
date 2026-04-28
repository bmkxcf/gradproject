<!DOCTYPE html>
<!-- Declares this file as an HTML5 document so browsers know how to interpret it -->

<html lang="en">
<!--"lang" helps screen readers and search engines -->

<!--
 Name: Brian Kaestner
 Date: 4/11/2026
 Course: Web Design 
 Description: Content Page
  This header is for documentation and helps track project details.
-->

<head>
  <!-- The <head> contains metadata and resources that are NOT displayed on the page -->

  <meta charset="utf-8">
  <!-- Sets the character encoding so text displays correctly -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Makes the layout responsive on phones and tablets -->

  <script src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
  
  <link rel="shortcut icon" type="image/x-icon" href="webcontent/favicon.ico">

  <title>Content Page</title>
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
    <div class="content-grid">

    <!-- Row 1 -->
    <article class="grid-box lesson-one" id="lesson1">
        <h2>Lesson One: Change‑of‑Base Formula</h2>

        <p>I can explain and apply the change‑of‑base formula to evaluate each step in solving an exponential equation.</p>

        <p>The change‑of‑base formula:</p>
        
\[ \log_b(a) = \frac{\log(a)}{\log(b)} = \frac{\ln(a)}{\ln(b)} \]

        <h3>Solve \(4^x = 30\)</h3>

        <p>Take log of both sides:</p>
        
\[ \log(4^x) = \log(30) \]

        <p>Use power rule:</p>
        
\[ x \log(4) = \log(30) \]

        <p>Solve for x:</p>
        
\[ x = \frac{\log(30)}{\log(4)} \]

        <p>
            <a href="https://www.khanacademy.org/math/algebra/x2f8bb11595b61c86:exponential-equations/x2f8bb11595b61c86:solve-exp-eq/v/solving-exponential-equations-using-exponent-properties" target="_blank">
                Khan Academy: Solving Exponential Equations
            </a>
        </p>
    </article>

    <article class="grid-box video">
    <h2>Video</h2>
    <div class="video-wrapper">
        <iframe 
            src="https://www.youtube.com/embed/etl9KKf6se0" 
            title="YouTube video"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    </div>
</article>

    <!-- Row 2 -->
    <article class="grid-box image-box">
        <h2>Image</h2>

    <img src="exponital.png" alt="Math check example" class="lesson-image">
</article>

    <article class="grid-box lesson-two" id="lesson2">
        <h2>Lesson Two: Verifying Solutions</h2>

        <p>I can check the reasonableness of my solution by substituting it back into the original exponential equation and interpreting the result.</p>

        <p>The model:</p>

\[ A(t) = 300e^{-0.3t} \]

        <p>Check the student’s solution \(t = 4.62\):</p>
        
\[ A(4.62) = 300e^{-0.3(4.62)} \]

        <p>Approximate value:</p>
        
\[ A(4.62) \approx 75 \]

    </article>


    <!-- Row 3 -->
    <article class="grid-box lesson-three" id="lesson3">
        <h2>Lesson Three: Graphing Exponential Functions</h2>

        <p>I can graph exponential functions and describe how changes in the equation affect the graph’s growth or decay.</p>

        <h3>Students graph:</h3>
        
\[ f(x) = 2^x \]

\[ g(x) = 2^{x - 3} + 1 \]

\[ h(x) = 0.5^x \]

        <h3>Discussion Prompts:</h3>
        <ul>
            <li>What happens when the base is between 0 and 1</li>
            <li>How does subtracting 3 inside the exponent shift the graph</li>
            <li>What does “+1” do to the graph</li>
        </ul>
    </article>

    <article class="grid-box desmos">
        <h2>Desmos</h2>
        <iframe 
            src="https://www.desmos.com/calculator/mhu3p8tlr7"
            height="400"
            style="width: 100%; border: 1px solid #283593; border-radius: 10px;">
        </iframe>

        <p>
            <a href="https://www.desmos.com/calculator" target="_blank">
                Open Desmos Calculator
            </a>
        </p>
    </article>

</div>

<figure class="table-figure">
    <figcaption>Exponential Function Comparisons</figcaption>

    <table class="styled-table">
        <thead>
            <tr>
                <th scope="col">Function</th>
                <th scope="col">Type</th>
                <th scope="col">Growth/Decay Rate</th>
                <th scope="col">Example Output</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <th scope="row">\( f(x) = 2^x \)</th>
                <td>Growth</td>
                <td>b > 1</td>
                <td>At \( x = 3 \): \( 8 \)</td>
            </tr>

            <tr>
                <th scope="row">\( g(x) = 2^{x-3} + 1 \)</th>
                <td>Growth + Shift</td>
                <td>b > 1, Horizontal shift right 3, up 1</td>
                <td>At \( x = 3 \): \( 2 \)</td>
            </tr>

            <tr>
                <th scope="row">\( h(x) = 0.5^x \)</th>
                <td>Decay</td>
                <td>0 &lt; b > 1</td>
                <td>At \( x = 3 \): \( 0.125 \)</td>
            </tr>

            <tr>
                <th scope="row">\( A(t) = 300e^{-0.3t} \)</th>
                <td>Decay Model</td>
                <td>Continuous decay</td>
                <td>At \( t = 4.62 \): \( \approx 75 \)</td>
            </tr>
        </tbody>

        <tfoot>
            <tr>
                <td colspan="4">Table Summary: Exponential functions behave differently depending on base and transformations.</td>
            </tr>
        </tfoot>
    </table>
</figure>

   </main>

    <?php include 'footer.php'; ?>

   </body>
 
</html>
