<?php

class recipe_card {

    function showRecipeCard($recipeName, $time, $serving, $difficult, $description, $btnName,$btnURL,$imgURL = "https://filecdn.nonsprecare.it/wp-content/uploads/2018/07/COME-CONSERVARE-IL-CIBO-IN-ESTATE.jpg"){

        Basic_components::addCss("<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/recipe_card/recipe_card_style.css\">",);

        $component = "<div class=\"card\">
   <img src='".$imgURL."'>
   <div class=\"text\">
      <h1 class=\"food\">
         ".$recipeName."
      </h1>
      <i class=\"fa fa-clock-o\">".$time."</i>
      <i class=\"fa fa-users\">".$serving."</i>
      <i class=\"fa fa-difficult\">".$difficult."</i>
      
      <p class=\"info\">".$description."</p>
   </div>
   <a href=\"".$btnURL."\" class=\"btn\">". $btnName."</a>
</div>";
            return $component;
    }
}