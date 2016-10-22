<?php

/*
 * THIS FILE INCLUDES ALL THE CLASSES AND IMPORTANT FILES
 * AND THEN LOADS THEM WITH AN ASSIGNED VARIABLE FOR
 * EASY ACCESS. IT IS BETTER ADVISED NOT TO TOUCH THIS
 * PLACE BECAUSE ANY ALTERATION MAY MAKE THIS SCRIPT
 * NOT WORK PROPERLY
 */

/*
 * CONFIGURATION FILE MUST BE AT FIRST BECAUSE SOME
 * INFORMATIONS ARE DECLARED IN IT AND MANY CHILD
 * CLASSES USE THE VARIABLES DECLARED IN THE CONFIG
 * FILE :)
 */

require __DIR__ . "/config/Config.conf.php";

/*
 * ALL THE CLASSES ARE INCLUDED AT FIRST
 */
require __DIR__ . "/class/LoginHandler.class.php";
require __DIR__ . "/class/MessageHandler.class.php";
require __DIR__ . "/class/RegisterHandler.php";

/*
 * ALL OTHER LIBRARIES ARE LOADED AFTERWARDS
 */

// Libraries .....

/*
 * ALL THE CLASSES ARE DECLARED AND GET'S ASSIGNED WITH
 * A GLOBAL VARIABLE TO MAKE IT USED EVERYWHERE
 */

$login      = new LoginHandler();
$echo       = new MessageHandler($text, $type);
$register   = new RegisterHandler();