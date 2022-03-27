<!DOCTYPE html>
<html lang="br">
<?php
if(isset($_POST['enviar-formulario'])):
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $quantidadeArquivos = count($_FILES['arquivo']['name']);
    $contador = 0;

    while($contador < $quantidadeArquivos):
    
    $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

    if(in_array($extensao, $formatosPermitidos)):
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'][$contador];
        $novoNome = uniqid().".$extensao";

        if(move_uploaded_file($temporario, $pasta.$novoNome)):
            echo 'Upload realizado com sucesso!<br>';
        else:
            echo 'Erro! O upload não foi realizado! $temporario<br>';
        endif;
    else:
        echo "Formato inválido .$extensao<br>";
    endif;
    $contador++;
    endwhile; 
// var_dump($_FILES);
endif;


?>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" multiple><br>
        <input type="submit" name="enviar-formulario">
    </form>
</body>