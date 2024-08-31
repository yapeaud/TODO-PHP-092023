<?php

function displayItem($key,$item)
{
    $html = '<li>
                <!-- checkbox -->
                <div class="icheck-primary d-inline ml-2">
                <a href="toggleItem.php?item=' .$key.'">';
if($item['checked']){
    $html.= '<i class="far fa-check-square"></i>';
}else{
    $html.= '<i class="far fa-square"></i>';

}
    $html.= '    </a></div>
                <!-- todo text -->
                <span class="text">
                    '.$item['intitule'].'
                </span>
                <!-- Emphasis label -->
                    
                <!-- General tools such as edit or delete-->
                <div class="tools">
                    <i class="fas fa-edit"></i>
                    <i class="fas fa-trash"></i>
                </div>
            </li>';
    return $html;
}

function getItems(){
    return unserialize(file_get_contents(FILE_NAME));
}

function saveItems($items){
    file_put_contents(FILE_NAME, serialize($items));
}