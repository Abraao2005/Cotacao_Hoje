<?php
include("./processamento.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotação Hoje</title>
    <link rel="stylesheet" href="http://localhost/projetos/cotação/css/style.css">
</head> 
<body>
    <div id="container">
        <div id="box">
        <div id="h1">
        <H1>Descubra o valor da sua moeda:</H1>
        </div>
       
        <form method="get">
            <div class="form">
            <select name="moeda">>
            <option value="USD">Dólar Americano</option>
            <option value="EUR">Euro</option>
            </select>
            <input type="number" name="valorA" id="" value="<?php echo $resultA ?>" require>
            </div>
            <div class="form">
            <select id="cars" name="moedaS">
            <option value="BRL">Real</option>

            </select>
            <input type="number" name="valorB" value="<?php echo $resultB?>" readonly>
            </div>
            <div id="sub">
            <input type="submit" value="Converter">
            </div>
            
        
         

        </form>
            
        </div>
  
    </div>

</body>
</html>