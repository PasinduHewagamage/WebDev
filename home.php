<!DOCTYPE html>
<html lang="en">
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>    
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
<style>

.center {
    top: 50%;
    left: 50%;
    transform: translate(-50% , -50%);
    position: absolute;
    text-align: center;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  width: 50px
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 24px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.p3 {
  font-family: Georgia, serif;
  font-style: italic;
  font-size: 50px;
  font-weight: bold;
  color: #00FDD3;
}


</style>
</head>
<body>

<?php
include 'header.php';
?>

<div class="center">
  <p class="p3">You Are?</p>
  <button class="button button1">Looking For A Job</button>
  <button class="button button1">Hiring People</button>

</div>

</body>
</html>