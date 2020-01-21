<?php

class header_menu {

    function showHeaderMenu($arrayButton)
    {
        $button = '';

        foreach ($arrayButton as $k => $v) {

            $button .= "<a href=\"".$v."\">".$k."</a>";

        }

        $content = "<div class=\"navbar\">
                      ".$button."
                    </div><br><br>";
        echo $content;

    }

}




