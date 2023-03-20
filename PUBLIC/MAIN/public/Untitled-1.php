
$dbHost = 'localhost';
$dbUsername = 'master';
$dbPassword = 'topogeo1718';
$dbName = 'server';


$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($mysqli->connect_errno) {
    echo "Erro";
} else {
    echo "Conectado";
}







$sql = "SELECT * FROM `USUARIOS` WHERE pro1code = '$login' OR pro2code = '$login' OR pro3code = '$login' OR pro4code = '$login' OR pro5code = '$login'";
$result = $mysqli->query($sql);




if($result->num_rows > 0) {
	$row = $result->fetch_assoc();

    if ($_POST['codigo'] == $pro1code) {
        $_SESSION['nome'] = $pro1nome;
        header('location:mainpage_NEW.php');
    } elseif ($_POST['codigo'] == $pro2code) {
        $_SESSION['nome'] = $pro2nome;
        header('location:mainpage_NEW.php');
    } elseif ($_POST['codigo'] == $pro3code) {
        $_SESSION['nome'] = $pro3nome;
        header('location:mainpage_NEW.php');
    } elseif ($_POST['codigo'] == $pro4code) {
        $_SESSION['nome'] = $pro4nome;
        header('location:mainpage_NEW.php');
    } elseif ($_POST['codigo'] == $pro5code) {
        $_SESSION['nome'] = $pro5nome;
        header('location:mainpage_NEW.php');
    }
} else {
    unset($_SESSION['codigo']);
    header('location:index.php');
}




