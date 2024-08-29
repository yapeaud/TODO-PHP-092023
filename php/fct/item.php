<?php

function displayItem($item)
{
    $html = '<li>
                <!-- checkbox -->
                <div class="icheck-primary d-inline ml-2">
                    <input type="checkbox" value="" name="todo1" id="todoCheck1">
                    <label for="todoCheck1"></label>
                </div>
                <!-- todo text -->
                <span class="text">'.$item['intitule'].'</span>
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