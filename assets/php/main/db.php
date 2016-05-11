<?php
/* Default Database File */

DEFINE("db_host","localhost");
DEFINE("db_user","root");
DEFINE("db_pass","");
DEFINE("db_dbse","patchy");

$conn = @new mysqli(db_host,db_user,db_pass,db_dbse);

if ($conn->connect_error) {
	unset($conn);
	die("<h1 style=\"font-family:sans-serif\">Database server is unreachable</h1>");
} else {
	$conn->set_charset("utf8");
}

?>
