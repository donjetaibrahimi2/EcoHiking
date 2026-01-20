<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // kredencialet e sakta
    if ($username === "donjetarilind" && $password === "123456789") {

        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
        exit;

    } else {
        header("Location: index.php");
        exit;
    }
}
?>



<!doctype html>
<html lang="sq">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/fddc30fb79.js" crossorigin="anonymous"></script>
<title>Sign In</title>
<link rel="stylesheet" href="css/singin.css">
</head>

<body>
    <header class="hero">
    <div class="container">
      <nav class="nav">
        <div class="brand" style="font-weight:700;letter-spacing:2px;color:whitesmoke;">
          <img src="images/Logo.png" alt="ECO-Hiking Logo" style="height:50px;vertical-align:middle;margin-right:8px">
          ECO-Hiking
        </div>
        <div class="links">
            <a href="index.php">Home</a>
          <a href="guides.php">Guides</a>
          <a href="blog.php">Blog</a>
          <a href="contact.php">Contact</a>
          <a href="advice.php">Advice</a>
          
        </div>
      </nav>
      </div>
      </header>
</section>
</header>
<div class="wrap">
    <div class="card">
        <div class="left">
            <div class="login-box">
                <div id="alertBox" style="display:none; margin-bottom:15px; color:white;"></div>

                <h1>Welcome Back!</h1>
                <p class="lead">Please enter your details</p>
                <form id="signinForm" action="signin.php" method="POST" >
    <div>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" required>
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" name="password" type="password" required>
    </div>

    <label class="checkbox">
        <input type="checkbox">
        <span>Remember me for 30 days</span>
    </label>

    <a class="link" href="#">Forgot password?</a>

  <button type="submit" name="login" class="btn">Sign In</button>


    <!-- Gabimi -->
 <?php if($error): ?>
<div class="alert error">
    <i class="fa-solid fa-circle-exclamation"></i>
    <?= $error ?>
</div>
<?php endif; ?>


    <p class="small">Don't have an account? <a class="link" href="register.php">Sign Up</a></p>
</form>

            </div>
        </div>
    </div>
</div>


</body>
</html>

