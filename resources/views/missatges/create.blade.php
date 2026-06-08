<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviar nou missatge</title>
    
</head>
<body>
    <h1>Nou missatge</h1>
    <button onclick="window.location.href='/dashboard'">Tornar</button>
    <br><br>

    <label for="name">Destinatari:</label> <br>
    <Select id="destinatario" name="destinatario" required>
        <!-- Aquí se llenará con los usuarios disponibles -->
    </select>
    <br>
    <br>
    <label for="assumpte">Assumpte</label><br>
    <input type="text" name="assumpte" id="assumpte" required>
    <br>
    
    <br>
    <br>
    <label for="missatge">Missatge</label><br>
    <textarea id="missatge" name="missatge" required></textarea>
    <br>
    <br>
    <button type="submit" id="enviaMissatge">Enviar Missatge</button>
    <script src="/js/create.js"></script>
</body>
</html>