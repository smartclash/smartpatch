<?php

/*
 * THIS IS THE MAIN PART OF THIS WHOLE SCRIPT,
 * YOU SHOULD NOW FILL EVERY GIVEN FIELDS WITH
 * CORRECT OPTIONS. YOU ARE REQUESTED NOT TO
 * EDIT THE VARIABLES.
 *
 * @owner xXAlphaManXx
 * @package Smart Patch
 */

/*
 * Main configuration
 */

$domain = 'http://dev.smartclashcoc.com'; // Never include the trailing slahs (/) at the end.
$serverName         = 'Smart Patch'; // Name of your server
$description        = 'Host your patches for free instead of paying for a paid host.'; // Description about your patching server
$shortDescription   = 'Host patches for free'; // A short description to show on pages

/*
 * DATABASE
 *
 * USE ONLY MYSQL FOR THIS SCRIPT. NOTHING ELSE IS SUPPORTED.
 */
define('DB_HOST','192.168.1.1',FALSE); //Host name 
define('DB_USER','root',FALSE); //User name
define('DB_PASS','',FALSE); //Password for that user
define('DB_NAME','smartpatch',FALSE); // and the name of the database

/*
 * PERFORMANCES
 *
 * YOU CAN EDIT THE BELOW VARIABLES TO SUITE YOUR TYPE OF USAGE.
 * NEVER EVER MIX THE VALUES THAN THE SPECIFIED ONE.
 */

$mode = TRUE; // TRUE for production and FALSE for development
$timeout = 5; // The timeout for executing upload. Never change this
              // unless your patching server is very slow.