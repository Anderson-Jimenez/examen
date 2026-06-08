
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
    padding: 2rem;
}

.flex {
    display: flex;
    align-items: center;
    gap: 1rem;
}
.benvinguda{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}
table, th, td {
    border: 1px solid #ddd;
}
th, td {
    padding: 0.75rem;
    text-align: left;
}
</style>
</head>

<body>

<header>
    <h1>Gestio de missatges</h1>
    <div class="flex">
        <p id="nomUsuari"></p>
        <button id="logout">
            Sortir
        </button>
    </div>

</header>

<main class="layout">
    <div class="benvinguda">
        <div>
            <h2 id="saludo"></h2>
            <h3>Aquesta es la seva safata de missatges</h3>
        </div>
        <button onclick="window.location.href='/missatges/create'">Enviar mensaje</button>
    </div>

    <section class="missatges">
        <div class="flex">
            <button id="missatgeEntrada">Missatges d'entrada</button> 
            <button id="missatgeSortida">Missatges de sortida</button>
        </div>
        <table id="missatgesTable">
        </table>
    </section>
</main>

<footer>
  <p>Examen DAW</p>
</footer>

<script src="/js/missatges.js"></script>
</body>
</html>