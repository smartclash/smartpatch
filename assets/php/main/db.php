<?php
/* Default Database File */

DEFINE("db_host","31.220.17.165");
DEFINE("db_user","smartcla_karan");
DEFINE("db_pass","AmarAmar@1");
DEFINE("db_dbse","smartcla_patchyraedialab");

$conn = @new mysqli(db_host,db_user,db_pass,db_dbse);

if ($conn->connect_error) {
	unset($conn);
	die("<h1 style=\"font-family:sans-serif\">Database server is unreachable</h1>");
} else {
	$conn->set_charset("utf8");
}

?>