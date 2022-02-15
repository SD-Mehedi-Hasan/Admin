<?php
require_once( __DIR__ . '/constants.php' );
/* ============================================ */

$servername = "localhost";

$database = "rgappdev_Theme";

$username = "rgappdev_Theme";

$password = 'rgappdev_Theme';


/* ============================================ */

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>