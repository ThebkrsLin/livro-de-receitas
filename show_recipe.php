<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Receita</title>
</head>
<body>
    <div>
        <?php 
        $json = file_get_contents("recipes.json");
        $jsonDecoded = json_decode($json);
        foreach($jsonDecoded->receitas as $receita){
            echo $receita->Bolo de chocolate;
        }
        #print_r($jsonDecoded);
        ?>
    </div>
</body>
</html>