<?php

//echo "Hello, Wagner!";

                  //---------------------------------
                  // Aula 3 01/10/26
                  //---------------------------------


                  
//$idade = "12";
//$idade = "15";

//define("wagner","wagner");
//$wagner = "Waguinho";

//var_dump($wagner);
//const wagner2 = "Waguinho";

//ar_dump(wagner2);



                   //Operadores Aritmeticos e Relacionais

//$wagner = "wagner";
//$inteiro = 2;
//$float = 2.5;
//$boolean = true;    

//$caso = "2";

//$calculo = $inteiro + $float;
//$calculo > $caso; return $boolean;

//echo "";


//$menordeidade = "17";
//$maiordeidade = "18";

//$nome = readline("Digite seu nome: ");
//$idade1 = readline("Digite sua idade: ");

//$idade1 >= $maiordeidade ? print "$nome Você é maior de idade!" : print "$nome Você é menor de idade!";


//$caso2 = "50";
//$calculo1 = readline("Digite um número: ");
//calculo2 = readline("Digite outro número: ");

//$resultado = $calculo1 + $calculo2;

//$resultado >= $caso2 ? print"O resultado é Verdadeiro " : print"O resultado é Falso";




//----------------------------
//Continuação Aula 3 02/10/26
//----------------------------




//$caso1 = "2";
//$calculo1 = "1";
//$calculo2 = "0.5";
//$calculo1 = readline("Digite um numero: ");
//$calculo2 = readline("Digite outro numero: ");
//$resultado = $calculo1 + $calculo2;

//$resultado >= $caso1 ? print "O resultado é $resultado, logo Verdadeiro" : print "O resultado é $resultado, logo Falso";



//$nome = readline("Digite seu nome: ");

//echo "Olá, " . "$nome " . "Seja bem-vindo(a) ao curso de PHP!" . "\n";

//$idade = readline("Digite sua idade: ");

//if ($idade >= 18) {
    //print "Você é maior de idade!";
//} elseif ($idade >= 0) {
    //print "Você é uma criança!";
//} else {
    //print "Idade inválida!";
//}

// $idade = readline("Digite sua Idade: ");

// if ($idade <= 12) {
//     print"Voce é uma criança!";
// } elseif ($idade > 13 && $idade <= 17) {
//     print"Voce é um adolescente!";
// } elseif ($idade > 18 && $idade <= 59) {
//     print"Voce é um adulto!";
// } elseif ($idade > 60 && $idade <= 120) {
//     print "Voce é um idoso";
// } else {
//     print "Voce esta morto hahah";
// }

$idade = readline("Digite sua idade: ");

switch ($idade) {
    case ($idade <= 1 ) :
           print "Voce é de colo!";
        break;
    case ($idade >= 1 && $idade <= 3 ) :
            print("Voce é um bebe!");
        break;
    case ($idade >= 4 && $idade <= 12 ) :
            print("Voce é uma criança!");
        break;
    case ($idade >= 13 && $idade <= 17 ) :
            print("Voce é um adolecente!");
        break;
    case ($idade >= 18 && $idade <= 59 ) :
            print("Voce é um adulto!");
        break;
    case ($idade >= 60 && $idade <= 120 ) :
            print("Voce é um idoso!");
        break;
    case ($idade >= 121) :
            print("Voce esta morto hahah!");
        break;
}

//if ($resultado >= $caso1) {
    //print "O resultado é maior que 2";
//} else {
    //print "O resultado é menor que 2";
//}


//? print "O resultado é maior que 2" : print "O resultado é menor que 2";




//$boolean = true;

//$soma = $inteiro + $float;
//$subtracao = $inteiro - $float;
//$multiplicacao = $inteiro * $float;
//$divisao = $inteiro / $float;

//echo "$soma" ."\n";
//echo"$subtracao" ."\n";
//echo"$multiplicacao" ."\n";
//echo"$divisao" ."\n";

