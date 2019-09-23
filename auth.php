<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
if ( isset( $_SESSION[ "member_id" ] ) ) {
	header( "Location: home.php" );
	exit();
}
?>