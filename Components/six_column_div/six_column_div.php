<?php

class six_column_div{
    function setSixColumnDiv(string $object1, string $object2, string $object3, string $object4, string $object5, string $object6){
        $component = '<div class="row">
                          <div class="column column-6">'.$object1.'</div>
                          <div class="column column-6">'.$object2.'</div>
                          <div class="column column-6">'.$object3.'</div>
                          <div class="column column-6">'.$object4.'</div>
                          <div class="column column-6">'.$object5.'</div>
                          <div class="column column-6">'.$object6.'</div>
                      </div>';
        return $component;
    }

    function printSixColumnDiv(string $object1, string $object2, string $object3, string $object4, string $object5, string $object6){
        $component = '<div class="row">
                          <div class="column column-6">'.$object1.'</div>
                          <div class="column column-6">'.$object2.'</div>
                          <div class="column column-6">'.$object3.'</div>
                          <div class="column column-6">'.$object4.'</div>
                          <div class="column column-6">'.$object5.'</div>
                          <div class="column column-6">'.$object6.'</div>
                      </div>';
        echo $component;
    }
}