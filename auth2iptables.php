<?php

/* 
 * Made by: Eduardo Fernandez
 * If you like what I do thank me on twitter!
 * @EduFdezSoy
 */

$log = $_POST["log"];       // auth.log file
$tab = $_POST["iptables"];  // iptables input

include ("search.php");

include ("prerules.php");

include ("rulescreator.php");

?>