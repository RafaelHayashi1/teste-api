<?php
include "classes/Cep.php";

$cep = isset($_GET['cep'])?$_GET['cep']: $cep = "erro";
echo "Vou pesquisar o cep: $cep";
                    //host                     cep modo que o arquivo ira voltar
$pesqCep = new Cep("https://viacep.com.br/ws/",$cep,"json");

// func publica de buscarcep e tratar o json para array
$dados = $pesqCep->buscarCep();
echo"<pre>";
print_r($dados);
echo"</pre>";
?>



<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="set">
        <input type="text" name="cep">
        <input type="submit" name="Enviar">
    </form>
</body>
</html>