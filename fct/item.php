<?php

function displayItem($key, $item)
{
    $editItemId = $_GET['editItem'] ?? null;
    if ($editItemId === $key) {
        $html = '<form action="editItem.php" method="post">';
        $html .= '<input type="hidden" name="editItemId" value="' . $key . '">';
        $html .= '<div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="intitule" value="' . $item['intitule'] . '" placeholder="Intitulé">

                    <span class="input-group-append">
                        <button type="submit" class="btn btn-info btn-flat">OK</button>
                    </span>
                </div>';
        $html .= '</form>';
    } else {
        $checked = isset($item['checked']) ? $item['checked'] : false;
        $html = '<li class="' . ($checked ? 'done' : '') . '">
                    <!-- checkbox -->
                    <div class="icheck-primary d-inline ml-2">
                    <a href="toggleItem.php?item=' . $key . '">';
        if ($checked) {
            $html .= '<i class="far fa-check-square"></i>';
        } else {
            $html .= '<i class="far fa-square"></i>';
        }
        $html .= '    </a></div>
                    <!-- todo text -->';
                    
        $html .= '<span class="text">';
        
        // Check if 'intitule' key exists
        if (isset($item['intitule'])) {
            $html .= $item['intitule'];
        } else {
            $html .= 'Undefined Intitule';
        }
        
        $html .= '</span>
                    <!-- Emphasis label -->
                        
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                    <a href="index.php?editItem=' . $key . '">
                        <i class="fas fa-edit"></i>
                    </a>
                        <a href="deleteItem.php?item=' . $key . '">
                            <i class="fas fa-trash"></i>
                        </a>
        
                        
                    </div>
                </li>';
    }
    return $html;
}



function getItems()
{
    return unserialize(file_get_contents(FILE_NAME));
}

function saveItems($items)
{
    file_put_contents(FILE_NAME, serialize($items));
}
