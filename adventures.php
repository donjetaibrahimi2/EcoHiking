<?php
include "config.php";
$guides = mysqli_query($conn,"SELECT * FROM guides WHERE category='adventures'");
include "guides-layout.php";
