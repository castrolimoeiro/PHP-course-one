<?php
// Botão enviar
if(isset($_POST['btn-entrar'])):
    echo "clicou";
endif;
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Login</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <button type="submit" name="btn-entrar"> Entrar </button>
    </form>
</body>
</html>