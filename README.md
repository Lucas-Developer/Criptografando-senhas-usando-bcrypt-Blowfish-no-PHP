# Criptografando-senhas-usando-bcrypt-Blowfish-no-PHP

Suporte ao bcrypt

O PHP suporta hashing via bcrypt através da função crypt() que está presente desde o PHP 4, e serve pra trabalhar com hashings de mão única (como o MD5 e SHA1).


Usando o bcrypt

O bcrypt precisa – obrigatóriamente – receber dois “parâmetros” pra funcionar: o salt e o custo de processamento. O salt nada mais é do que a sua garantia de que, dado um salt aleatório, a mesma senha nunca será igualmente hasheada duas vezes… não importa que você criptografe a mesma senha 100 vezes, se o salt for diferente nas 100 vezes, o resultado final será sempre diferente. Para o bcrypt funcionar:

   1. O salt precisa ser uma string de 22 caracteres que respeite a expressão regular ./0-9A-Za-z.
   2. O custo deve ser um número inteiro entre 4 e 31, outro detalhe é que o custo precisa ter dois dígitos, então números menores que 10 precisam ter zero à esquerda
   
   
   O custo de processamento influencia diretamente nas tentativas de ataque de força bruta, quanto maior, mais lento, quanto mais lento, melhor.
