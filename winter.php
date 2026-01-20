<?php
include "config.php";
$guides = mysqli_query($conn,"SELECT * FROM guides WHERE category='winter'");
include "guides-layout.php";
