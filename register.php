<?php
$conn = new mysqli("localhost","root","","user_system");

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $username  = $_POST['username'];
    $password  = $_POST['password'];

    // kontrollo a ekziston username
    $check = $conn->query("SELECT id FROM users WHERE username='$username'");
    if($check->num_rows > 0){
        $error = "Username already exists!";
    } else {
        $hashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (firstname, lastname, username, password)
                VALUES ('$firstname','$lastname','$username','$hashed')";

        if($conn->query($sql)){
            header("Location: signin.php");
            exit;
        } else {
            $error = "Something went wrong!";
        }
    }
}
?>



<!doctype html>
<html lang="sq">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/fddc30fb79.js" crossorigin="anonymous"></script>
<title>Register</title>
<link rel="stylesheet" href="css/register.css">
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

<div class="wrap">
    <div class="card">
        <div class="left">
            <div class="login-box">
                <h1>Create Account</h1>
                <p class="lead">Please fill in your details</p>
                <form id="registerForm" action="register.php" method="POST">
                    <div>
                        <label for="firstname">First Name</label>
                        <input id="firstname" name="firstname" type="text" required>
                    </div>
                    <div>
                        <label for="lastname">Last Name</label>
                        <input id="lastname" name="lastname"type="text" required>
                    </div>
                    <div>
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" required>    
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" required>
                    </div>
                    <div>
                        <label for="confirmpassword">Confirm Password</label>
                        <input id="confirmpassword" name="confirmpassword" type="password" required>
                    </div>
                    <label class="checkbox">
                        <input type="checkbox" required>
                        <span>I agree to Terms & Conditions</span>
                    </label>
                      <!-- Këtu shfaqet gabimi -->
    <?php if(isset($error)) { ?>
        <p style="color:red; margin-top:10px;"><?= $error ?></p>
    <?php } ?>



                    <button type="submit" class="btn">Create Account</button>
                    <p class="small">Already have an account? <a class="link" href="signin.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById("registerForm").addEventListener("submit", function(e){
    const pass = document.getElementById("password").value;
    const confirm = document.getElementById("confirmpassword").value;

    if(pass !== confirm){
        e.preventDefault();
        alert("Passwords do not match!");
    }
});
</script>

</body>
</html>
