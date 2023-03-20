<?php

session_start();
include_once('conexao.php');
print_r($_SESSION);

if((!isset ($_SESSION['codigo']) == true))
{
  	unset($_SESSION['codigo']);
  	header('location:index.php');
}

  $logado = $_SESSION['codigo'];
  print_r($logado);

  $sql = "SELECT * FROM `USUARIOS` WHERE pro1code = '$logado' OR pro2code = '$logado' OR pro3code = '$logado' OR pro4code = '$logado' OR pro5code = '$logado'";

  $result = $conexao->query($sql);

  print_r($result);
  $user_data = mysqli_fetch_assoc($result);
  print_r($user_data);
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
<link href="assets/css/theme.css" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>


<body>



<div class="nav">
<img src="img/logo.png" style= width:80px;height:50px;>

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

		  <a href="https://www.topographia.com.br/" target="_blank"  class ="xii">Home</a>
		  <a href="https://www.topographia.com.br/nossa-empresa" target="_blank"  class ="xii">Empresa</a>
		  <a href="https://www.topographia.com.br/servicos" target="_blank"  class ="xii">Serviços</a>
		  <a href="https://www.topographia.com.br/clientes" target="_blank"  class ="xii">Clientes</a>
		  <a href="https://www.topographia.com.br/blog" target="_blank"  class ="xii">Blog</a>
		  <a href="https://www.topographia.com.br/#orcamento" target="_blank"  class ="xii">Orçamento</a>
		  <a href="https://www.topographia.com.br/informacoes" target="_blank"  class ="xii">Informações</a>
		  <a href="https://www.topographia.com.br/contato" target="_blank"  class ="xii">Contato</a>
		  <a href="https://www.topographia.com.br/politica-privacidade" target="_blank"  class ="xii">Política de Privacidade</a>

		</div>
	  </div>
	


<div class="container-xl mt-4">
        <div class="row-fluid">


    
    <div class="panel dv-expandable">
        <div style=text-align:center;>
            <strong>Bem-vindo, <?php echo $logado; ?></strong>
        </div>
        <div>


  


        <table class="greyGridTable">

<tfoot>

</tfoot>
<tbody>
<tr>
<td>Nome da propriedade</td><td><?php echo $user_data['id'] ?></td></tr>
<tr>
<td>cell1_2</td><td>cell2_2</td></tr>
<tr>
<td>cell1_3</td><td>cell2_3</td></tr>
<tr>
<td>cell1_4</td><td>cell2_4</td></tr>
</tbody>
</tr>
</table>

<div class="panel dv-expandable">
        <div style=text-align:center;>
            <strong>Parcela Y</strong>
        </div>




        <table class="greyGridTable">

<tfoot>

</tfoot>
<tbody>
<tr>
<td>cell1_1</td><td>cell2_1</td></tr>
<tr>
<td>cell1_2</td><td>cell2_2</td></tr>
<tr>
<td>cell1_3</td><td>cell2_3</td></tr>
<tr>
<td>cell1_4</td><td>cell2_4</td></tr>
</tbody>
</tr>
</table>


<div class="responsive-iframe-container">
    <iframe src="https://www.google.com/maps/d/embed?mid=1nNkOdTPsHheRg5b_JShG3bTGISSRhJY&ehbc=2E312F" frameborder="0" allowfullscreen></iframe>
</div>

        







       


<script src="//unpkg.com/jquery@3.3.1/dist/jquery.js"></script>
<script src="src/leaflet-geojson-selector.js"></script>







</body>
</html>
