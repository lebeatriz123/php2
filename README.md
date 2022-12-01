# php2
 revisão comando básicos PHP

 -Operadores lógicos
 -Estrutura de Decisão
 -IF
 -Switch
 -Ternário
 -Estrutura re repetição
 -While


 -Atividades




 # Operadores lógicos
 -Operadores lógicos são:
  && (And oui E) - se apenas um expressão dor falsa o resultado será falso.
  || (OR ou OU) - uma expressão precisa ser verdadeira para o resultado ser verdadeiro.
  !(NOT ou NÃO) - inverte o resultado, se for verdadeira, o resultado vira falso.

  # Operadores relacionais

  > maior
  < menor
  >= maior igual
  <= menor igual
  != diferente
  == igual

  # Estrutura de decisão

  ## IF
  - quando vc precisa que seu código tome alguma decisão baseado em uma ou mais condições.

  ### Sintaxe:

  if(condição){
    resposta verdadeira
  }else{
    resposta falsa
  }

### IF COMPOSTO
 if(condição){
  rsposta 1
 }else if(condição){
  resposta 2
 }else{
  resposta 3
 } 

 ### TERNÁRIO

 echo (condição) ? pesposta verdadeira : resposta false;

 ### switch
 ## sintaxe

 switch(variável){
  case valor:
  código;
  break;
  caso valor:
  código;
  break;
  default:
  código;
  break;
 }

 # Estrutura de repetido

# while - enquanto
-Será executado p laço a condição for verdadeira
# sintaxe 

while(condição){
  código;
}