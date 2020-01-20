<?php

class three_column_div{
    function setThreeColumnDiv($object1, $object2, $object3){
        $component = "<div class=\"row\">
                          <div class=\"column\">".$object1."</div>
                          <div class=\"column\">".$object2."</div>
                          <div class=\"column\">".$object3."</div>
                      </div>";
        echo $component;
    }
}