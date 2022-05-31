<!DOCTYPE html>
<html>
<head>

<?php
// this is the connection to the SQL DB that is used throughout the website.
function connectToSql(){
$host='dragon.ukc.ac.uk';
$dbname='sep42';
$user='sep42';
$pwd='/sihyal';

//using a PDO connection to connect to mysql.
try {
	$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pwd);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	if($conn){
		return $conn;
	}
} catch (PDOException $e) {
	echo "PDOException: ".$e->getMessage();
}
}

?>


</body>



</html>