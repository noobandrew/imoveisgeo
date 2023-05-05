<?php
// Configuração do banco de dados

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'topomaster';

// Conexão com o banco de dados
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verifica se houve erro na conexão com o banco de dados
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome_area = $_POST['nome_area'];
$pronome = $_POST['pronome'];
$parcela_co = $_POST['parcela_co'];
$codigo_imo = $_POST['codigo_imo'];
$registro_m = $_POST['registro_m'];
$muni = $_POST['muni'];
$projeto = $_POST['projeto'];

// Monta a consulta SQL
$sql = "SELECT * FROM usuarios WHERE ";

if (!empty($nome_area)) {
    $sql .= "nome_area = '$nome_area' AND ";
}

if (!empty($pronome)) {
    $sql .= "pronome = '$pronome' AND ";
}

if (!empty($parcela_co)) {
    $sql .= "parcela_co = '$parcela_co' AND ";
}

if (!empty($codigo_imo)) {
    $sql .= "codigo_imo = '$codigo_imo' AND ";
}

if (!empty($registro_m)) {
    $sql .= "registro_m = '$registro_m' AND ";
}

if (!empty($muni)) {
    $sql .= "muni = '$muni' AND ";
}

if (!empty($projeto)) {
    $sql .= "projeto = '$projeto' AND ";
}

// Remove o último "AND" da consulta
$sql = rtrim($sql, "AND ");

// Executa a consulta no banco de dados
$resultado = $conn->query($sql);

// Verifica se houve resultados na consulta
if ($resultado->num_rows > 0) {
    // Imprime os resultados na tela
    while ($linha = $resultado->fetch_assoc()) {
        echo "Nome da Área: " . $linha["nome_area"] . "<br>";
        echo "Detentor(a): " .     <?php echo rtrim(trim($linha['pro1nome'].";".$linha['pro2nome'].";".$linha['pro3nome'].";".$linha['pro4nome'].";".$linha['pro5nome']), ';'); ?>
 . "<br>";
        echo "Código da Parcela: " . $linha["parcela_co"] . "<br>";
        echo "Código do Imóvel: " . $linha["codigo_imo"] . "<br>";
        echo "Registro: " . $linha["registro_m"] . "<br>";
        echo "Município: " . $linha["muni"] . "<br>";
        echo "Projeto: " . $linha["projeto"] . "<br><br>";
    }
} else {
    echo "Nenhum resultado encontrado.";
}

// Fecha a conexão com o banco de dados
$conn->close();







echo "<div"." class="."\"". "table-responsive" . "\"" .">";
echo "<table class="."\"". "greyGridTable" . "\"" .">";
echo "<tbody>";
echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>Denomina��o"."</strong"."</td>". "<td class ="."\"". "table-rightcolumn" . "\"" ."><h4>".$linha['nome_area']."</h4></tr>";
echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong>�rea</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['areaha']."ha"."</td>"."</tr>";
echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong>C�digo Parcela</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['parcela_co']."</td>"."</tr>";
echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> C�digo Im�vel (SNCR/INCRA)</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['codigo_imo']."</td>"."</tr>";
echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Status</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['status']."</td>"."</tr>";
echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Munic�pio</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['muni']."</td>"."</tr>";
echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">". "<strong> Projeto</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".$linha['projeto']."</td>"."</tr>";
echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>DOCUMENTOS NO DRIVE</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">"."<a href="."\"".$linha['documentos']."\">"."Clique aqui"."</a></td>";
echo "<tr>"."<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>"."LINK SIGEF"."</strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">"."<a href="."\""."https://sigef.incra.gov.br/geo/parcela/detalhe/".$linha['parcela_co']."\">"."Clique aqui"."</a></td>"."</tr>";
echo "<td class ="."\"". "backgroundtable" . "\"" .">"."<strong>Detentores </strong>"."</td>"."<td class ="."\"". "table-rightcolumn" . "\"" .">".rtrim(trim($linha['pro1nome'].";".$linha['pro2nome'].";".$linha['pro3nome'].";".$linha['pro4nome'].";".$linha['pro5nome']), ';')."</td>";
echo "<tr>"."<td colspan="."10".">"."<iframe src="."\"".$linha['mapa']."\""." width="."100%"." height="."300"." frameborder="."0"." style="."border:0"." allowfullscreen></iframe>"."</td>"."</tr>";
echo "<br>";





echo "Detentor(es): " . rtrim(trim($linha['pro1nome'] . ";" . $linha['pro2nome'] . ";" . $linha['pro3nome'] . ";" . $linha['pro4nome'] . ";" . $linha['pro5nome']), ';') . "<br>";
