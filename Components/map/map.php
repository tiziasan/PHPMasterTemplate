<?php
class map{


    function setMap($location) {
        $component = "<div style=\"display: flex;\">
                        <iframe class=\"gmap_canvas\"  src=\"https://maps.google.com/maps?q=".$location."&t=&z=13&ie=UTF8&iwloc=&output=embed\">
                            </iframe>
                        </div>";

        return  $component;
    }

    function printMap($location) {
        $component = "<div style=\"display: flex;\">
                        <iframe class=\"gmap_canvas\"  src=\"https://maps.google.com/maps?q=".$location."&t=&z=13&ie=UTF8&iwloc=&output=embed\">
                            </iframe>
                        </div>";

        echo  $component;
    }

}

