<?php

session_start();
include_once('conexao.php');

if((!isset ($_SESSION['codigo']) == true))
{
  	unset($_SESSION['codigo']);
  	header('location:index.php');
}

  $logado = $_SESSION['codigo'];

  $sql = "SELECT * FROM `usuarios` WHERE pro1code = '$logado' OR pro2code = '$logado' OR pro3code = '$logado' OR pro4code = '$logado' OR pro5code = '$logado'";

  $result = $conexao->query($sql);

  // print_r($result);
  // $user_data = mysqli_fetch_assoc($result);
  // print_r($user_data);
?>


<!DOCTYPE html> 
<head> 
<title>| PAINEL |</title>
<meta charset="utf-8">
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
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body style="background-image: url('back.jpg');   background-size: cover;">


<div class="nav">
<a href="logout.php"><img class="logo-image" src="img/logo.png" style= width:70px;height:45px;></a>

		<input type="checkbox" id="nav-check">
		<div class="nav-header">
		</div>
		<div class="nav-btn">
		  <label for="nav-check">
			<span></span>
			<span></span>
			<span></span>
		  </label>
		</div>
		
		<div class="nav-links">

		  <a href="https://www.topographia.com.br" target="_blank"  class ="xii">Nossa Homepage</a>
		  <a href="https://www.topographia.com.br/informacoes" target="_blank"  class ="xii">Informações</a>
		  <a href="https://www.topographia.com.br/contato" target="_blank"  class ="xii">Contato</a>
		  <a href="https://www.topographia.com.br/politica-privacidade" target="_blank"  class ="xii">Política de Privacidade</a>
		  <a href="logout.php" target="_self"  class ="xii"><h4>Logout (Sair)</h4></a>


		</div>
</div>

<br>
<br>


<?php

	while($user_data= mysqli_fetch_assoc($result))
	{
		echo "<div"." class="."\"". "table-responsive" . "\"" .">";
		echo "<table class="."\"". "greyGridTable" . "\"" .">";
		echo "<tbody>";
		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>Denominação"."</strong"."</td>". "<td class ="."\"". "table-rightcolumn" . "\"" ."><h4>".$user_data['nome_area']."</h4></tr>";
		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong>Área</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$user_data['areaha']."ha"."</td>"."</tr>";
		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong>Código Parcela</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$user_data['parcela_co']."</td>"."</tr>";
		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Código Imóvel (SNCR/INCRA)</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$user_data['codigo_imo']."</td>"."</tr>";
		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Status</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$user_data['status']."</td>"."</tr>";
		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Município</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$user_data['muni']."</td>"."</tr>";
		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Projeto</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$user_data['projeto']."</td>"."</tr>";
		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>DOCUMENTOS NO DRIVE</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">"."<a href="."\"".$user_data['documentos']."\">"."Clique aqui"."</a></td>";
		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>"."LINK SIGEF"."</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">"."<a href="."\""."https://sigef.incra.gov.br/geo/parcela/detalhe/".$user_data['parcela_co']."\">"."Clique aqui"."</a></td>"."</tr>";
		echo "<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>Detentores </strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".rtrim(trim($user_data['pro1nome'].";".$user_data['pro2nome'].";".$user_data['pro3nome'].";".$user_data['pro4nome'].";".$user_data['pro5nome']), ';')."</td>";
		echo "<tr>"."<td colspan="."10".">"."<iframe src="."\"".$user_data['mapa']."\""." width="."100%"." height="."300"." frameborder="."0"." style="."border:0"." allowfullscreen></iframe>"."</td>"."</tr>";

	
	}

	echo "</tbody>";
	echo "</table>";
	echo "</div>";
	?>




</div>
        


<script src="//unpkg.com/jquery@3.3.1/dist/jquery.js"></script>


</body>
</html>
