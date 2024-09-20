<?php
    $nome = $_GET["nome"];
    $tipoAp = $_GET["tipoAp"];
    $diaria = $_GET["diaria"];
    $consumo = $_GET["consumo"];

    if ($tipoAp == 'A') {
        $valorDiaria = 150 * $diaria;
        $subtotal = $valorDiaria + $consumo;
        $taxa = 0.10 * $subtotal;
        $total = $subtotal + $taxa;
        echo "Total ".$total;
    } else {
        if ($tipoAp == 'B') {
            $valorDiaria = 100 * $diaria;
            $subtotal = $valorDiaria + $consumo;
            $taxa = 0.10 * $subtotal;
            $total = $subtotal + $taxa;
            echo "Total ".$total;
        } else {
            if ($tipoAp == 'C') {
                $valorDiaria = 75 * $diaria;
                $subtotal = $valorDiaria + $consumo;
                $taxa = 0.10 * $subtotal;
                $total = $subtotal + $taxa;
                echo "Total ".$total;
            } else {
                if ($tipoAp == 'D') {
                    $valorDiaria = 50 * $diaria;
                    $subtotal = $valorDiaria + $consumo;
                    $taxa = 0.10 * $subtotal;
                    $total = $subtotal + $taxa;
                    echo "Total ".$total;
                } else {
                    echo "invalido o tipo";
                }
            }
        }
    }
?>