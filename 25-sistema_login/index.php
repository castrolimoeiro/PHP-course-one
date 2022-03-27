<?php
// conexão
require_once 'db_connect.php';

//session
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if(empty($login) or empty($senha)):
        $erros[] = "<li> Preencha os campos para realizar o login. </li>";
    else:
        $sql = "SELECT login FROM usuarios WHERE login  = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0):
            $senha = md5($senha);
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha' ";
            $resultado = mysqli_query($connect, $sql);
                
            if(mysqli_num_rows($resultado) == 1):
                    $dados = mysqli_fetch_array($resultado);
                    mysqli_close($connect);
                    $_SESSION['logado'] = true;
                    $_SESSION['id_usuario'] = $dados['id'];
                    header('Location: home.php');
                else:
                    $erros[] = "<li> Usuário ou senha não conferem. </li>";
                endif;

        else:
            $erros[] = "<li> Usuário inexistente! </li>";
        endif;

    
    endif;


endif;
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Login</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br><br>
        <button type="submit" name="btn-entrar"> Entrar </button>
    
    <?php 
    echo "<hr>"; 
    if (!empty($erros)):
        foreach($erros as $erro):
            echo $erro;
        endforeach;
    endif;
    ?>
    </form>
</body>
</html>