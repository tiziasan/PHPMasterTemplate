<?php

class header_menu
{

    function showHeaderMenu()
    {
        $content = "<div class=\"navbar\">
                      <a href=\"#home\">Home</a>
                      <a href=\"#news\">News</a>
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




