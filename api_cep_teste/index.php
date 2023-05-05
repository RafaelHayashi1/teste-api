<?php
include "classes/Cep.php";

echo "Vou pesquisar o cep 16200374";
$cep = 16200374;
                    //host                     cep modo que o arquivo ira voltar
$pesqCep = new Cep("https://viacep.com.br/ws/",$cep,"json");

// func publica de buscarcep e tratar o json para array
$dados = $pesqCep->buscarCep();
echo"<pre>";
print_r($dados);
echo"</pre>";
?>