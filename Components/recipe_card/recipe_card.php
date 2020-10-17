<?php

class recipe_card{

    function showRecipeCard(string $recipeName, string $time, string $serving, string $difficult, string $description, string $btnName, string $btnURL, string $imgURL = "https://filecdn.nonsprecare.it/wp-content/uploads/2018/07/COME-CONSERVARE-IL-CIBO-IN-ESTATE.jpg"){
        $component = "<div class=\"card\">
   <img src='".$imgURL."'>
   <div class=\"text\">
      <h1 class=\"title\">
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