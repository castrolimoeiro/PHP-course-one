<?php
session_start();

$_SESSION['cor'] = "azul";
$_SESSION['carro'] = "fusca";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();
echo "<br>index";