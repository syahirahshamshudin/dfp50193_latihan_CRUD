<?php
$host = 'localhost';
$user = 'root';
$pswd = ''; #Sepasang single quotes
$dbname = 'senarai';

$conn = new mysqli($host, $user, $pswd, $dbname);
session_start();