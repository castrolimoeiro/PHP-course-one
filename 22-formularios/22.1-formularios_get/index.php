<!-- GET - AS INFORMAÇÕES APARECEM NA URL-->

<html>
    <body>
            <form action="dados.php" method="GET">
                Nome: <input type="text" name="nome"><br>
                Email: <input type="email" name="email"><br>
                <button type="submit">Enviar</button><br>                
            </form>

            <a href="dados.php?idade=33&sobrenome=Castro">Enviar dados</a>

    </body>
</html>

