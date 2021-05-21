<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VeterinariaWEB</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

    <link rel="stylesheet"  href="style.css">
    
    <style>

        body{
            
        }
        
        .welcome{
            width: 100%;
            max-width: 1000px;
            margin: auto;
            margin-top: 50px;
            background: white;
            text-align: center;
            padding: 20px;
        }
        
       

        .welcome h1{
            font-size: 50px;
            color: black;
            font-weight: 100;
            margin-top: 20px;
        }

        .welcome h2{
            font-size: 50px;
            color: black;
            font-weight: 100;
            margin-top: 20px;
        }
        
        .welcome a{
            display: 20px;
            margin-top: 40px;
            font-size: 20px;
            padding: 10px;
            border: 1px solid white;
        }
        
        .welcome a:hover{
            color: black;
            background: white;
        }

        .welcome p{
            color: white;
        }

        .menu{
            width: 100%;
            height: 30px;
            max-height: 30px;
            max-width: 2000px;
            margin: auto;
            
        }


   

    .menu ul li a:hover {
         
        padding: 15px 15px;
    }

    .menu a  .icon-home {background: #F9405C;}
        

    </style>
    
</head>
<body>

    <div class="menu">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#ffffff ;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="indexc.php">CLIENTE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">VETERINARIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">MASCOTA</a>
            </li>
        </ul>
    </div>
</nav>
</div>

<div class="welcome">
 
 <h1> WEB Veterinaria </h1>
 <p>

 </p>
 <p>  </p><br>

 <a href="cerrar.php">Cerrar sesion</a>
</div>


</body>
</html>