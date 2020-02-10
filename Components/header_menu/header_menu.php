<?php

class header_menu {

    function showHeaderMenu($arrayButton,$pageTitle,$homeURL,$actionSearch)
    {
        $button = '';

        foreach ($arrayButton as $k => $v) {

            $button .= "<a href=\"".$v."\">".$k."</a>";

        }

        $content = "<div class=\"header\">
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







