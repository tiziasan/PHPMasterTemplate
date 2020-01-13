<?php
class basic_components{

    public function __construct()
    {
        $style = "<head>
                    <link rel=\"stylesheet\" href=\"/Applications/MAMP/htdocs/PHPMasterTemplate/Components/basic_components/style.css\">
                  </head>";
        echo $style;
    }

    function setH1($body,$name){
        $component = "<h1 id = '". $name .  "'>".$body."</h1>";
        echo $component;
    }

    function setH2($body,$name){
        $body = "<h2 id = '". $name .  "'>".$body."</h2>";
        echo $body;
    }
}