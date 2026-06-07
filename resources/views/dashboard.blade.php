
<!DOCTYPE html>
<html lang="ca">
<head>
<meta charset="UTF-8">
<title>Examen DAW</title>

<style>
html, body {
    height: 100%;
}
body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    margin: 0;
    display:grid;
    grid-template-rows: auto 1fr auto;
}
body p{
    margin: 0;
}

header {
    background: #111;
    color: white;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem 3rem;
}
footer{
    background: #111;
    color: white;
    text-align: center;
    padding: 1rem;
}
main {
    display:grid;
    grid-template-columns: 1fr 2fr 1fr;
    gap: 1rem;
    padding: 1rem;
}
aside,article,section {
    background: white;
    padding: 1rem;
    border-radius: 5px;
}

</style>
</head>

<body>

<header>
    <p id="saludo"></p>
    <h1>Dashboard</h1>
    <button id="logout">
        Cerrar sesión
    </button>
</header>

<main class="layout">

  <aside class="sidebar">
    <h2>Llistat del meus projectes</h2>
    <ul id="projects-list">
    </ul>
    <button onclick="window.location.href='/projects/create'">Afegir projecte</button>

  </aside>

  <article class="featured">
    
  </article>

  <section class="news">
    <button>Afegir Tasca</button>
  </section>

</main>

<footer>
  <p>Examen DAW - Layout Responsive sense media queries</p>
</footer>

<script src="/js/dashboard.js"></script>
</body>
</html>