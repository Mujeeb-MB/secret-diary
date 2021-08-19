<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diary</title>
    <style>
body {
  margin: auto;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(diary1.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

.topnav {
  /*overflow: hidden;*/
  background-color: #333;
}

.topnav  button{
  float: right;
  color: black;
  text-align: center;
  padding: 5px 25px;
  text-decoration: none;
}
.topnav a{
  float: right;
  color: black;
  text-align: center;
  padding: 12px 5px;
  text-decoration: none;
  font-size: 20px; 
}
.topnav p{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 2px 16px;
  text-decoration: none;
  font-size: 20px;
}
textarea{
    margin-left: 90px;
    
}
</style>
</head>
<body>
<div class="topnav">
<p>Secret Diary</p>
 <button> <a href="login.php">Logout</a> </button>
</div>
<form>
    <textarea cols="150" rows="50" placeholder="Write your thoughts..." name="textarea"></textarea>
    
</form>


</body>
</html>
