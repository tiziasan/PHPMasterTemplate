<?php

class four_column_div{
    function setFourColumnDiv($object1, $object2, $object3, $object4){
        $component = "<div class=\"row\">
                          <div class=\"column-4\">".$object1."</div>
                          <div class=\"column-4\">".$object2."</div>
                          <div class=\"column-4\">".$object3."</div>
                          <div class=\"column-4\">".$object4."</div>
                      </div>";
        echo $component;
    }
}