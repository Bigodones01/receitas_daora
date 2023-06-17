<?php

if (!empty($_FILES['photo']['name'])){
    $origem = $_FILES['photo']["tmp_name"];

    $photo = time().$_FILES['photo']['name'];

    $destino = "../../database/imgRecipe/$photo";

    move_uploaded_file($origem, $destino);
} else {
    $photo = "vazio.jpg";
}
