<?php 
include '../conexion/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Proyecto | Orientados</title>

<!-- Inicio estilos -->
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/6.6.0/sweetalert2.min.css">
	<style>
		header, main, footer {
      		padding-left: 300px;
    	}
    	.button-collpase{
    		display:none;
    	}
    	@media only screen and (max-width : 992px) {
      		header, main, footer {
        		padding-left: 0;
      		}
      		.button-collpase{
      			display: inherit;
      		}
    	}
	</style> 
<!-- Fin estilos-->

</head>
<body>
	<main>
		<?php include 'menu_admin.php' ?>




		