<?php

class five_column_div{
    function setFiveColumnDiv($object1, $object2, $object3, $object4, $object5){
        $component = "<div class=\"row\">
                          <div class=\"column-5\">".$object1."</div>
                          <div class=\"column-5\">".$object2."</div>
                          <div class=\"column-5\">".$object3."</div>
                          <div class=\"column-5\">".$object4."</div>
                          <div class=\"column-5\">".$object5."</div>
                      </div>";
        echo $component;
    }
}