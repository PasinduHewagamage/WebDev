<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Employees</title>    
    <link rel="stylesheet" type="text/css" href="style1.css">
<style>

.p3 {
  font-family: Georgia, serif;
  font-style: italic;
  font-size: 50px;
  font-weight: bold;
  color: #00FDD3;
}

.center {
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%);
    position: absolute;
    text-align: center;
}
  
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  width: 50%;
  padding: 15px 200px; 
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 20px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px;
}

.button1:hover {
  background-color: #555;
  color: white;
}

</style>
</head>
<body>

<?php
include 'header.php';
?>

<div class="center">
  <p class="p3">I,m Looking For</p>
  <button class="button button1">Data Scientist</button>
  <button class="button button1">Web Developer</button>
  <button class="button button1">Software Engineer</button>  

</div>

</body>
</html>