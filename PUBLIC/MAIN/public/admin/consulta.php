<?php

header('Content-type: text/html; charset=ISO-8859-1');





session_start();
include_once('conexao.php');


// Recebe os dados do formulário
$nome_area = $_POST['nome_area'];
$pronome = $_POST['pronome'];
$parcela_co = $_POST['parcela_co'];
$codigo_imo = $_POST['codigo_imo'];
$registro_m = $_POST['registro_m'];
$muni = $_POST['muni'];
$projeto = $_POST['projeto'];
$status = $_POST['status'];

// Monta a consulta SQL
$sql = "SELECT * FROM usuarios WHERE ";

if (!empty($nome_area)) {
    $sql .= "nome_area LIKE '%$nome_area%' AND ";
}

if (!empty($pronome)) {
    $sql .= "(pro1nome LIKE '%$pronome%' OR pro2nome LIKE '%$pronome%' OR pro3nome LIKE '%$pronome%' OR pro4nome LIKE '%$pronome%' OR pro5nome LIKE '%$pronome%') AND ";
}

if (!empty($parcela_co)) {
    $sql .= "parcela_co LIKE '%$parcela_co%' AND ";
}

if (!empty($codigo_imo)) {
    $sql .= "codigo_imo LIKE '%$codigo_imo%' AND ";
}

if (!empty($registro_m)) {
    $sql .= "registro_m LIKE '%$registro_m%' AND ";
}

if (!empty($muni)) {
    $sql .= "muni LIKE '%$muni%' AND ";
}

if (!empty($projeto)) {
    $sql .= "projeto LIKE '%$projeto%' AND ";
}

if (!empty($status)) {
    $sql .= "status LIKE '%$status%' AND ";
}


// remove o último "AND" da string SQL
$sql = rtrim($sql, "AND ");


// Remove o último "AND" da consulta
$sql = rtrim($sql, "AND ");

// Executa a consulta no banco de dados
$result = $conexao->query($sql);

// $resultado = $conn->query($sql);


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
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
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
	<link rel="stylesheet" type="text/css" href="css/style3.css">


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
<a href="logout.php"><img class="logo-image" src="img/logo.png" style= width:70px;height:45px;></a>

<div class="nav-btn">
		  <label for="nav-check">
			<span></span>
			<span></span>
			<span></span>
		  </label>
		</div>



		
		<div class="nav-links">
			
			
		  <a href="logout.php" target="_self"  class ="xii"><h5>Logout (Sair)</h5></a>


		</div>
</div>


                    <div class="forms">
<?php
header('Content-type: text/html; charset=ISO-8859-1');
// print_r($result);
// $user_data = mysqli_fetch_assoc($result);
// print_r($user_data);
$num_rows = mysqli_num_rows($result);
echo "Foram encontrados $num_rows resultados.";

if (!$result) {
  die('A consulta falhou: ' . mysqli_error($conexao));
} elseif (mysqli_num_rows($result) == 0) {
  echo  "<strong>"."Nenhum registro encontrado." . "</strong>";
}


// Imprime os resultados na tela
while ($linha = mysqli_fetch_assoc($result)) {
	
	echo "<div" . " class=" . "\"" . "table-responsive" . "\"" . ">";
	echo "<table class=" . "\"" . "greyGridTable" . "\"" . ">";
	echo "<tbody>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>Denominação"."</strong"."</td>". "<td class ="."\"". "table-rightcolumn" . "\"" ."><h4>".$linha['nome_area']."</h4></tr>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong>Área</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['areaha']."ha"."</td>"."</tr>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong>Código Parcela</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['parcela_co']."</td>"."</tr>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Código Imóvel (SNCR/INCRA)</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['codigo_imo']."</td>"."</tr>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Status</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['status']."</td>"."</tr>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Município</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['muni']."</td>"."</tr>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Projeto</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['projeto']."</td>"."</tr>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>DOCUMENTOS NO DRIVE</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">"."<a href="."\"".$linha['documentos']."\">"."Clique aqui"."</a></td>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>"."LINK SIGEF"."</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">"."<a href="."\""."https://sigef.incra.gov.br/geo/parcela/detalhe/".$linha['parcela_co']."\">"."Clique aqui"."</a></td>"."</tr>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>LINK MYMAPS</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">"."<a href="."\"".$linha['mapa']."\">"."Clique aqui"."</a></td>";
	echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>Detentores </strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".rtrim(trim($linha['pro1nome'].";"."<br>".$linha['pro2nome'].";".$linha['pro3nome'].";".$linha['pro4nome'].";".$linha['pro5nome']), ';')."</td>";

	echo "<br>";
}

// Fecha a conexão com o banco de dados
$conexao->close();
?>
</div>
<script src="//unpkg.com/jquery@3.3.1/dist/jquery.js"></script>

<script>


//=========================================================
</script>


</body>
</html>
