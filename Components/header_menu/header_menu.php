<?php

class header_menu
{

    function showHeaderMenu($arrayButton)
    {
        $button = '';

        foreach ($arrayButton as $k => $v) {

            $button .= "<a href=\"".$v."\">".$k."</a>";

        }

        $content = "<div class=\"navbar\">
                      ".$button."
                      <div class=\"dropdown\">
                        <button class=\"dropbtn\">Dropdown</button>
                        <div class=\"dropdown-content\">
                          <a href=\"#\">Link 1</a>
                          <a href=\"#\">Link 2</a>
                          <a href=\"#\">Link 3</a>
                        </div>
                      </div> 
                    </div>";
        echo $content;

    }
}




