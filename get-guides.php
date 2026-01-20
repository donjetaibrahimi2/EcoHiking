<?php
include "config.php";

$category = $_GET['category'] ?? 'camping';
$allowed = ['camping','adventures','winter'];
if(!in_array($category,$allowed)) $category='camping';

$result = mysqli_query($conn, "SELECT * FROM guides WHERE category='$category' ORDER BY date ASC");

$guides = [];
while($row = mysqli_fetch_assoc($result)) {
    $guides[] = $row;
}

header('Content-Type: application/json');
echo json_encode($guides);
