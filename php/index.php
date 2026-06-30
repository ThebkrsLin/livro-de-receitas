<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/style.css">
    <title>Livro de Receitas</title>
</head>
<body>
    <div class="container">
        <h1 class="title">LIVRO DE RECEITAS</h1>
        <div class="recipes-grid">
            <?php
            $json = file_exists("../recipes.json")? file_get_contents("../recipes.json") : json_last_error_msg();
            $recipes = json_decode($json, true);
            if(!empty($recipes["receitas"])){
                echo "<h3>Receitas:</h3><br>";
                foreach(array_keys($recipes["receitas"]) as $nome){
                    echo "<form method='post' action='show_recipe.php'>";
                    echo "<button type='subtmit'name='choose' value='$nome' class='card'>$nome</button> ";
                    echo "</form>";
                }
            }
            else{
                echo "<h3 class='empty'>Não há receitas salvas, crie uma para acessar-las!!!</h3>";
            }
            ?><vr>
        </div>
        <form method="post" action="new_recipe.php">
            <button type="submit" class="new_recipe_button">Nova Receita</button>
        </form>
    </div>
</body>
</html>