<?php
 session_start();
 
 // Clear the session
 $_SESSION = array();
 session_destroy();
 
 // Send a success response
 http_response_code(200);
?>