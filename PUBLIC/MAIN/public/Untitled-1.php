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



