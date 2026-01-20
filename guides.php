<?php
include "config.php";

/* Merr kategorinë nga URL */
$cat = $_GET['cat'] ?? 'all';

/* Lejo vetëm këto kategori */
$allowed = ['hiking','camping','adventures','winter','all'];
if(!in_array($cat, $allowed)){
    $cat = 'all';
}

/* SQL sipas kategorisë */
if($cat === 'all'){
    $guides = mysqli_query($conn,"SELECT * FROM guides ORDER BY date ASC");
}else{
    $guides = mysqli_query($conn,"SELECT * FROM guides WHERE category='$cat' ORDER BY date ASC");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>All Guides</title>
<style>
body{font-family:Arial;background:#f5f5f5;margin:0}
.header{background:#143234;color:white;padding:20px;text-align:center}
.container{display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px;padding:30px}
.card{background:white;border-radius:15px;box-shadow:0 4px 10px rgba(0,0,0,.15);overflow:hidden}
.card img{width:100%;height:180px;object-fit:cover}
.card .content{padding:15px}
.card h3{margin:0;color:#143234}
.price{color:#5C4033;font-weight:bold}
</style>
</head>
<body>
<?php include "header.php"?>
<div class="header">
<h1>EcoHiking Guides</h1>
</div>


<div class="container">
<?php while($g=mysqli_fetch_assoc($guides)){ ?>
<div class="card">
<img src="<?= $g['img'] ?>" onerror="this.src='images/placeholder.jpg'">
<div class="content">
<h3><?= $g['title'] ?></h3>
<p><?= $g['description'] ?></p>
<p><b><?= ucfirst($g['category']) ?></b></p>
<p>Date: <?= $g['date'] ?></p>
<p class="price"><?= $g['price'] ?> €</p>
</div>
</div>
<?php } ?>
</div>

</body>
</html>
