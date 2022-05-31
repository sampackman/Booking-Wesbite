<!-- Find more information and comments inside the div's.-->
<?php
//starts a session.
session_start();
//initialises the session variables already set.
$name = $_SESSION['name'];
$email = $_SESSION['email'];

if(isset ($_POST['submit'])){
//if post has been set, store these variables into sessions.
$_SESSION['title'] = $_POST['Title'];
$_SESSION['date'] = $_POST['Date'];
$_SESSION['time'] = $_POST['Time'];
$_SESSION['price'] = $_POST['BasicTicketPrice'];
echo $_SESSION['title'];
// once 'submit' has been clicked php will redirect the page.
header('Location:seats.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<!--This div contains the structure of the website.
There is:
 - a link to the CSS for style
 - a link to the script file
 - and the introductory header
 -->
<div name="structure">
<link href="styles.css" type="text/css" rel="stylesheet">
<script src= "JStuff.js"> </script>

<h1 class="title"> The Theatre CO887 </h1>
<h2 class="head"> Exclusive Theatre Performances </h2>
<?php include ('connect.php');?>
</div>

</head>
<body>

<div class="welca">
<!--Welcome the user with their name and email-->
Welcome: 
<b> <b> <?php echo htmlspecialchars($name); ?> </b> </b> 
<br>
@ :
<b><b> <?php echo htmlspecialchars($email); ?> </b></b> 
<br>
</div>

<p class="writing"> 
Select and book your performance:</p>
<!--displays the available shows. -->

<?php
// a php sql query to bring up available shows and their time & date.

$conn = connectToSql();

$sql = "SELECT * FROM Performance p JOIN Production r ON p.Title=r.Title" ;
$handle = $conn->prepare($sql);

$handle->execute();
$conn = null;
$res = $handle->fetchall();
// stores the results into a form with the inputs type set to hidden.
foreach ($res as $row => $show){
echo "<form  action = 'perf.php' method='POST'>";
echo "<input value= '{$show['PerfDate']}' type ='hidden' name = 'Date' >";
echo "<input value= {$show['PerfTime']} type ='hidden' name = 'Time' >";
echo "<input value= {$show['Title']} type = 'hidden' name = 'Title' >";
echo "<input value= {$show['BasicTicketPrice']} type = 'hidden' name = 'BasicTicketPrice' >";
echo // foreach through the results and display them with a button for the user to select. 
"<li>". "<br>"
.$show['Title']
."<br>"
."Time: ".$show['PerfTime']
." - "
."Date: ".$show['PerfDate']
."  "
."<input name='submit' type='submit' value = 'Show Availability' >"
."</li>";
//submit button to take the user to the following page: seats.php
echo "<button type ='submit' value= 'submit' name = 'submit' action='submit'>";
echo "</form>";
}
?>

</body>
</html>

