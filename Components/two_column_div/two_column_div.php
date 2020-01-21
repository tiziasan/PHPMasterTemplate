<?php

class two_column_div{
    function setTwoColumnDiv($object1, $object2){
        $component = "<div class=\"row\">
                          <div class=\"column-2\">".$object1."</div>
                          <div class=\"column-2\">".$object2."</div>
                      </div>";
        echo $component;
    }
}