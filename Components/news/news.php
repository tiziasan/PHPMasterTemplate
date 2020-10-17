<?php

class news{

    function insertNews(string $title, string $description, string $btnName, string $btnURL, string $category, string $imgURL = "https://www.admassociati.it/wp-content/uploads/2017/08/news.jpg"){
        $component = "<div class=\"card\">
   <img src='".$imgURL."'>
   <div class=\"text\">
      <h1 class=\"title\">
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

