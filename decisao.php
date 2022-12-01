<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decisão</title>
</head>
<body>
    <h1> Cadastro de cliente </h1>
    <?php
$nome="LETICIA";
$idade = 18;
$fumante= false;
echo "<p>ID do cliente: $nome <br>";
echo"idade do cliente: $idade <br>";
echo"fumante: $fumante </p>";

/* OPRADORES ARITIMÉTICOS */ 

echo 20*3;
echo"<br>";

// OPERADORES RELACIONAIS 

echo 20>10;
echo"<br>";

// ESTRUTURA DE DECISÃO

// UMA PESSOA COM 75 ANOS NÃO PODE ENTRAR NA FESTA DA MELYSSA
// SE FOR FUMANTE NÃO PODE ENTRAR
// iadade não pode ser < 10 anos

//IF SIMPLES- TERÁ NO MÁXIMO 2 RESPOSTA 
echo"<br>";
$idade= 75;
$fumante= true;
// if = SE
    if($idade> 75 || $fumante == true || $idade <= 10){
        echo" PROIBIDO A ENTRADA ACIMA DE 75 ANOS NA FESTA,NÃO PODE SER FUMANTE E NÃO ENTRA ABAIXO DE 10";
    }else {
    echo "pode entrar, seja bem vindo";
    }

// UM ALUNO,SE TIRAR UMA NOTA ACIMA DE 8 ELE É APROVADO
// SE TIARA UMA NOTA ENTRE 5 E 8 RECUPERAÇÃO
// SE ELE TIRAR ABAIXO DE 5 ESTARÁ REPROVADO

//IF COMPOSTO - TERÁ MAIS DE 2 RESPOSTAS DIFERENTES

echo "<br>";
$nota= 10;
if($nota >=8){
    echo"Aprovado(a)";
}else if ($nota >= 5){
    echo "recuperação";
}else{
    echo "reprovado";
}


// vcs irão no senac somente se:
// estiver uniformisado
//chegar no horário
// mensagem: verdadeiro ---- PARABÉNS ,VC PODE IR
//            falso ---- FERROU, VC VAI FICAR NA SALA DO VALDEIR

echo"<br>";
$uniforme= true;
$horario= true;
// if = SE
    if($uniforme> true || $horario == true || $uniforme <= true){
        echo" verdadeiro ---- PARABÉNS ,VC PODE IR";
    }else {
    echo "falso ---- FERROU, VC VAI FICAR NA SALA DO VALDEIR ";
    }

    // ternário
    echo"<br><br>";
    $uniforme= true;
    $horario= true;
 echo($uniforme == true && $horario == true) ? "PARABÉNS, VC PODE IR" : "FERROU, VC VAI FICAR NA SLA DO VALDEIR"
  
 //SUA COR FAVORITA PODE SER: VERMELHO,AZUL,VERDE
 // SWTICH - ESCOLHER UMA DAS OPÇÕES

 $cor = "Preto";
  switch ($cor){
     case 'azul':
        echo "<br>";
        echo "Sua cor favorita é $cor";
        break;

        case 'verde' :
            echo "<br>";
            echo "sua cor favorita é $cor";
            break;
    
            case 'vermelho' :
                echo "<br>";
                echo "sua cor favorita é $cor";
                break;
    default:
        echo "<br><br>";
        echo "Sua cor favorita não é azul, verde ou vermelho";
        break;
 }

 // dias sa semana  ---- 1 domingo, 2 segunda, 3 terça, 4 quarta, 5 quinta, 6 sexta e 7 - sábado

 $dia = 3;
 switch($dia){
    case '1':
     echo "domingo";
        break;
        case '2':
        echo "segunda-feira";
        break;
        case '3':
        echo "terça-feira";
        break;
        case '4':
        echo "quarta-feira";
        break;
        case '5':
        echo "quinta-feira";
        break;
        case '6':
        echo "sexta-feira";
        break;
        case '7':
        echo "sábado";
        break;
        default:
        echo "dia inválido";
        break;

 }

 //escolha um presente para o professor em seu aniversário:
 // 1 - um porte de sorvete
 // 2 - mouse quebrado
 // 3 - celular da biqueria funcionando desbloqueado
 // 4 - fone usado
 // 5 - mouse pad rasgado
 // 6 - 1 kg feijão
 // 7 - um vale burger king











    ?>
</body>
</html>