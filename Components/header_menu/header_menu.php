<?php

class header_menu {

    function showHeaderMenu($arrayButton,$pageTitle,$homeURL)
    {
        $button = '';

        foreach ($arrayButton as $k => $v) {

            $button .= "<a href=\"".$v."\">".$k."</a>";

        }

        $content = "<div class=\"header\">
                      <a href=\"".$homeURL."\" class=\"logo\">".$pageTitle."</a>
                      <div class=\"header-right\">
                        ".$button."
                      </div>
                    </div><br><br><br><br><br>";
        echo $content;

    }

}







