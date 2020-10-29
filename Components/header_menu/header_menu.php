<?php

class header_menu {

    function showHeaderMenu(array $arrayButton, string $pageTitle, string $homeURL, string $textColor = "#fff", string $bgColor = "#40c4ff")
    {
        $buttons = '';

        foreach ($arrayButton as $k => $v) {

            $buttons .= "<a href=\"".$v."\">".$k."</a>";

        }


        $content = "<div class=\"header\" style=\"color:". $textColor ."; background-color:".$bgColor."\">
                      <a href=\"".$homeURL."\" class=\"logo\">".$pageTitle."</a>
                        <form class='searchClass'>
                         <div class=\"header-right\">
                        ".$buttons."
                         </div>

                    </form>
                      
                    
                      
                    </div><br><br><br><br><br>";
        echo $content;

    }

}







