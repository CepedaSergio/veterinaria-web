<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VeterinariaAWEB</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    
    <link rel="stylesheet" href="icon/style.css">
    <link rel="stylesheet" href="css/estilo.css">
    
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
               
                <h1>VETERINARIA WEB</h1>
            </div>
            <div class="menu">
                <a href="login.php"><li class="module-login">INGRESAR</li></a>
                <a href="register.php"><li class="module-register active">REGISTRARSE</li></a>
            </div>
        </div>
        
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
           
            <div class="user line-input">
               
                <input type="text" placeholder="Correo" name="correo">
            </div>
            <div class="user line-input">
               
                <input type="text" placeholder="Nombre De Usuario" name="usuario">
            </div>
            <div class="password line-input">
               
                <input type="password" placeholder="Contraseña" name="clave">
            </div>
            <div class="password line-input">
               
                <input type="password" placeholder="Confirmar contraseña" name="clave2">
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