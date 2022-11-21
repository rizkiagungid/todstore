<?php
/* Error Message: Deprecated: mysqli_connect(): The mysqli extension is deprecated and will be removed in the future: use mysqlii or PDO instead in C:\wamp64\www\kblog\resources\init.php on line 4 */

error_reporting(1); //handles error to accept deprecated mysqli extension


include_once('config.inc.php');

$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

include_once('functions/blog.php');



?>