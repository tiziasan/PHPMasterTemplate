<?php

class img_slider
{
    function insertSlider(array $images)
    {
        $component = "<div class=\"slider\">";

        $component .= "<div class=\"slides\">";

        for ($i = 0; $i < count($images); $i++){
            $component .= "<img width = '500px' height = '500px' id=\"slide-".$i."\" src=\"".$images[$i]."\">";
        }
        $component .= "</div></div>";

        return $component;

    }
}