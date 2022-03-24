<?php

$host = "localhost";
$user = "root";
$password = "";
$DB = "tixdb";

$conn = mysqli_connect($host,$user, $password,$DB) or die("could not connect to database");
