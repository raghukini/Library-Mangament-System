<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";
$conn=mysqli_connect($servername,$username,$password,"library");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$sql = "DELETE FROM avbook WHERE slno='" . $_GET["slno"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>