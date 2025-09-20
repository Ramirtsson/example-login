<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="container">
            <form id="Login" class="form">
                <div class="title-container">
                    <h2>Bienvenido</h2>
                </div>
                <div class="form-container">
                    <div class="input-container">
                        <label for="user"></label>
                        <input type="text" placeholder="usuario" id="user">
                    </div>
                    <div class="input-container">
                        <label for="user"></label>
                        <input type="password" placeholder="password" id="password">
                    </div>
                </div>
                <div class="button-container">
                    <button id="button-login">Login!</button>
                </div>
                <div class="links-container">
                    <p>Olvidaste tu contraseña?</p>
                    <p>Registrarse</p>
                </div>
            </form>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./script.js"></script>
    <script src="./login.js"></script>
</body>
</html>