<?php

$conn = ($GLOBALS["___mysqli_ston"] = mysqli_connect("localhost", "root", ""))
or die("Could not connect to the server.");

mysqli_query($conn, "CREATE DATABASE mdb");
((bool)mysqli_query($conn, "USE mdb"))
or die("Could not select the database.");

?>


