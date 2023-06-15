<?php

if (!empty($_FILES['photo']['name'])){
    $origem = $_FILES['photo']["tmp_name"];

    $photo = time().$_FILES['photo']['name'];

    $destino = "../database/imgProfile/$photo";

    move_uploaded_file($origem, $destino);
} else {
    $photo = "sem_foto.png";
}
