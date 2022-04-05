<?php
// Sources Used:  Sample trivia game code from lecture
/*
 * Sources: https://www.php.net/manual/en/function.strpos.php
 *
 */

session_start();

// Register the autoloader
//this tells apache where in our directory our classes are, this allows us to be more private
spl_autoload_register(function($classname) {
    include "classes/$classname.php";
});

// Parse the query string for command
$command = "login";
if (isset($_GET["command"]))
    $command = $_GET["command"];

// Instantiate the controller and run
$controller = new SiteController($command);
$controller->run();


