<?php

class header_menu {

    function showHeaderMenu(array $arrayButton, string $pageTitle, string $homeURL, string $actionSearch, string $bgColor)
    {
        $button = '';

        foreach ($arrayButton as $k => $v) {

            $button .= "<a href=\"".$v."\">".$k."</a>";

        }

        $content = "<div class=\"header\" style=\"background-color:".$bgColor."\">
                      <a href=\"".$homeURL."\" class=\"logo\">".$pageTitle."</a>
                        <form class='searchClass' action='".$actionSearch."'>
                         <div class=\"header-right\">
                        ".$button."
                      <input type=\"search\" name=\"search\">
                      <input type=\"submit\" value='Cerca'>
                                            </div>

                    </form>
                      
                    
                      
                    </div><br><br><br><br><br>";
        echo $content;

    }

}







