<?php

class section{
    function insertSection(String $title,String $body){
        $component = "<section>
                      <h1>".$title."</h1>
                      <p>".$body."</p>
                    </section>

";
        echo $component;
    }
}
