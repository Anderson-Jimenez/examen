<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Projecte</title>
    
</head>
<body>
    <h1>Editar Projecte</h1>

    <label for="name">Nom del projecte:</label> <br>
    <input type="text" id="name" name="name" required>
    <br>
    <br>
    <label for="description">Descripció del projecte:</label><br>
    <textarea id="description" name="description" required></textarea>
    <br>
    <br>
    <label for="start_date">Data de inici:</label><br>
    <input type="date" id="start_date" name="start_date" required>
    <br>
    <br>
    <label for="end_date">Data de finalització:</label><br>
    <input type="date" id="end_date" name="end_date" required>
    <br>
    <br>
    <button type="submit" id="editProject">Actualitzar Projecte</button>
    <script>
        const projectId = {{ $projectId }};
    </script>
    <script src="/js/projectes/edit.js"></script>
</body>
</html>