<?php

class section{
    function insertSection(string $title, string $body){
        $component = "<section>
                      <h1>".$title."</h1>
                      <p>".$body."</p>
                    </section>

";
        echo $component;
    }
}
