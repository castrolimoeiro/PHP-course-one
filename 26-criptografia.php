<?php
$senha = "123456";
$senha_db = '$2y$10$4NF5tM.1SdmFAPJFc6zti.vw7KNtZtxwk02TQcaMF3k8um7t.s7GS'; // hash

if(password_verify($senha, $senha_db)):
    echo "Senha válida.";
else:
    echo "Senha inválida.";
endif;
echo "<hr>";


// password_hash
// o recomendado no banco de dados é a opção com 255 caracteres
$options = [
    'cost' => 10,  // quanto maior mais seguro porem mais recursos de hardware é necessário
];
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
echo "password_hash: ".$senhaSegura;
echo "<hr>";



// base64 - conseguimos criptografar e descriptografar
// não é tão útil
$novaSenha = base64_encode($senha);
echo "base64: ".$novaSenha."<br>";
echo "Sua senha é: ".base64_decode($novaSenha);
echo "<hr>";

// md5 - aqui só conseguimos criptografar
echo "md5: ".md5($senha);
echo "<hr>";

// sha1
echo "sha1: ".sha1($senha);
echo "<hr>";

