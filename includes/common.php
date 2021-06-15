<?php
$c=mysqli_connect("localhost","root","","store","3308") or die(mysqli_error($c));
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>