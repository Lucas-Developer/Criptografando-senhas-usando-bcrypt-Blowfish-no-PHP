<?php
 
// Encriptando a senha
$senha = 'ola mundo';
$hash = Bcrypt::hash($senha);
// $hash = $2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm
// Salve $hash no banco de dados
 
// Verificando a senha
$senha = 'ola mundo';
$hash = '$2a$08$MTgxNjQxOTEzMTUwMzY2OOc15r9yENLiaQqel/8A82XLdj.OwIHQm'; // Valor retirado do banco
 
if (Bcrypt::check($senha, $hash)) {
    echo 'Senha OK!';
} else {
    echo 'Senha incorreta!';
}
