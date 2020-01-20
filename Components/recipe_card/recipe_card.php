<?php

class recipe_card{

    function showRecipeCard($recipeName, $time, $serving, $difficult, $description, $btnName,$imgURL = "http://s6.favim.com/orig/65/food-text-Favim.com-601972.jpg"){
        $component = "<three_column_div class=\"card\">
   <three_column_div class=\"header\">
    <img src='".$imgURL."'>
   </three_column_div>
   <three_column_div class=\"text\">
      <h1 class=\"food\">
         ".$recipeName."
      </h1>
      <i class=\"fa fa-clock-o\">".$time."</i>
      <i class=\"fa fa-users\"> ".$serving."</i>
      <i class=\"difficult\"> ".$difficult."</i>

      <p class=\"info\">".$description."</p>
   </three_column_div>
   <a href=\"#\" class=\"btn\">".$btnName."</a>
</three_column_div>";
            return $component;
    }
}