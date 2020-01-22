<?php
class profile_card{
    function createProfile($name,$role,$where,$btnName,$btnURL,$img="https://elysator.com/wp-content/uploads/blank-profile-picture-973460_1280-e1523978675847.png"){
        $component = "<div class=\"card-profile\">
                          <img src=\"".$img."\" style=\"width:100%\">
                          <h1>".$name."</h1>
                          <p class=\"title-profile\">".$role."</p>
                          <p class = \"p-profile\">".$where."</p>
                          <p><button class =\"button-profile\" src='".$btnURL."'>".$btnName."</button></p>
                        </div>";

        return $component;
    }
}
