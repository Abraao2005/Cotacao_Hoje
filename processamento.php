<?php
//API
$url = 'https://economia.awesomeapi.com.br/json/last/';

//Verificar as moedas que será feita a conversão
if(isset($_GET['moeda']) && isset($_GET['moedaS'])){
   $moeda= $_GET['moeda'];
   $moedaS= $_GET['moedaS'];
   $valorA= $_GET['valorA'];
   $valorB= $_GET['valorB'];
   //Verifica se foi enviado pelo GET
   if(isset($valorA) ){
    $resultB = $valorA * reqURL($url,$moeda,$moedaS);
    $resultA = $valorA;
   }
}


//Envia a requisição para API e pega o dado necessário
function reqURL($urlL,$moeda,$moedaS){

    $ch = curl_init("$urlL$moeda-$moedaS");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    $dado = json_decode(curl_exec($ch),true);
    $dado = $dado[$moeda.$moedaS]["ask"];
     return $dado;
    curl_close($ch);
    
}
?>