<?php
//if submit is set, starts a session and stores 'email' and 'name' via POST method.
if(isset ($_POST['submit'])){
session_start();

$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];

// if sessions are stored, redirects to perf.php page.
header('Location:perf.php'); 

}

?>

<DOCTYPE html>
<html>

<head>
<!--This div contains the structure of the website.
There is:
 - a link to the CSS for style
 - a link to the script file
 - and the introductory header
 -->
<div name = "structure">

<link href="styles.css" type="text/css" rel="stylesheet">
<script src= "JStuff.js"> </script>
<h1 class="title"> The Theatre CO887 </h1>
<h2 class="head"> Exclusive Theatre Performances </h2>
</div>

</head>

<body>


 <!-- Introductory information -->
<div name="intro" class= "writing"> 
Since our doors first opened in 1189, we at Theatre CO887 
have strived to give an unforgetable and unique experience. We have been named the most exlusive club 
by 112 of the worlds nations and the building has been labled as<b>"definatly one of the most secure locations"</b> by several world leaders. 
<br>
<br>
Please login for more information about our current shows.
</div>






<div name= "login">
 <!--This is the login section of index. The information is stored with POST into 
 SESSION variables and redirects the website to itself, where the header will
 redirect it to the following page.-->
<form class="login" action= "<?php echo $_SERVER['PHP_SELF'];?>" method="POST" >
<h3>Login.</h3>
<!--Email is required and must contain ".+@.+co." -->
Email:<input name="email" type="email" id="email" placeholder="you@email.com" required pattern=".+@.+co." size="30" > 
<br>
<!--Name is required-->
Name:<input name="name" type="name" id="name"  placeholder="Michael Wazowski" required >
<br>
<input type= "submit" name="submit" value= "submit" > 


</form>
</div>





</body>


</html>


