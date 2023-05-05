<?php

header('Content-type: text/html; charset=ISO-8859-1');

session_start();
include_once('conexao.php');

if ((!isset($_SESSION['admcode']) == true)) {
	unset($_SESSION['admcode']);
	header('location:index.php');
}

$logado = $_SESSION['admcode'];

$sql = "SELECT * FROM `usuarios` WHERE admcode = '$logado'";

$result = $conexao->query($sql);


// print_r($result);
// $user_data = mysqli_fetch_assoc($result);
// print_r($user_data);
?>

<!DOCTYPE html>

<head>
	<title>| PAINEL |</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">



	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<meta http-equiv="Expires" content="0">


	<!--CRYPTOJS link-->
	<script src="js/core.min.js"></script>
	<script src="js/sha3.js"></script>
	<script src="js/crypto-js.js"></script>


	<!-- ASPECT RATIO JS -->
	<script src="js/ratio.js"></script>

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">



	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style2.css">


	<!-- =========================== importados do SIGEF =========================== -->



	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- gov.br stylesheets -->
	<!-- Fonte Rawline-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900&amp;display=swap">


	<!-- ==================================================================================================== -->



</head>

<body>





	</div>


	<div class="nav">
		<input type="checkbox" id="nav-check">
		<div class="nav-header">
			<div class="nav-title">
				<img src="img/bg.svg">
			</div>
		</div>
		<a href="logout.php"><img class="logo-image" src="img/logo.png" style=width:70px;height:45px;></a>

		<div class="nav-btn">
			<label for="nav-check">
				<span></span>
				<span></span>
				<span></span>
			</label>
		</div>
		<div class="nav-links">
			<a href="logout.php" target="_self" class="xii">
				<h5>Logout (Sair)</h5>
			</a>
		</div>
	</div>


	<form action="consulta.php" method="POST">

	<div class="forms">

		<div class="control-group">

			<label class="control-label" for="nome_area">Nome da Área </label>

			<input type="text" name="nome_area" id="nome_area">

			<label class="control-label" for="pronome">Nome do(a) Detentor(a) </label>

			<input type="text" name="pronome" id="pronome">

			<label class="control-label" for="parcela_co">Código da Parcela </label>

			<input type="text" name="parcela_co" id="parcela_co">

			<label class="control-label" for="codigo_imo">Código do Imóvel (INCRA) </label>

			<input type="text" name="codigo_imo" id="codigo_imo">

			<label class="control-label" for="registro_m">Matrícula </label>

			<input type="text" name="registro_m" id="registro_m">

			<label class="control-label" for="muni">Município </label>

			<input type="text" name="muni" id="muni">


			<label class="control-label" for="projeto">Projeto </label>

			<input type="text" name="projeto" id="projeto">


			<label class="control-label" for="status">Status </label>

			<input type="text" name="status" id="status">

		</div>
	</div>


	<!-- ================================================ BOT?O DE PESQUISA ================================================ -->
	<button class="pesquisar" type="submit" value="Pesquisar">Pesquisar</button>
	<!-- ================================================================================================================================================ -->
	</form>





	<script src="//unpkg.com/jquery@3.3.1/dist/jquery.js"></script>

	<script>
		//=========================================================
	</script>


</body>

</html>