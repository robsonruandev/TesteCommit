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


// <?php
// $soma = "5";
// $subtracao = 5;

// $caso = 2;

// $calculo = $soma + $subtracao;

// $teste = $calculo >= $caso;

// echo $teste;



// o(1)
// $Array = [
//     "Fernanda",
//     "Kleber",
//     "Gabriel",
//     "Kayo",
//     "Luciano",
//     "Luziane",
//     "Robson",
//     "Neto"
// ];

// echo implode(", ", $Array);


// // o(2^n)

// echo "fernanda";
// echo "kleber";
// echo "gabriel";
// echo "kayo";
// echo "luciano";
// echo "luziane";
// echo "robson";
// echo "neto";


// // o(n!)
// $fernanda = "fernanda";
// $kleber = "kleber";
// $gabriel = "gabriel";
// $kayo = "kayo";
// $luciano = "luciano";
// $luziane = "luziane";
// $robson = "robson";
// $neto = "neto";

// echo $fernanda;
// echo $kleber;
// echo $gabriel;
// echo $kayo;
// echo $luciano;  
// echo $luziane;
// echo $robson;
// echo $neto;






//----------------------------
//Continuação Aula 3/4 02/10/26
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

function limparTerminal(){
    echo "\033[2J\033[;H";
}

limparTerminal();
echo "       ------       \n";
echo "formulario xd       \n";
echo "       ------       \n";

// informações do usuario

$nome = readline("digite seu nome aqui: ");

while (true) {
    $email = readline("digite seu email: ");


    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        break; 
    }
    echo "email invalido! tente novamente. \n";
}

while (true) {
    $idade = readline("digite sua idade: ");

    if(filter_var($idade, FILTER_VALIDATE_INT)){
        break;
    }
    echo "isso não é sua idade sacana";
}

echo "\n selecione seu curso \n ";
echo "[1] curso de fazer 67 \n";
echo "[2] curso de larpar \n";
echo "[3] curso de farmar aura \n";

while (true){
    $opcao = readline("Escolha uma opção entre 1 a 3: ");

    switch ($opcao) {
        case '1': $perfil = "curso de fazer 67"; break 2;
        case '2': $perfil = "curso de larpar"; break 2;
        case '3': $perfil = "curso de farmar aura"; break 2;
        default: echo "X opção inválida! Escolha 1, 2 ou 3.\n";
    }
}

// aprovado

$minimo = 18;

$calculo1 = $idade >= $minimo ? "maior de idade" : "menor de idade";

$calculo2 = "menor de idade" == "aprovado" ? "aprovado" : "reprovado";

$calculo3 = "maior de idade" == "reprovado" ? "reprovado" : "aprovado";

$calculo4 = $idade >= $minimo ? "aprovado" : "reprovado";

// final

limparTerminal();

echo "       ------       \n";
echo "       parabens por ter concluido o formulario       \n";
echo "       ------       \n";

echo "👤 Nome: $nome \n";
echo "📧 E-mail: $email \n";
echo "🔑 curso: $perfil \n";
echo "🔍 o canditado está: $calculo4 \n";



// $idade = readline("Digite sua idade: ");

// switch ($idade) {
//     case ($idade <= 1 ) :
//            print "Voce é de colo!";
//         break;
//     case ($idade >= 1 && $idade <= 3 ) :
//             print("Voce é um bebe!");
//         break;
//     case ($idade >= 4 && $idade <= 12 ) :
//             print("Voce é uma criança!");
//         break;
//     case ($idade >= 13 && $idade <= 17 ) :
//             print("Voce é um adolecente!");
//         break;
//     case ($idade >= 18 && $idade <= 59 ) :
//             print("Voce é um adulto!");
//         break;
//     case ($idade >= 60 && $idade <= 120 ) :
//             print("Voce é um idoso!");
//         break;
//     case ($idade >= 121) :
//             print("Voce esta morto hahah!");
//         break;
// }

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


// $idade = readline("Digite sua idade: ");
// $nome = readline("Digite seu nome: ");
// $nota = readline("Digite sua nota: ");  

// $media = "7";
// $notamax = "10";

 
// if ($nota > $media && $nota < $notamax) {
//     echo "Aprovado!";
// } elseif ($nota == $media) {
//     echo "Aprovado, mais pode Melhorar!";
// } elseif ($nota < $media) {
//     echo "Recuperação!";
// } elseif ($nota == $notamax) {
//     echo "Nota Máxima, parabens!";
// } else {
//     echo "Nota inválida!";
// }

// const nota1 = "8";
// const nota2 = "";

// $nome = readline("Digite seu nome: ");
// $idade = readline("Digite sua idade: "); 
// $nota = readline("Qual foi a sua nota Final ? ");


// 

// $A = 0;
// while ($A < 16) {  // while = enquanto
//     echo $A;
//     "\n";
//     $A++;
// }

// echo "\n";

// $j = 0;
// do {
//     echo $j;
//     $j++;
// } while ($j < 10);

// echo "\n";

// for ($i = 0; $i <= 10; $i--) {
//     echo "Seu numero é: $i \n";
// }


    // if ($nota > media && $nota < notamax) {
    //     return "Aprovado!";
    // } elseif ($nota == media) {
    //     return "Aprovado, mais pode Melhorar!";
    // } elseif ($nota < media && $nota >= notamini) {
    //     return "Recuperação!";
    // } elseif ($nota == notamax) {
    //     return "Nota Máxima, parabens!";
    // } else {
    //     return "Nota inválida!";
    // }

//}

// const nome = "Ruan";
// const idade = "21";
// const cidade = "Feira de Santana";
// const curso = "Programação";


//Aula 6 Desafioos



// $nome = "Ruan";
// $idade = "21";
// $cidade = "Feira de Santana";
// $curso = "Coude Programaçãp Fullstack";


// echo" ---- Meu Perfil ---- \n";
// echo "Nome: . $nome . \n";
// echo "idade: . $idade . \n";
// echo "Cidade: . $cidade . \n";
// echo "Curso: . $curso . \n";
// echo "---------------------";

// $nome = "Iphone 17 Pro Max";
// $preço = "R$ 8,999";
// $quantidade = "15";
// define("NOME_LOJA","MIX TECH");


// echo NOME_LOJA . "$nomedaloja| $nome | $preço | $quantidade Unidades";

// $preço ="50";
// $quantidade = "2";
// $desconto = "10";

// $subtotal = ($preço * $quantidade);
// $total = ($subtotal - $desconto);


// echo "Preço: R$ $preço\n";
// echo "Quantidade: $quantidade Unidades\n";
// echo "Subtotal: R$ $subtotal\n";
// echo "Desconto: R$ $desconto\n";
// echo "Total: R$ $total";


// $var1 = "25" ;
// $var2 = 25 ;
// $var3 = 25.5 ;
// $var4 = true;


// var_dump($var1);
// var_dump($var2);
// var_dump($var3);
// var_dump($var4);

// var_dump ((int)$var1);

// if ($var1 === $var2) {
//         echo "A variável 'a' é igual à variável 'b'\n";
//     } else {
//         echo "A variável 'a' não é igual à variável 'b'\n";
//     }


// $nome = readline("Digite a seu nome:");
// $idade = readline("Digite a sua Idade:");
// $fav = readline("Digite a sua linguagem favorita: ");

// echo"Olá $nome! voce tem $idade anos e gosta de programar em $fav!";


// $notamax = "10";
// $notamin = "0";
// $media = "7";
// $recu = "5";

// $nota = readline("Digite sua Nota: ");

// if ($nota >= $media || $nota >= $notamax){
//     echo" Voce esta aprovado!";
// } elseif ($nota) {
//     echo "";
// }


// $nota = (float) trim(readline("Digite a nota do aluno (0 a 10): "));
// $frequencia = (float) trim(readline("Digite a frequencia do aluno (0 a 100%): "));

// if ($nota < 0 || $nota > 10) {
//     echo "Nota invalida.\n";

// } elseif ($frequencia < 0 || $frequencia > 100) {
//     echo "Frequencia invalida.\n";

// } elseif ($nota >= 7 && $frequencia >= 75) {
//     echo "Aprovado!\n";

// } elseif ($nota >= 5) {
//     echo "Recuperacao.\n";

// } else {
//     echo "Reprovado.\n";
// }



// $preçohamburguer = (int)"25";
// $preçpizza = (int)"15";  
// $preçohotdog = (int)"12";
// $preçosushi = (int)"40";

// echo "=== LANCHONETE PHP === \n";

// echo "1. Hamburguer R$ ". $preçohamburguer . "\n";
// echo "2. Pizza R$ " . $preçpizza . "\n";
// echo "3. Hot Dog R$ " . $preçohotdog . "\n";
// echo "4. Sushi R$ " . $preçosushi . "\n";

// $opção  = readline("Escolha uma opção de Comida: ");

// switch ($opção) {
//     case 1:
//         echo "Hamburguer " .$preçohamburguer . "\n";
//         break;
        
//     case 2:
//         echo "Pizza " . $preçopizza . "\n";
//         break;

//     case 3:
//         echo "Hot Dog " . $preçohotdog . "\n";
//         break;

//     case 4:
//         echo "Sushi " . $preçosushi . "\n";
//         break;

//         default:
//         echo "Opção não Valida!"; 
//         break;
// }

// const NOME_CINEMA = "Cinerscla";

// echo" === " . NOME_CINEMA .  " === \n";
// echo"1. SESSÃO 2D  .......... R$ 15\n";
// echo"2. SESSÃO 3D  .......... R$ 30\n";
// echo"3. SESSÃO VIP .......... R$ 45\n";
// echo"0. SAIR\n";

// $opcao = (readline("Escolha uma Sessão: "));

// switch ($opcao) {
//     case "1":
//         $sessao = "2D";
//         $preço = "15.0";
//         break;
        
//     case "2":
//         $sessao = "3D";
//         $preço = "35.0";
//         break;

//     case "3":
//         $sessao = "VIP";
//         $preço = "45.0";
//         break;

//     case "0":
//         echo "Finalizado";
//         exit;
//         default:
//         echo "Opção Invalida";

// }

// $nome = readline("Digite seu nome: ");
// $idade = readline("Qual a sua idade: ");
// $quantidade = readline("Quantos Ingressos ? ");

// if ($idade < 0) {
//     echo "Idade Invalida";
//     exit;

// } else if ($quantidade < 1) {
//     echo "Quantidade Invalida";
//     exit;
// }

// if ($idade <= 9) {
//     $categoria = "Livre";
// } elseif($idade <= 11) {
//     $categoria = "10 Anos";
// } elseif ($idade <= 13) {
//     $categoria = "12 Anos";
// } elseif ($idade <= 15) {
//     $categoria = "14 Anos";
// } elseif ($idade <= 17) {
//     $categoria = "16 Anos";
// } else {
//     $categoria = "18 Anitos";
// }

// For

// for ( $i =0; $i <= 10; $i++ ) {
//     echo "$i \n";
// }


// // Declaração do array
// $frutas = ["Maçã", "Banana", "Laranja"];

// // Acessando um elemento pelo índice
// echo $frutas[1]; // Saída: Banana

// $cor =  ["Red","Blue","Black","3","4.5"];

// foreach ($cor as $sapequinha) {
//     echo $sapequinha."\n";
// }

// $carro = ["Maclarem","Bugatti","Ferrari","3","Amarelo"];

// foreach ($carro as $olamacaquito) {
//     echo $olamacaquito."\n";
// }

// Exemplo 1: Usando do-while (sempre roda ao menos uma vez, mesmo com condição falsa)

// $i = 1;
// echo " Teste do-while:\n";
// do {
//     echo "Número: $i \n";
//     $i++;
//     for ($i = 1; $i <= 10; $i++) {}
// } while ($i <= 3);

 for ($i = 1; $i <= 1; $i++) {
    echo "$i\n";
  while ($i <= 10);
 }