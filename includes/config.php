<?php
define('DB_SERVER','sql11.freemysqlhosting.net');
define('DB_USER','sql11503545');
define('DB_PASS' ,'UmgpG25LaW');
define('DB_NAME', '	sql11503545');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
