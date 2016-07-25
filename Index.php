<?php

/* 
 * 
 * 
 * 
 */
session_start();
require_once("classes/class.page_controller.php");

define("_LOGPATH_", "logs/");

define("PDOdriver", "mysql");
define("PDOhost", "localhost");
define("PDOuser", "sybren");
define("PDOpass", "103225");
define("PDOdatabase", "fondasgames");

$controller = new FonController();
$controller->checkRequest();