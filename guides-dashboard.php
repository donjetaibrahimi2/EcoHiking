<?php
session_start();
include "config.php";

if(!isset($_SESSION['admin'])){
    header("Location: index.php");
    exit;
}

$cat = $_GET['cat'] ?? 'camping';
$allowed = ['camping','adventures','winter'];
if(!in_array($cat,$allowed)) $cat='camping';

// ADD
if(isset($_POST['add'])){
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $desc = mysqli_real_escape_string($conn,$_POST['description']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $date = $_POST['date'];
    $price = $_POST['price'];
    $img = $_POST['img'] ?: 'images/placeholder.jpg';
    mysqli_query($conn,"INSERT INTO guides(title,description,category,date,price,img) VALUES('$title','$desc','$category','$date','$price','$img')");
    header("Location: guides-dashboard.php?cat=$category");
    exit;
}

// DELETE
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    mysqli_query($conn,"DELETE FROM guides WHERE id=$id");
    header("Location: guides-dashboard.php?cat=$cat");
    exit;
}

// EDIT
if(isset($_POST['edit'])){
    $id = intval($_POST['id']);
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $desc = mysqli_real_escape_string($conn,$_POST['description']);
    $category = mysqli_real_escape_string($conn,$_POST['category']);
    $date = $_POST['date'];
    $price = $_POST['price'];
    $img = $_POST['img'] ?: 'images/placeholder.jpg';
    mysqli_query($conn,"UPDATE guides SET title='$title', description='$desc', category='$category', date='$date', price='$price', img='$img' WHERE id=$id");
    header("Location: guides-dashboard.php?cat=$category");
    exit;
}

// FETCH
$guides = mysqli_query($conn,"SELECT * FROM guides WHERE category='$cat' ORDER BY date ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard - Guides</title>
<link rel="stylesheet" href="assets/css/style.css">
<style>
body{font-family:Arial,sans-serif;margin:0;background:#f5f5f5}
.sidebar{position:fixed;left:0;top:0;width:220px;height:100%;background:#143234;color:white;padding-top:20px}
.sidebar h2{text-align:center;margin-bottom:30px}
.sidebar ul{list-style:none;padding:0}
.sidebar ul li{padding:15px}
.sidebar ul li a{color:white;text-decoration:none;display:block}
.sidebar ul li a:hover{background-color:#5C4033;border-radius:5px}
.main{margin-left:240px;padding:20px}
form{background:#fff;padding:15px;border-radius:10px;box-shadow:0 4px 8px rgba(0,0,0,0.15);margin-bottom:20px;display:flex;flex-wrap:wrap;gap:10px}
form input,form select{padding:8px;border-radius:5px;border:1px solid #143234;flex:1 1 150px}
form button{background-color:#143234;color:white;border:none;border-radius:5px;cursor:pointer;padding:8px 15px}
form button:hover{background-color:#5C4033}
table{border-collapse:collapse;width:100%;background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 4px 8px rgba(0,0,0,0.1)}
th,td{padding:12px;text-align:left}
th{background-color:#143234;color:white}
tr:nth-child(even){background-color:#f9f9f9}
tr:hover{background-color:#e3f2fd}
a{color:#5C4033;text-decoration:none}
a:hover{text-decoration:underline}
</style>
</head>
<body>
<div class="sidebar">
    <h2>EcoHiking</h2>
    <ul>
           <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="guides-dashboard.php?cat=camping">Camping Guides</a></li>
        <li><a href="guides-dashboard.php?cat=adventures">Adventures Guides</a></li>
        <li><a href="guides-dashboard.php?cat=winter">Winter Guides</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
<div class="main">
<h2>Guides - <?= ucfirst($cat) ?></h2>
<form method="POST">
<input type="text" name="title" placeholder="Title" required>
<input type="text" name="description" placeholder="Description" required>
<select name="category">
<option value="camping" <?= $cat=='camping'?'selected':'' ?>>Camping</option>
<option value="adventures" <?= $cat=='adventures'?'selected':'' ?>>Adventures</option>
<option value="winter" <?= $cat=='winter'?'selected':'' ?>>Winter</option>
</select>
<input type="date" name="date" required>
<input type="number" name="price" placeholder="Price" required step="0.01">
<input type="text" name="img" placeholder="Image path">
<button type="submit" name="add">Add Guide</button>
</form>
<table>
<tr><th>ID</th><th>Title</th><th>Description</th><th>Category</th><th>Date</th><th>Price</th><th>Image</th><th>Actions</th></tr>
<?php while($g=mysqli_fetch_assoc($guides)){ ?>
<tr>
<td><?= $g['id'] ?></td>
<td><?= $g['title'] ?></td>
<td><?= $g['description'] ?></td>
<td><?= $g['category'] ?></td>
<td><?= $g['date'] ?></td>
<td><?= $g['price'] ?>€</td>
<td><?= $g['img'] ?></td>
<td>
<form method="POST" style="display:inline-block;">
<input type="hidden" name="id" value="<?= $g['id'] ?>">
<input type="text" name="title" value="<?= $g['title'] ?>" required>
<input type="text" name="description" value="<?= $g['description'] ?>" required>
<select name="category">
<option value="camping" <?= $g['category']=='camping'?'selected':'' ?>>Camping</option>
<option value="adventures" <?= $g['category']=='adventures'?'selected':'' ?>>Adventures</option>
<option value="winter" <?= $g['category']=='winter'?'selected':'' ?>>Winter</option>
</select>
<input type="date" name="date" value="<?= $g['date'] ?>" required>
<input type="number" name="price" value="<?= $g['price'] ?>" step="0.01" required>
<input type="text" name="img" value="<?= $g['img'] ?>">
<button type="submit" name="edit">Save</button>
</form>
<a href="guides-dashboard.php?cat=<?= $cat ?>&delete=<?= $g['id'] ?>" onclick="return confirm('Delete this guide?')">Delete</a>
</td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>
