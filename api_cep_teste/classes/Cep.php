<?php

class Cep{
   private $host;
   private $coCep;
   private $tipoRetorno;
   
   
   function __construct($host,$coCep,$tpRetorno)
   {
    $this->host = $host;
    $this->coCep = $coCep;
    $this->tipoRetorno = $tpRetorno;
   }

   public function buscarCep(){

    // curl - cliente url
    $curl = curl_init();

    // endereco de chama da api (endpoint) ex do endereco abaixo: https://viacep.com.br/ws/01001000/json/
    $endereco =  $this->host .
    $this->coCep.
    "/" .
    $this->tipoRetorno  ;

    curl_setopt_array($curl,
    [
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $endereco
    ]);

    // executando a api com retorno e dados por json e usando decode para tratar os dados true=virar array
    $dados = curl_exec($curl);
    $dados = json_decode($dados, true);

    return $dados;

   }


};


?>