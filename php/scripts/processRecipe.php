<?php

if (!empty($_FILES['photo']['name'])){
    $origem = $_FILES['photo']["tmp_name"];

    $photo = time().$_FILES['photo']['name'];

    $destino = "../../database/imgRecipe/$photo";

    move_uploaded_file($origem, $destino);

    echo "<h1>Deu certo!</h1>";
} else {
    $photo = "vazio.jpg";
    echo "<h1>Não resultou!</h1>";
}
