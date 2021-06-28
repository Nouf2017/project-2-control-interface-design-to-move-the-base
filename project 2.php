<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url("https://cdn.al-ain.com/lg/images/2017/6/15/78-145420-chinese-robots-5.jpeg");
  background-size:100% 100%;
  background-attachment:fixed;
  background-repeat: no-repeat;
}
</style>
</head>
<body>
<font size ="6" color="bule" >
<center>Control Interface Design To Move The Base</center>
</font>
<br></br><br></br>

<body>
<center>
    <form method="POST" action="re.php">
    <input type="submit" value="FORWARD" name= "FORWARD" style= "background-color:#CD5C5C; font-size: large;padding: 20px 20px;text-align:center;text-decoration:center;
display: inline-block;
    font-size: 15px;
    margin: 6px 6px;
    cursor: center ;webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:4px;
  .submit{box-shadow:2px 1px 4px 2px black;background-color: #008CBA;
 border-radius: 8px; hover background-color:white;
color:blue;">
    <br><br><br><br>
    
    <input type="submit" value="L"  name= "L" style= "background-color:#CD5C5C; font-size: large;padding: 20px 20px;text-align:center;text-decoration:center;
display: inline-block;
    font-size: 15px;
    margin: 6px 6px;
    cursor: center ;webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:4px;
  .submit{box-shadow:2px 1px 4px 2px black;background-color: #008CBA;
 border-radius: 8px; hover background-color:white;
color:blue;">
    <input type="submit" value="STOP" name= "STOP"  style= "background-color:#ADD8E6; font-size: large;padding: 20px 20px;text-align:center;text-decoration:center;
display: inline-block;
    font-size: 15px;
    margin: 6px 6px;
    cursor: center ;webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:4px;
  .submit{box-shadow:2px 1px 4px 2px black;background-color: #008CBA;
 border-radius: 8px; hover background-color:white;
color:blue;">
    <input type="submit" value="R" name= "R" style= "background-color:#CD5C5C; font-size: large;padding: 20px 20px;text-align:center;text-decoration:center;
display: inline-block;
    font-size: 15px;
    margin: 6px 6px;
    cursor: center ;webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:4px;
  .submit{box-shadow:2px 1px 4px 2px black; background-color: #008CBA;
 border-radius: 8px; hover background-color:white;
color:blue;">
<br> <br><br><br>
    <input type="submit" value="BACKWARD" name= "BACKWARD" style= "background-color:#CD5C5C; font-size: large;padding: 20px 20px;text-align:center;text-decoration:center;
display: inline-block;
    font-size: 15px;
    margin: 6px 6px;
    cursor: center ;webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:4px;
  .submit{box-shadow:2px 1px 4px 2px black;background-color: #008CBA;
 border-radius: 8px; hover background-color:white;
color:blue;">


</center>
</form>  
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="arm control";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to database";

?>
 


 
<br>

</body>
</html>
