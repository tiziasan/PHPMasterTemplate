<?php

class header_menu {

    function showHeaderMenu(array $arrayButton, string $pageTitle, string $homeURL ,string $bgColor)
    {
        $button = '';

        foreach ($arrayButton as $k => $v) {

            $button .= "<a href=\"".$v."\">".$k."</a>";

        }

        $content = "<div class=\"header\" style='background-color: ".$bgColor."'>
                      <a href=\"".$homeURL."\" class=\"logo\">".$pageTitle."</a>
                        <form class='searchClass'>
                         <div class=\"header-right\">
                        ".$button."
                                            </div>

                    </form>
                      
                    
                      
                    </div><br><br><br><br><br>";
        echo $content;

    }

}







