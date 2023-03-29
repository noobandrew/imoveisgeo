function substituirDigitos($str) {
    $caracteres = array("Q", "M", "W", "N", "R", "B", "T", "V", "P", "C");
    for ($i = 0; $i < 10; $i++) {
        $str = str_replace(strval($i), $caracteres[$i], $str);
    }
    return $str;
}


$_SESSION['codigo'] = substituirDigitos($_SESSION['codigo']);
echo $_SESSION['codigo']; // imprime 





52053059087



0 por Q, 1 por M, 2 por W, 3 por N, 4 por R, 5 por B, 6 por T, 7 por V, 8 por P, 9 por C







<?php

function substituirCaracteres($string) {
    $mapaSubstituicao = array(
        '0' => 'Q',
        '1' => 'M',
        '2' => 'W',
        '3' => 'N',
        '4' => 'R',
        '5' => 'B',
        '6' => 'T',
        '7' => 'V',
        '8' => 'P',
        '9' => 'C'
    );

    $novaString = '';
    $tamanhoString = strlen($string);

    for ($i = 0; $i < $tamanhoString; $i++) {
        $caracterAtual = $string[$i];
        if (array_key_exists($caracterAtual, $mapaSubstituicao)) {
            $novaString .= $mapaSubstituicao[$caracterAtual];
        } else {
            $novaString .= $caracterAtual;
        }
    }

    return $novaString;
}

// Exemplo de uso:
$stringOriginal = '1234567890';
$stringSubstituida = substituirCaracteres($stringOriginal);
echo "String original: " . $stringOriginal . "<br>";
echo "String substituída: " . $stringSubstituida;
?>










.greyGridTable {
  text-align: left;
  background-color: Honeydew;
  border-collapse: collapse; 
  text-align: center;
	padding: auto;
    width: 100%;

  }
.greyGridTable th { 
  background-color: goldenrod;
  color: white; 
  }
.greyGridTable td, 
.greyGridTable th { 
  padding: 10px;
  border: 1px solid forestgreen; 
  }
  .table-responsive {
	overflow-x: scroll;
	align-self: center;
  }

  






  table.greyGridTable {
	border: 9px solid #FFFFFF;
	background-color: #EEEEEE;
	width: 100%;
	text-align: center;
	padding: auto;
	-webkit-overflow-scrolling: touch;
  }
  table.greyGridTable td, table.greyGridTable th {
	border: 1px solid #6B6B6B;
	padding: 3px 3px;
  }
  table.greyGridTable tbody td {
	font-size: 13px;
	color: #333333;
  }
  table.greyGridTable td:nth-child(even) {
	background: #D6D6D6;
  }
  table.greyGridTable thead {
	background: #FFFFFF;
	border-bottom: 4px solid #333333;
  }
  table.greyGridTable thead th {
	font-size: 15px;
	font-weight: bold;
	color: #333333;
	text-align: center;
	border-left: 2px solid #333333;
  }
  table.greyGridTable thead th:first-child {
	border-left: none;
  }
  
  table.greyGridTable tfoot {
	font-size: 14px;
	font-weight: bold;
	color: #333333;
	border-top: 4px solid #333333;
  }
  table.greyGridTable tfoot td {
	font-size: 14px;
  }

  .table-responsive {
	overflow-x: scroll;
	align-self: center;
  }
























  echo "<td>". "<strong>Denominação: ".$user_data['nome_area']."</strong"."</td>";
		echo "<td>". "<strong>Área: </strong>".$user_data['areaha']."ha"."</td>";
		echo "<td>". "<strong>Código Parcela: </strong>".$user_data['parcela_co']."</td>";
		echo "<td>". "<strong> Código Imóvel (SNCR/INCRA): </strong>".$user_data['codigo_imo']."</td>";
		echo "<td>". "<strong> Status: </strong>".$user_data['status']."</td>";
		echo "<td>". "<strong> Município: </strong>".$user_data['muni']."</td>";
		echo "<td>". "<strong> Projeto: </strong>".$user_data['projeto']."</td>";
		echo "<td>"."<a href="."\"".$user_data['documentos']."\">"."<strong>DOCUMENTOS NO DRIVE</strong>: Clique aqui"."</a></td>";
		echo "<td>"."<a href="."\""."https://sigef.incra.gov.br/geo/parcela/detalhe/".$user_data['parcela_co']."\">"."<strong>LINK SIGEF</strong>: Clique aqui"."</a></td>";
		echo "<td>"."<strong>Detentores: </strong>".rtrim(trim($user_data['pro1nome'].";".$user_data['pro2nome'].";".$user_data['pro3nome'].";".$user_data['pro4nome'].";".$user_data['pro5nome']), ';')."</td>";
		echo "<tr>"."<td colspan="."10".">"."<iframe src="."\"".$user_data['mapa']."\""." width="."90%"." height="."300"." frameborder="."0"." style="."border:0"." allowfullscreen></iframe>"."</td>"."</tr>";
		echo "<br>";







		echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>Denominação"."</strong"."</td>". "<td><h3>".$user_data['nome_area']."</h3></tr>";











    background: rgb(255,255,255);
background: linear-gradient(0deg, rgba(255,255,255,0.9332107843137255) 0%, rgba(222,147,34,1) 100%, rgba(255,255,255,1) 100%);