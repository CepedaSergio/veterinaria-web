<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>VeterinariaWEB</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<div class="container-form">
        <div class="header">
            <div class="logo-title"> 
            </div>
            <h1>VETERINARIA WEB</h1>
            <div class="menu">
                <a href="login.php"><li class="module-login active">INGRESAR</li></a>
                <a href="register.php"><li class="module-register">REGISTRARSE</li></a>
            </div>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
           
            <div class="user line-input">
               
                <input type="text" placeholder="Nombre De Usuario" name="usuario">
            </div>
            <div class="password line-input">
                
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            
             <?php if(!empty($error)): ?>
            <div class="mensaje">
                <?php echo $error; ?>
            </div>
            <?php endif; ?>
            
            <button type="submit">SIGUIENTE<label class="lnr lnr-chevron-right"></label></button>
        </form>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>