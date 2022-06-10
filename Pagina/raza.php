
<?php
include("buscador.php");
$Raza = $_SESSION['Raza'];
$Texto = $_SESSION['Texto'];
$Imagen = $_SESSION['Imagen'];
$Raza = strtoupper($Raza);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCareful</title>
    <link rel="stylesheet" type="text/css" href="css/Stylesheet.css">
</head>

<header>

    <div id="titulo">
        <h1 id="t1r">PetCareful.com</h1>
        <h2 id="t22" name="tituloRaza" ><?php echo $Raza; ?></h2>
        <!--<form method="POST" action="buscador.php">  
            <input type="text" name="search" placeholder="Chihuahua, Doberman, Pastor Aleman" />
            <button type="submit" name="btnbuscar" id="btnbuscar">Buscar</button>
        </form>-->
    </div>
    <!--<div id="form">
        <form method="POST" action="buscador.php">
            <label>Search</label>
            <input type="text" name="search"  />
        </form>
    </div>-->
    
</header>

<body>
    <main>

        <div id="img">
            <h1 id="t3">Imagenes</h1>
            <div id="scroll">
                <!--Aqui irán las imagenes-->
                <img id="img1r" src="<?php echo $Imagen; ?>">
            </div>
        </div>

        <div id="cat">
            <h1 id="t4r" name="tituloRaza"><?php echo $Raza; ?></h1>
            <h2 id="t5T" name="infoRaza"><?php echo $Texto; ?></h2>
            <p><?php echo $Texto; ?></p>
            <h3 id="t6"><a href="index.html">Pagina de inicio </a></h3>
        </div>

        <div id="contac">
        <h1 id="t7">Contacto</h1>
            <h5 id="t8">19121039@morelia.tecnm.mx</h5>
            <h5 id="t11">19121033@morelia.tecnm.mx</h5>
        </div>
    </main>


</body>

<footer>
    <!-- Footer -->
</footer>

</html>