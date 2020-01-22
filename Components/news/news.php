<?php

class news{

    function insertNews($title, $description, $btnName,$btnURL,$category,$imgURL = "https://www.admassociati.it/wp-content/uploads/2017/08/news.jpg"){
        $component = "<div class=\"card\">
   <img src='".$imgURL."'>
      <a href=\"#\"><i class=\"fa fa-heart-o\"></i></a>
   <div class=\"text\">
      <h1 class=\"food\">
         ".$title."
      </h1>
            <i class=\"fa fa-clock-o\">".$category."</i>
      <p class=\"info\">".$description."</p>
   </div>
   <a href=\"".$btnURL."\" class=\"btn\">". $btnName."</a>
</div>";
        return $component;
    }
}