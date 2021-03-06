<?php

// Link to site hosted on CS 4640 Server:
// https://cs4640.cs.virginia.edu/scp4exq/project/final/

// Sources Used:  Sample trivia game code from lecture
/*
 * Sources: https://www.php.net/manual/en/function.strpos.php
 * https://www.w3schools.com/php/php_json.asp
 * // website: https://handy-resolver-346423.uk.r.appspot.com/
 */

session_start();

// Register the autoloader
//this tells apache where in our directory our classes are, this allows us to be more private
spl_autoload_register(function($classname) {
    include "classes/$classname.php";
});

//must instantiate this object once
$buildings = new Buildings();

// Parse the query string for command
$command = "login";
if (isset($_GET["command"]))
    $command = $_GET["command"];

// Instantiate the controller and run
$controller = new SiteController($command);
$controller->run();