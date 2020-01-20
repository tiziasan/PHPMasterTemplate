<?php

class six_column_div{
    function setSixColumnDiv($object1, $object2, $object3,$object4, $object5, $object6){
        $component = "<div class=\"row\">
                          <div class=\"column-6\">".$object1."</div>
                          <div class=\"column-6\">".$object2."</div>
                          <div class=\"column-6\">".$object3."</div>
                          <div class=\"column-6\">".$object4."</div>
                          <div class=\"column-6\">".$object5."</div>
                          <div class=\"column-6\">".$object6."</div>
                      </div>";
        echo $component;
    }
}