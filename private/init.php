<?php

// initialize files 

ob_start(); // output buffering if not enabled in server 


// 1) FILE PATH when we use (include)

// dirname() return the father folder
// __FILE__ returns the currnent file path 

define("PRIVATE_PATH", dirname(__FILE__));
define("SHARED_PATH", PRIVATE_PATH . '/shared');
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');

// 2) BROWSER PATH 
// when we use echo and make links to click and 
// when we enque estylshheets/javascripts 

$public_end =  strpos($_SERVER['SCRIPT_NAME'], 'public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once('functions.php');
require_once('db.php');


$db = db_connect(); 