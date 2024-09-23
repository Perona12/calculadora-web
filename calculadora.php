<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    $resultado = '';

    if (is_numeric($num1) && is_numeric($num2)) {
        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2;
                break;
            case 'restar':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Error: División por cero.";
                }
                break;
            default:
                $resultado = "Operación no válida.";
                break;
        }
    } else {
        $resultado = "Por favor, introduce números válidos.";
    }

    echo "Resultado: " . $resultado;
}
?>;