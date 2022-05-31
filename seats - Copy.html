<?php
session_start();
//Starts a session and carried through data from other pages.
$name = $_SESSION['name'];

$title = $_SESSION['title'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];
$price = $_SESSION['price'];

if(isset ($_POST['submit'])){
	//redirects the user once page has been completed.
header('Location:book.php');
}
?>

<!DOCTYPE html>
<html>
<head>

<div name="Structure">
<link href="styles.css" type="text/css" rel="stylesheet">
<script src= "JavaScrip.js"> </script>
<?php include ('connect.php');?>
</div>

</head>
<body>

<div name= "Name and Performance" class="writing">
<!--introduction -->
<h1 class="title"> The Theatre CO887 </h1>
<h2 class="head"> Exclusive Theatre Performances </h2>

<!--displays the available shows. -->
<div name ="username">

<b> <?php echo htmlspecialchars($name);?> </b> <br> 
</div>
<div name ="selectedShow">
You have selected:  
<br>
<?php 
//displays the users selected show title, date and time through sessions.
echo $_SESSION['title'];
echo "<br>";
echo "Date: ";
echo $_SESSION['date'];
echo "<br>";
echo "Time: ";
echo $_SESSION['time'];
?>

<br>
</div>

</div>

<div name = "chosen seats and performances"  class= "seatTotalBox" >

<div name="result box" class="loginform">
<!--creates an empty totals box to be used by JavaScrip to produce the users final selection of seats and their calculated price. -->
<b>Total</b>
<br>
<div  style= 'display:flex' id='endPrice'> </div>
<div  style= 'display:flex' id= 'chosenSeats'>  </div>
<br><!--a button to return the user to the index page. -->
<a id="goIndex" href="index.php" action = "empty" > Return to Index </a>

</div>

</div>

<div name = "connect and seats" class = "login"  >
<div name= "connect"> 
<?php
// connect to the sql database.
$conn = connectToSql();
// query the database using an array to prevent injection attacks.
$sql = "
SELECT s.RowNumber, ROUND (z.PriceMultiplier * :m, 2) AS Price
FROM Seat AS s
JOIN Zone AS z
ON z.Name=s.Zone
WHERE s.RowNumber
NOT IN 
(SELECT B.RowNumber FROM Booking B
WHERE B.PerfTime= :t
AND B.PerfDate= :d)";

$handle = $conn->prepare($sql);
//use the variable :m to finish the search 
$handle->execute(array(':m' => $price, ':t' => $time, ':d' => $date));
$conn = null;
$res = $handle->fetchall();

?>
</div>

<div name= "AvailableSeats">
<b> <!--this div prints the users name and then displays a form with a checkbox for each available seat.  -->
<?php 
echo htmlspecialchars($name);
?> 
</b> 
<br> 
Click 'Submit' when you have selected your seats.
<?php 
echo "<form action = 'seats.php' method='POST'>";
echo "<input id = 'finallity' type='submit' value='submit' action= 'book.php' form='foreachOfSeats' disabled ='true' >";
echo "</form>"
?>

<br>
<!--searching through the selected show and displaying free seats and their prices. -->
Here are our available seats:
<?php
foreach($res as $row =>$freeSeat ){
echo "<li>"
."Seat: "
.$freeSeat['RowNumber']
."<br>"
."price: £"
.$freeSeat['Price']



."<form id ='foreachOfSeats' name = 'foreachOfSeats' action = 'book.php' method = 'POST' >"
."<input  class='formCheckbox' name = {$freeSeat['RowNumber']} value = {$freeSeat['Price']} type ='checkbox' onchange = 'FinalSeats()' >"
."</li>";

}
echo "</form>";


?>









</div>

</div>




</div>

</body>
</html>