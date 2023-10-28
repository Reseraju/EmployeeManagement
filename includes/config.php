<?php
define('DB_SERVER','sql201.infinityfree.com');
define('DB_USER','	if0_35322099');
define('DB_PASS' ,'gaBcP2pEoSL');
define('DB_NAME', 'if0_35322099_ems');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>