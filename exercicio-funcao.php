<?php 
    // De Ana Laura Bassi e Sabrina Zimiani 

    function Adicao($ana1, $ana2) {
        $resu = $ana1 + $ana2;
        return $resu;
    }

    function Subtracao($ana1, $ana2) {
        $resu = $ana1 - $ana2;
        return $resu;
    }

    function Multiplicacao($ana1, $ana2) {
        $resu = $ana1 * $ana2;
        return $resu;
    }

    function Divisao($ana1, $ana2) {
        $resu = $ana1 / $ana2;
        return $resu;
    }

    $sinal = "x";

    switch ($sinal) {
        case "+": 
            $resu = Adicao(15, 15);
            print($resu);
        break;
        
        case "-":
            $resu = Subtracao(15, 15);
            print($resu);
        break;

        case "x":
            $resu = Multiplicacao(15, 15);
            print($resu);
        break;

        case "/":
            $resu = Divisao(15, 15);
            print($resu);
        break;
    }
?>