<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Guides</title>
<style>
body{font-family:Arial;background:#f5f5f5;margin:0}
.header{background:#143234;color:white;padding:20px;text-align:center}
.container {
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* 4 kolona fikse desktop */
  gap: 20px;
  padding: 30px;
  justify-items: stretch; /* kartat mbushin kolonën, rreshti i dytë nuk ngec */
}

.card {
  background: white;
  border-radius: 15px;
  box-shadow: 0 4px 10px rgba(0,0,0,.15);
  width: 100%;  /* merr width nga 1fr */
  box-sizing: border-box;
}

.card img{width:100%;height:180px;object-fit:cover}
.card .content{padding:15px}
.card h3{color:#143234;margin:0}
.price{color:#5C4033;font-weight:bold}
</style>
</head>
<body>
    <?php include "header.php" ?>

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
<p>Date: <?= $g['date'] ?></p>
<p class="price"><?= $g['price'] ?> €</p>
</div>
</div>
<?php } ?>
</div>

</body>
</html>
