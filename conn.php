<?php
 $servername = "127.0.0.1";
 $username = "root";
 $password = "";
 $db = "exercise";

 // Create connection
 $link = new mysqli( $servername, $username, $password, $db );
 $link->query("set names utf8");

 // Check connection
 if ( $link->connect_error ) {
 	die( "Connection failed: " . $link->connect_error );
 }
 ?>