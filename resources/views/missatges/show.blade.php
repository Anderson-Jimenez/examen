<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje</title>
    
</head>
<body>
    <h1>Detall de missatge</h1>

    <button onclick="window.location.href='/dashboard'">Tornar</button>
    <br><br>

    <label for="name">De:</label> <br>
    <input type="text" id="remitente" name="remitente" disabled>
    <br>
    <br>
    <label for="name">Per a:</label> <br>
    <input type="text" id="destinatario" name="destinatario" disabled>
    <br>
    <br>
    <label for="assumpte">Assumpte</label><br>
    <input type="text" name="assumpte" id="assumpte" disabled>
    <br>
    <br>
    <label for="fecha">Data:</label>
    <input type="text" id="data" name="date" disabled>
    <br>
    <br>
    <label for="missatge">Missatge</label><br>
    <textarea id="missatge" name="missatge" disabled></textarea>
    <br>
    <br>
    <script>
        const mensajeId = {{ $mensajeId }};
    </script>
    <script src="/js/show.js"></script>
</body>
</html>