<?php

/* 
 * Made by: Eduardo Fernandez
 * If you like what I do thank me on twitter!
 * @EduFdezSoy
 */

$auth = $_POST["auth"];

if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}



// este php debe buscar "POSSIBLE BREAK-IN ATTEMPT!" 
// y sacar la ip de esa linea

// encontrado esto:
    $file = 'somefile.txt';
    $searchfor = 'name';

    // the following line prevents the browser from parsing this as HTML.
    header('Content-Type: text/plain');

    // get the file contents, assuming the file to be readable (and exist)
    $contents = file_get_contents($file);
    // escape special characters in the query
    $pattern = preg_quote($searchfor, '/');
    // finalise the regular expression, matching the whole line
    $pattern = "/^.*$pattern.*\$/m";
    // search, and store all matching occurences in $matches
    if(preg_match_all($pattern, $contents, $matches)){
       echo "Found matches:\n";
       echo implode("\n", $matches[0]);
    }
    else{
       echo "No matches found";
    }