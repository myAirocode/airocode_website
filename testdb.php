<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$mysqli = new mysqli("localhost", "airocode1_phpma", "your_mysql_password", "airocode1_dbname");
if ($mysqli->connect_errno) {
    echo "Failed: " . $mysqli->connect_error;
} else {
    echo "✅ Connected successfully!";
}

