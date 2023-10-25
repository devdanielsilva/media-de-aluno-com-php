<?php 
$nota1 = 6;//Toda variável em php, começa com o $ cifrão na frente.
$nota2 = 8; 
/*Php não é tipada, ou seja, ele é como Javascript, os tipos das variáveis são definidos dinamicamente.

Se colocarmos $nota1 = 6 ; essa variável será do tipo inteiro.

Por exemplo, variável $nome = "José da Silva"; ou $nome = "30" ; serão strings (texto) */
$media = ($nota1 + $nota2)/2;
/*Podemos usar o print ou o echo para apresentar os resultados na tela. Tem outros... */
print 'A média do aluno é ' .$media . '<br>';
//Podemos usar comandos html na linha de código, entre aspas simples ou duplas, assim como fizemos no print.

echo "A nota 1 =  $nota1 e a nota 2 =  $nota2 <br> A média é <strong>$media</strong>";




?>