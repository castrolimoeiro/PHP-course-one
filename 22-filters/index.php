<?php
/* Validações
Funções (filter_input - filter_var)
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL
*/
?>
<?php
// se existe a variavel
// array de erros
if(isset($_POST['enviar-formulario'])):
    $erros = array();
    
    // validações - retornam true ou false
    /*if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] = "Idade precisa ser um número inteiro.";
    endif;

    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] = "Insira um email válido";
    endif;

    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] = "Insira um peso válido";
    endif;

    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] = "Insira um ip válido";
    endif;

    if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] = "Insira uma url válida";
    endif;*/
    

    // Sanitize
    // Funções (filter_input - filter_var)
    // FILTER_SANITIZE_SPECIAL_CHARS
    // FILTER_SANITIZE_NUMBER_INT
    // FILTER_SANITIZE_EMAIL
    // FILTER_SANITIZE_URL

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($idade, FILTER_VALIDATE_INT)):
        $erros[] = "idade precisa ser um número válido";
    endif;

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        $erros[] = "email inválido!";
    endif;

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    if(!filter_var($url, FILTER_VALIDATE_URL)):
        $erros[] = "Url inválida!";
    endif;

    // se esta vazia
    // exibindo mensagens
    if(!empty($erros)):
        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;
    else:
        echo "Dados inseridos corretamente!";
    endif;

endif;

?>

<html>
    <body>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                Nome: <input type="text" name="nome"><br>
                Idade: <input type="text" name="idade"><br>
                Email: <input type="text" name="email"><br>
            <!--Peso: <input type="text" name="peso"><br>
                IP: <input type="text" name="ip"><br>-->
                Url: <input type="text" name="url"><br>
                <button type="submit" name="enviar-formulario">Enviar</button>                
            </form>


    </body>
</html>