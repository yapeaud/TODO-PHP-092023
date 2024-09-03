<?php
include('fct/item.php');
include('fct/request.php');
include('config/app.php');

$items = getItems(); 
saveItems($items);

header('Location:index.php');