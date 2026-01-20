<?php
$conn = mysqli_connect("localhost", "root", "", "db_ecohiking");

if (!$conn) {
    die("Database connection failed");
}
