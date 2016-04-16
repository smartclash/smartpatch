<?php

// May make this a class in the future

DEFINE("db_host","127.0.0.1");
DEFINE("db_user","root");
DEFINE("db_pass","");
DEFINE("db_dbse","patchy");

$conn = @new mysqli(db_host,db_user,db_pass,db_dbse);
//GLOBAL $conn;

if ($conn->connect_error) {
	unset($conn);
	die("<div class="callout callout-danger"><h1>Server not reachable, Check your config</h1></div>");
} else {
	$conn->set_charset("utf8");
}

?>
