<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About Us</title>
<link rel="stylesheet" type="text/css" href="style1.css">

<style>

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 50%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.center {
    top: 80%;
    left: 50%;
    transform: translate(-50% , -50%);
    position: absolute;
    text-align: center;   
}


.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
  opacity: 60%;
}

.container {
  padding: 0 16px;

}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  background-color: #4CAF50;
  border: none;
  outline: 0;
  display: inline-block;
  text-decoration: none;
  padding: 8px;
  color: white;
  text-align: center;
  cursor: pointer;
  width: 100%;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 12px;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

h2{  
    text-align: center;  
    color: #fff;  
    padding: 20px;  
} 

</style>
</head>
<body>
<?php
include 'header.php';
?>

<div class="about-section">
  <h1 style="opacity:100%; font-size:34px;">About Us</h1>
  <p style="opacity:100%; font-size:24px;">Little quite a decade ago, online job searches were primarily the province of a small 
   population of hardcore techies. Today, online recruiting forms one among the central pillars of a sensible 
   staffing strategy for firms in every economic sector. Increasingly, job seekers are turning to electronic resources 
   like corporate internet sites , federal, state, and municipal job postings, online job search engines and aggregators, 
   Internet classifieds, and online versions of local and national newspapers to facilitate the work search process. 
   Conversely, a growing majority of employers have moved a big proportion of their recruitment efforts online.</p>

   <p style="opacity:100%; font-size:24px;">The most immediately apparent advantage of online recruitment is that the vastly improved degree of 
   recruitment process management this approach offers. Every phase of the recruitment process, an internet system facilitates 
   how more streamlined, standardized approach than traditional, paper-based recruitment. Many once-manual tasks, like sorting, 
   coding, filing, and routing application materials, can now be performed automatically. Some experts estimate that the standard 
   recruitment cycle is one-third to one-half as long because it had been within the pre-Internet era.
   This enhanced efficiency contributes highly to a major advantage of online recruitment - its cost-effectiveness. 
   Recent studies and industry surveys indicate that the bulk firms' recruitment costs have decreased sharply after the 
   shift toward online systems.</p>

   <p style="opacity:100%; font-size:24px;">Our online system helps finding the best job for you and also the best employee for your company. 
   
   </p>
</div>

<h2 style="text-align:center color:#FF0000; font-size:34px;">Our Team</h2>

<div class="row">

  <div class="column">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button" href="contact.php">Contact</button></p>
      </div>
  </div>

  <div class="column">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button" href="contact.php">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button" href="contact.php">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button" href="contact.php">Contact</button></p>
      </div>
    </div>
  </div>

</div>

</body>
</html>