<?php

class news{

    function insertNews($title, $description, $btnName,$btnURL,$category,$imgURL = "https://www.admassociati.it/wp-content/uploads/2017/08/news.jpg"){
        $component = "<div class=\"card\">
   <img class='img-news' src='".$imgURL."'>
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

