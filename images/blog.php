<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eco Hiking Blog</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/blog.css">
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
          <a href="blog.php">Blog</a>
          <a href="contact.php">Contact</a>
          <a href="advice.php">Advice</a>
          
        </div>
      </nav>
      </div>
      </header>



<div class="container1">

<header class="header">
  <nav class="nav1">
  <a href="#">Guides</a>
  <a href="#">Shtigje</a>
  <a href="#">Pajisje</a>
  <a href="#" onclick="openForm()">Posto Blog</a>
</nav>

</header>

<div id="postForm" style="display:none;margin-bottom:30px">
  <input id="title" placeholder="Titulli" style="width:100%;padding:10px;margin-bottom:10px">
  <input id="image" placeholder="URL e fotos" style="width:100%;padding:10px;margin-bottom:10px">
  <textarea id="desc" placeholder="Përshkrimi" style="width:100%;padding:10px;height:100px"></textarea>
  <button onclick="addBlog()" style="margin-top:10px;padding:10px;background:#d4c06b;border:none;font-weight:600">
    Publiko
  </button>
</div>


<section class="grid" id="blogGrid">

<article class="card">
  <img src="images/Blog1.png" alt="">
  <div class="content">
    <span class="meta">Fillestar · 5 min</span>
    <h3>Çka me marrë në hiking 1-ditor</h3>
    <p>Checklist praktike për ecje pa stres dhe pa harru gjëra të rëndësishme.</p>
    <a href="#">Lexo më shumë</a>
  </div>
</article>

<article class="card">
  <img src="images/Blog2.jpg" alt="">
  <div class="content">
    <span class="meta">Siguri · 7 min</span>
    <h3>Gabimet që bëjnë fillestarët</h3>
    <p>Gabime reale që mund të prishin një ecje të bukur në natyrë.</p>
    <a href="#">Lexo më shumë</a>
  </div>
</article>

<article class="card">
  <img src="images/Blog3.png" alt="">
  <div class="content">
    <span class="meta">Shtigje · 10 min</span>
    <h3>Shtigje të bukura në Kosovë</h3>
    <p>Ide për ecje fundjave me pamje të bukura dhe vështirësi të ndryshme.</p>
    <a href="#">Lexo më shumë</a>
  </div>
</article>

</section>

</div>

<!-- Posto Blog -->
<script>
function openForm(){
  const f = document.getElementById("postForm")
  f.style.display = f.style.display === "none" ? "block" : "none"
}

function addBlog(){
  const title = document.getElementById("title").value
  const image = document.getElementById("image").value
  const desc = document.getElementById("desc").value

  if(!title || !desc) return alert("Plotëso të gjitha fushat")

  const card = `
  <article class="card">
    <img src="${image || 'images/blog1.jpg'}">
    <div class="content">
      <span class="meta">Community · 3 min</span>
      <h3>${title}</h3>
      <p>${desc}</p>
      <a href="#">Lexo më shumë</a>
    </div>
  </article>
  `

  document.getElementById("blogGrid").insertAdjacentHTML("afterbegin", card)

  document.getElementById("title").value = ""
  document.getElementById("image").value = ""
  document.getElementById("desc").value = ""
}
</script>

</body>
</html>
