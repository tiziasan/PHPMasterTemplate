<?php
error_reporting(E_ALL);
ini_set("display_errors","On");

class user_profile {
    public $profile = "";

        function __construct($username, $name, $age, $location)
        {
            $profile = "<h1>".$username."</H1>";
            $profile .= "<h1>".$name."</H1>";
            $profile .= "<h1>".$age."</H1>";
            $profile .= "<h1>".$location."</H1>";
            echo $profile;

        }





}




