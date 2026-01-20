<?php
include "config.php";
$guides = mysqli_query($conn,"SELECT * FROM guides WHERE category='camping'");
include "guides-layout.php";
