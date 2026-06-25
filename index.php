<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Livro de Receitas</title>
</head>
<body>
    <div>
        <?php
        ?>
        <form method="post" action="show_recipe.php">
            <?php
            $json = file_exists("recipes.json")? file_get_contents("recipes.json") : json_last_error_msg();
            $recipes = json_decode($json, true);
            if(!empty($recipes["receitas"])){
                echo "Receitas:<br>";
                echo "<select name='choose'>";
                foreach(array_keys($recipes["receitas"]) as $nome){
                    echo "<option value='$nome'>$nome</option>";
                }
                echo"</select>";
                echo '<input type="submit" value="Ver Receita" color="red"/>';
            }
            else{
                echo "Não há receitas salvas, crie uma para acessa-la!!!";
            }
            ?>  
        </form>
        <form method="post" action="new_recipe.php">
            <input type="submit" value="Nova Receita"/>
        </form>
    </div>
</body>
</html>