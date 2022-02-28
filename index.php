<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="869dc8f5ef.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Inicio</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form  action="php/users/user_controler.php" method="POST">
          <h1>Crea tu Cuenta</h1>
          <div class="social-container">    
          </div>
          <span>o usa tu email como registro</span>
          <input type="text" placeholder="Nombre" name="nombre" />
          <input type="email" placeholder="Correo" name="usuario" />
          <input type="password" placeholder="Contraseña" name="pass" />
          <input type="submit" name="crear">
        </form>
      </div>
      <div class="form-container sign-in-container">
        <form action="php/users/user_controler.php" method="POST">
          <h1>Iniciar Sesión</h1>
          <div class="social-container">    
          </div>
          <span>o usa tu email</span>
          <input type="text" placeholder="Correo" name="usuario"/>
          <input type="password" placeholder="Contraseña" name="pass" />
          <input type="submit" name="validar">
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <h1>¡Bienvenido!</h1>
            <p>
              Inicia sesión con tu cuenta
            </p>
            <button class="ghost" id="signIn">Inicia sesión</button>
          </div>
          <div class="overlay-panel overlay-right">
            <h1>No cuenta con una Cuenta?</h1>
            <p>Crear tu cuenta</p>
            <button class="ghost" id="signUp">Registrar</button>
          </div>
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
