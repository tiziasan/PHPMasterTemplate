<?php

class one_column_div{

    function setOneColumnDiv($object1){
        $component = "<div class=\"row\">
                          <div class=\"column-1\">".$object1."</div>
                      </div>";
        echo $component;
    }
}