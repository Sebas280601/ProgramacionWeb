<?php

session_start();

include("conn.php");

//COMPROBAR CONEXIÓN
/*if ($conn) {
	echo "Todo correcto, se ha hecho la conexion";
	echo "<script> alert('CONEXION LOGRADA CON EXITO'); window.location='index.html' </script>";
}

if(!$conn){
	die("No hay conexion: ".mysqli_connect_error());
	echo "<script> alert('VALIO CHEETOS :v'); window.location='index.html' </script>";
}*/

if (isset($_POST['btnbuscar'])) {

		$busqueda = trim($_POST['search']);
		$busqueda = strtolower($busqueda);//todo a minusculas
		$consulta = "SELECT especie FROM especies WHERE especie='$busqueda'";
		$resultado = mysqli_query($conn,$consulta);
		$nr = mysqli_num_rows($resultado);



		if ($nr==1) {
			
			//echo "<script> alert('Busqueda realizada con exito'); window.location='page2.html' </script>";
			echo "<script> alert('Busqueda encontrada para la especie $busqueda'); window.location='$busqueda.html' </script>";

		}else{

			echo "<script> alert('Busqueda no encontrada'); window.location='index.html' </script>";

		}
}

if (isset($_POST['btnPerros'])) {

		$busqueda = trim($_POST['search']);
		$busqueda = strtolower($busqueda);//todo a minusculas
		$consulta = "SELECT raza FROM razas WHERE raza='$busqueda' && especies_id='1'";
		$resultado = mysqli_query($conn,$consulta);
		$nr = mysqli_num_rows($resultado);



		if ($nr==1) {
			
			$consulta2 = "SELECT raza, contenido, imagen FROM razas WHERE raza='$busqueda' && especies_id='1'"; //Guardamos la consulta en una variable
			$paquete = mysqli_query($conn,$consulta2); //Guardamos el paquete devuelto por la consulta en una variable
			$dato=mysqli_fetch_array($paquete); //Guardamos la primera fila de la consulta en una variable para poder manipular la consulta
			$raza = $dato["raza"]; //Guardamos en una variable el dato que consultamos perteneciente a la primera fila de la columna raza en la bd
			$texto = $dato["contenido"]; //Guardamos en una variable el dato que consultamos perteneciente a la primera fila de la columna contenido en la bd
			$img = $dato['imagen'];
			$_SESSION['Raza'] = $raza;
			$_SESSION['Texto'] = $texto;
			$_SESSION['Imagen'] = $img;
			echo "<script> alert('Busqueda encontrada para la raza $raza'); window.location='raza.php' </script>";

		}else{

			echo "<script> alert('Busqueda no encontrada'); window.location='perros.html' </script>";

		}
}

if (isset($_POST['btnGatos'])) {

		$busqueda = trim($_POST['search']);
		$busqueda = strtolower($busqueda);//todo a minusculas
		$consulta = "SELECT raza FROM razas WHERE raza='$busqueda' && especies_id='2'";
		$resultado = mysqli_query($conn,$consulta);
		$nr = mysqli_num_rows($resultado);



		if ($nr==1) {
			
			$consulta2 = "SELECT raza, contenido, imagen FROM razas WHERE raza='$busqueda' && especies_id='2'"; //Guardamos la consulta en una variable
			$paquete = mysqli_query($conn,$consulta2); //Guardamos el paquete devuelto por la consulta en una variable
			$dato=mysqli_fetch_array($paquete); //Guardamos la primera fila de la consulta en una variable para poder manipular la consulta
			$raza = $dato["raza"]; //Guardamos en una variable el dato que consultamos perteneciente a la primera fila de la columna raza en la bd
			$texto = $dato["contenido"]; //Guardamos en una variable el dato que consultamos perteneciente a la primera fila de la columna contenido en la bd
			$img = $dato['imagen'];
			$_SESSION['Raza'] = $raza;
			$_SESSION['Texto'] = $texto;
			$_SESSION['Imagen'] = $img;
			echo "<script> alert('Busqueda encontrada para la raza $raza'); window.location='raza.php' </script>";

		}else{

			echo "<script> alert('Busqueda no encontrada'); window.location='gatos.html' </script>";

		}
}

if (isset($_POST['btnReptiles'])) {

		$busqueda = trim($_POST['search']);
		$busqueda = strtolower($busqueda);//todo a minusculas
		$consulta = "SELECT raza FROM razas WHERE raza='$busqueda' && especies_id='3'";
		$resultado = mysqli_query($conn,$consulta);
		$nr = mysqli_num_rows($resultado);



		if ($nr==1) {
			
			$consulta2 = "SELECT raza, contenido, imagen FROM razas WHERE raza='$busqueda' && especies_id='3'"; //Guardamos la consulta en una variable
			$paquete = mysqli_query($conn,$consulta2); //Guardamos el paquete devuelto por la consulta en una variable
			$dato=mysqli_fetch_array($paquete); //Guardamos la primera fila de la consulta en una variable para poder manipular la consulta
			$raza = $dato["raza"]; //Guardamos en una variable el dato que consultamos perteneciente a la primera fila de la columna raza en la bd
			$texto = $dato["contenido"]; //Guardamos en una variable el dato que consultamos perteneciente a la primera fila de la columna contenido en la bd
			$img = $dato['imagen'];
			$_SESSION['Raza'] = $raza;
			$_SESSION['Texto'] = $texto;
			$_SESSION['Imagen'] = $img;
			echo "<script> alert('Busqueda encontrada para la raza $raza'); window.location='raza.php' </script>";

		}else{

			echo "<script> alert('Busqueda no encontrada'); window.location='reptiles.html'</script>";

		}
}

?>