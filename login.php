<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Primer Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <form action="logica/logear.php" method="POST">
   <h1 class="animate__animated animate__backInLeft">Iniciar Secion LPCSC</h1>
   <p>Usuario <input type="text" placeholder="ingrese su nombre" name="usuario"></p>
   <p> Contraseña <input type="password" placeholder="ingrese su contraseña" name="clave"></p>
   
   <div> <input type="submit" value="Ingresar">
   <input type="submit" value="Registrar"> </div>
   <br>
   <a href= "index.html"> Ir a modo ESTUDIANTE </a>

   
   </form> 
</body>
</html>