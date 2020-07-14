<!--
Author:                 Jessica Scharber
Creation Date:          3/1/20
Modification Date:      3/14/20
FileName:               connectOpenDb.php
Purpose:      This page creates a connection to the database.
 -->

 <?php
// Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
