<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'user') {
    header("Location: signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Panel</title>
</head>
<body>
  <h1>Welcome User</h1>
  <p>Hello <?php echo $_SESSION['username']; ?></p>

  <a href="logout.php">Logout</a>
</body>
</html>
