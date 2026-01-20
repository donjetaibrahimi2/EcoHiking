

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 30px;
  background: #143234;
}

.hero {
  background-color: #143234;
  background: cover;
  background-position: center;
  display: flex;
  align-items: flex-start;
  justify-content: center;
}

.hero .container {
  width: 92%;
  max-width: 1100px;
  display: flex;
  flex-direction: column;
  position: relative;
  z-index: 2;
  padding-top: 36px
}

.nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 40px;
}

.nav a {
  color: rgba(255, 255, 255, 0.7);
  text-decoration: none;
  margin-left: 20px;
  font-size: 14px
}

.title {
  text-align: center;
  margin-bottom: 20px;
  color: aliceblue;
}

.intro {
  text-align: center;
  margin: 40px 0 25px;
  color: aliceblue;
}

.intro h2 {
  font-size: 28px;
  margin-bottom: 8px;
}

.intro p {
  opacity: 0.85;
}

/* ===== Categories ===== */
.categories {
  text-align: center;
  margin-bottom: 35px;
}

.categories button {
  padding: 10px 20px;
  margin: 6px;
  border: none;
  background: #5C4033; /* dark brown */
  color: white;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
  transition: 0.25s;
}

.categories button:hover {
  background: #5C4033;
  color: #143234;
  transform: translateY(-2px);
}

//* ===== Guides ===== */
.guides-container {
  display: grid;
  grid-template-columns: repeat(4, 1fr); /* 4 kolona fikse desktop */
  gap: 25px;
  width: 100%;
  padding: 0 40px;
  box-sizing: border-box;
  justify-items: stretch; /* çdo kartë mbush kolonën */
}

.guide-card {
  background: white;
  padding: 15px;
  border-radius: 12px;
  cursor: pointer;
  transition: .2s;
  box-sizing: border-box;
  width: 100%;      /* Merr width-in e kolonës */
  max-width: none;  /* Heq kufizimin e 250px që prish rreshtin */
}

.guide-card img {
  width: 100%;
  border-radius: 12px;
  height: 300px;
  object-fit: cover;
}

.guide-card:hover {
  transform: scale(1.03);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.25);
}

/* RESPONSIVE */
@media (max-width: 1200px) {
  .guides-container {
    grid-template-columns: repeat(3, 1fr); /* 3 kolona tablet */
  }
}

@media (max-width: 900px) {
  .guides-container {
    grid-template-columns: repeat(2, 1fr); /* 2 kolona */
  }
}

@media (max-width: 600px) {
  .guides-container {
    grid-template-columns: 1fr; /* 1 kolonë mobile */
    padding: 0 20px;
  }

  .guide-card img {
    height: 180px;
  }
}


/* ===== Pagination ===== */
.pagination {
  text-align: center;
  margin-top: 50px;
}

.pagination button {
  padding: 8px 14px;
  margin: 4px;
  border-radius: 6px;
  border: none;
  background: #ddd;
  cursor: pointer;
}

.pagination button:hover {
  background: #bbb;
}

.active-page {
  background: #143234;
  color: white;
}

</style>
</head>
<body>
    

<header class="hero">
  <div class="container">
    <nav class="nav">
      <div class="brand" style="font-weight:700;letter-spacing:2px">
        <img src="images/Logo.png" alt="ECO-Hiking Logo"
             style="height:50px;vertical-align:middle;margin-right:8px">
        ECO-Hiking
      </div>

      <div class="links">
        <a href="index.php">Home</a>
        <a href="guides.php">Guides</a>
        <a href="blog.html">Blog</a>
        <a href="contact.html">Contact</a>
        <a href="advice.html">Advice</a>
        <a href="signin.php" class="signin">
          <i class="fa-solid fa-user"></i>
        </a>
      </div>
    </nav>
  </div>
</header>
<div class="intro">
  <h2>Discover Your Next Adventure</h2>
  <p>Zgjedh kategorinë dhe shiko guidat më të reja</p>
</div>
<div class="categories">
  <button onclick="goCat('all')">Hiking</button>
  <button onclick="goCat('adventures')">Adventures</button>
  <button onclick="goCat('camping')">Camping</button>
  <button onclick="goCat('winter')">Winter</button>
</div>

<script>
function goCat(cat){
  window.location.href = "guides.php?cat=" + cat;
}

</script>



</body>
</html>