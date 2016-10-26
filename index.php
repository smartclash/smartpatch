<?php

/*
 * SMART PATCH
 *
 * A SIMPLE, PATCHING SERVER MADE FOR GCS AND UCS.
 * It is a php script that helps in making a custom
 * mod for your awesome gaming server blazing fast.
 * No more hosting accounts and their idiotic FTP
 * connection procedures
 *
 * Just create an account in Smart Patch and upload.
 * Simple as hell
 *
 * @author xXAlphaManXx
 * @package Smart Patch
 * @license GPLv3.0
 */

define('ACCESS','Legal',TRUE);

/*
 * INCLUDE ALL REQUIRED FILES INTO THE MAIN INDEX PAGE.
 * THE LESSER THE CODE, THE FASTER THE COMPILING OF
 * PHP. SO, ALL ARE INCLUDED IN THE BOOTSTRAPER.PHP
 */

require __DIR__ . "/php/BootStraper.includes.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $serverName ?></title>
    <meta name="description" content="<?php echo $description; ?>">
</head>
<body>
<h1><?php $echo->logThis("Hello World", "INFO",3,TRUE); ?></h1>
</body>
</html>