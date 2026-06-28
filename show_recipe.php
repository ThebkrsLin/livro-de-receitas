<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/show_recipe_style.css">
    <title><?php $choose = $_POST["choose"];
    echo "$choose";
    ?></title>
    <style>
        h1 {
            content: <?php echo "$choose";?>;
            font: 10pt Arial;
            font-weight: bolder;
            text-align: center;
            font-size: 25px;
            color: white;
            background-color: #0080ff;
            padding: 5px;
            display: block;
            position: relative;
            top: -30px;
            left: -10px;
            width: 560px;
        }
    </style>
</head>
<body>
    <div>
        <?php
        $json = file_get_contents("recipes.json");
        $recipes = json_decode($json);
        $keys = get_object_vars($recipes->receitas);
        $recipe = $recipes->receitas->$choose;
        $ingredients = $recipe->ingredientes;
        $preparation = $recipe->preparo;
        $preptime = $recipe->tempopreparo;
        $date = $recipe->data;

        echo "<h1>$choose</h1>";
        echo "<h2>Ingredientes:</h2>";
        echo "<p>".nl2br(htmlspecialchars($ingredients))."</p>";
        echo "<h2>Modo de Preparo</h2>";
        echo "<p>".nl2br(htmlspecialchars($preparation))."</p>";
        ?>
        <footer><?php
        echo nl2br(htmlspecialchars($preptime))."<br>";
        echo "Data: ".nl2br(htmlspecialchars($date));
        ?></footer>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>