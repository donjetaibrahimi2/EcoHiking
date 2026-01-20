<!-- <?php

 include "config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?> -->

<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
   <script src="https://kit.fontawesome.com/fddc30fb79.js" crossorigin="anonymous"></script>
  <title>Eco-Hiking Guide</title>
  <!-- background picture ⬇ -->
    <link rel="shortcut icon" type="image/x-icon" href="images/Logo.png" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="hero">
    <div class="container">
      <nav class="nav">
        <div class="brand" style="font-weight:700;letter-spacing:2px">
          <img src="images/Logo.png" alt="ECO-Hiking Logo" style="height:50px;vertical-align:middle;margin-right:8px">
          ECO-Hiking
        </div>
        <div class="links">
          <a href="index.php">Home</a>
          <a href="guides.php">Guides</a>
          <a href="blog.html">Blog</a>
          <a href="contact.html">Contact</a>
          <a href="advice.html">Advice</a>
          <a href="signin.php" class="signin"><i class="fa-solid fa-user">
          </i></a>
          
        </div>
      </nav>

      <h1>Be Prepared For The Mountains And Beyond!</h1>
      <p class="lead">Short guide and curated articles to help you plan hikes, pick gear, and read maps. Start with the basics and work up to multi-day routes.</p>
    </div>
  </header>

  <main class="content">

    <section class="item">
      <div class="num">01</div>
      <div class="text">
        <span class="meta">GET STARTED</span>
        <h2>What level of hiker are you?</h2>
        <p>Determine what level of hiker you are so you can be an important tool when planning future hikes. This short guide will help you pick routes and gear that match your experience.</p>
        <a class="read" href="index-info.html">read more →</a>
      </div>
      <!-- foto 1  -->
      <div class="img"><img src="images/Brod_Dragash.jpg" alt="Hike 1"></div>
    </section>

    <section class="item alt">
      <div class="num">02</div>
      <!-- Foto 2 -->
      <div class="img"><img src="images/hiking2.png" alt="Hike 2"></div>
      <div class="text">
        <span class="meta">BRING ESSENTIALS</span>
        <h2>Picking the right Hiking Gear!</h2>
        <p>Choosing appropriate gear makes all the difference. From layered clothing to boots and navigation tools, get the essentials right before you set off.</p>
        <a class="read" href="Gears.html">read more →</a>
      </div>
    </section>

    <section class="item">
      <div class="num">03</div>
      <div class="text">
        <span class="meta">WHERE YOU GO &amp; WHEN</span>
        <h2>Understand Your Map &amp; Timing</h2>
        <p>Timing and route planning are crucial. Learn to read contours, estimate pace, and plan turnaround times to keep trips safe and enjoyable.</p>
        <a class="read" href="route.html">read more →</a>
      </div>
      <!-- Foto 3 -->
      <div class="img"><img src="images/hiking3.png" alt="Hike 3"></div>
    </section>

    <footer class="footer">
      <div class="cols">
        <div style="flex:1">
          <strong>ECO-Hiking</strong>
          <p style="margin-top:8px;color:var(--muted);max-width:420px">Get out more & discover your next ridge, mountain & destination.</p>
        </div>

        <div style="width:220px">
          <strong>More on The Blog</strong>
          <ul style="list-style:none;padding:0;margin:12px 0 0;color:var(--muted);font-size:14px">
            <li><a href="advice.html">Advice & Tips</a></li>
            <li>Gear Reviews</li>
            <li><a href="routes.html">Route Picks</a></li>
          </ul>
        </div>

        <div style="width:220px">
          <strong">Contact</strong>
          <p style="color:var(--muted);font-size:14px;margin-top:8px">info@example.com</p>
          <p style="color:var(--muted);font-size:14px;margin-top:8px">+383 69 123 456</p>
          <p style="color:var(--muted);font-size:14px;margin-top:8px">Prishtine, 10000</p>
        </div>
      </div>
    </footer>

  <!-- </main>
popup
  <div id="eventPopup" class="popup-overlay">
  <div class="popup-box">
    <h4>Hiking Event</h4>
    <p>Më 10 Janar do të bëhet hiking tek Liqeni i Leqanatit. A dëshiron të vazhdosh?</p>

    <div class="popup-actions">
      <button id="yesBtn">Po</button>
      <button id="noBtn">Jo</button>
    </div>
  </div>
</div> -->


<!-- <script>
const popup = document.getElementById("eventPopup");
const yesBtn = document.getElementById("yesBtn");
const noBtn = document.getElementById("noBtn");

yesBtn.onclick = () => {
  window.location.href = "guides-description.html?date=10%20Jan%202026&location=Liqeni%20i%20Leqanatit&price=15€&img=images%2Fliqeni-leqanatit.jpg"; // faqja e eventit
};

noBtn.onclick = () => {
  popup.style.display = "none";
};
</script> -->

</body>
</html>
