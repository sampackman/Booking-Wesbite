<?php
session_start();
// initialising session variables to be used in this page.
$name = $_SESSION['name'];
$title = $_SESSION['title'];
$email = $_SESSION['email'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];



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
<div name="Structure">
<link href="styles.css" type="text/css" rel="stylesheet">
<script src= "JavaScrip.js"> </script>
<?php include ('connect.php');?>
</div>

</head>

<body>
<!-- Introductory information -->
<div name= "Name and Performance" class="writing">

<h1 class="title"> The Theatre CO887 </h1>
<h2 class="head"> Exclusive Theatre Performances </h2>

<div name ="username">
<!-- Display the users name and their final booking.-->
<b> <?php echo htmlspecialchars($name);?> </b> 
<br> 
Here Is Your Your Booking: 
<br>

<?php 
echo $_SESSION['title'];
echo "<br>";
echo "Date: ";
echo $_SESSION['date'];
echo "<br>";
echo "Time: ";
echo $_SESSION['time'];
echo "<br>";
echo "<b>Seats Booked: </b>";
echo "<br>";

// insert the selected show and seat into the sql database and display a recipt of their booking.
// outputs the selected seats.
foreach($_POST AS $seat => $price){
$conn = connectToSql();
$sql = "INSERT INTO Booking 
VALUES (:e,:d,:t,:s);";

$handle = $conn ->prepare($sql);
$handle->execute(array(':e' => $email, ':t' => $time, ':d' => $date, ':s' => $seat));

echo "<li>".$seat."</li>";
}// output the final price
echo "<b>Total: </b>";
echo " <li> £".array_sum($_POST)."</li>";
$conn = null;

?>
<a id="goIndex" href="index.php" action = "empty" > Return to Index </a>
</div>

</body>

</html>