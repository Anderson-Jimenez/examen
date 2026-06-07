<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h1>Login</h1>

    <form id="loginForm">

        <input
            type="text"
            id="username"
            placeholder="Nombre de usuario"
            required
        >
        <br><br>

        <input
            type="password"
            id="password"
            placeholder="Contraseña"
            required
        >

        <br><br>

        <button type="submit">
            Entrar
        </button>

    </form>

    <p id="error"></p>

    <script src="/js/login.js"></script>

</body>
</html>