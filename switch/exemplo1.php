<?php 

$diaDaSemana = date("w"); // ----> date("w") mostara o dia da semana em numero, começando por 0 valendo domingo.

switch ($diaDaSemana) {

    case 0:
    echo "Domingo";
    break;  // ------------> "break" pra não executar os proximos cases, somente o desejado (nessa caso 0)  

    case 1:
    echo "Segunda-Feira";
    break;

    case 2:
    echo "Terça-Feira";
    break;

    case 3:
    echo "Quarta-Feira";
    break;

    case 4:
    echo "Quinta-Feira";
    break;

    case 5:
    echo "Sexta-Feira";
    break;

    case 6:
    echo "Sábado";
    break;

    default:  // ----------------> default seria: "caso não seja nenhum numero acima, execute isso"
    echo "Data invalida";
    break;
}

?>