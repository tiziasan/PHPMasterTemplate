<?php
class map{


    function setMap($location) {
        $component = "<div>
                        <iframe class=\"gmap_canvas\"  src=\"https://maps.google.com/maps?q=".$location."&t=&z=13&ie=UTF8&iwloc=&output=embed\">
                        
                            </iframe>
                        </div>";

        echo  $component;
    }

}

