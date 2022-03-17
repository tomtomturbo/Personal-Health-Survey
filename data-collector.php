<?php
session_start();

$lastPageID = $POST("lastPageID");

$_SESSION[$lastPageID] = $_POST;

echo '<pre>';
print_r($_SESSION);

