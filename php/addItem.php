<?php
    include('../config/app.php');
    include('../php/fct/request.php');
    include('../php/fct/item.php');

    $intitule = post('intitule');
    if (!file_exists(FILE_NAME)) {
        file_put_contents(FILE_NAME, serialize([]));
    }

    $items = getItems();
    $items[] =
    [
        'checked' => false,
        'intitule' => $intitule
    ];
    file_put_contents(FILE_NAME, serialize($items));

    header('Location:../index.php');