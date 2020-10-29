<?php

class img_slider
{
    function insertSlider(array $images)
    {
        $component = "<div class=\"slider\">";
        for ($i = 0; $i < count($images); $i++){
            $component .= "  <a href=\"#slide-".$i."\">".$i."</a>";
        }
        $component .= "<div class=\"slides\">";

        for ($i = 0; $i < count($images); $i++){
            $component .= "<img width = '800px' id=\"slide-".$i."\" src=\"".$images[$i]."\">";
        }
        $component .= "</div></div>";

        return $component;

    }
}