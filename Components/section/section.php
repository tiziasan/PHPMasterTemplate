<?php

class section{
    function insertSection($title,$body){
        $component = "<section>
                      <h1>".$title."</h1>
                      <p>".$body."</p>
                    </section>

";
        echo $component;
    }
}
