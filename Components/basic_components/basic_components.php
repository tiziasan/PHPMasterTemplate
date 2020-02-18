<?php
class Basic_components {

    public $import_css = array();

    public static function addCss($link){
        array_push($import_css, $link);
    }

    function setHead($title){

        $component  = "<!DOCTYPE html>
                        <html lang=\"it\">
                            <head>
                            <meta charset=\"utf-8\">
                            <title>".$title."</title>";

        $component .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
                       <meta name=\"viewport\" content=\"width=device-width\">";

        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/basic_components/style.css\">";

        /*
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/recipe_card/recipe_card_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/login_form/login_form_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/news/news_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/profile_card/profile_card_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/header_menu/header_menu_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/one_column_div/one_column_div_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/two_column_div/two_column_div_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/three_column_div/three_column_div_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/four_column_div/four_column_div_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/five_column_div/five_column_div_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/six_column_div/six_column_div_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/map/map_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/news/news_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/general_form/general_form_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/registration_form/registration_form_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/footer/footer_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/footer_2/footer_2_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/payment_form/payment_form_style.css\">";
        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/img-slider/img_slider_style.css\">";
*/
        $component .= "</head><body>";

        echo $component;

    }


    function finish(){
        $component = "";
        foreach ($this->import_css as $single_css){
            $component .= $single_css;
        }

        echo $component . '
            </body>
        </html>

        ';
    }


    function setH1($body,$attributes = null){
        $component = "<h1 ". $attributes .  ">".$body."</h1>";
        return $component;
    }

    function setH2($body,$attributes = null){
        $component = "<h2 ". $attributes .  ">".$body."</h2>";
        return $component;
    }

    function setH3($body,$attributes = null){
        $component = "<h3 ". $attributes .  ">".$body."</h3>";
        return $component;
    }

    function setH4($body,$attributes = null){
        $component = "<h4 ". $attributes .  ">".$body."</h4>";
        return $component;
    }

    function setH5($body,$attributes = null){
        $component = "<h5 ". $attributes .  ">".$body."</h5>";
        return $component;
    }

    function setH6($body,$attributes = null){
        $component = "<h6 ". $attributes .  ">".$body."</h6>";
        return $component;
    }

    function setInput($attributes = null){
        $component ="<input ".$attributes.">";
        return $component;
    }

    function setBreakLine(){
        $component = "<br>";
        return $component;
    }
    function setButton($body, $attributes = null){
        $component = "<button ".$attributes.">".$body."</button>";
        return $component;

    }
    function setImg($attributes = null){
        $component = "<img".$attributes.">";
        return $component;

    }

    function setLabel($body, $attributes = null){
        $component = "<label ".$attributes.">".$body."</label>";
        return $component;
    }

    function setAReference($body, $attributes = null){
        $component = "<a ".$attributes.">".$body."</a>";
        return $component;
    }

    function setOption($body, $attributes = null){
        $component = "<option ".$attributes.">".$body."</option>";
        return $component;
    }
    
    function setSelect(array $elements){
        $component="";
        $component .= "<select>";
        foreach ($elements as $element){
            $component .= $element;
        }
        $component .= "</select>";
        return $component;
    }

    function setParagraph($body, $attributes = null){
        $component = "<p ".$attributes.">".$body."</p>";
        return $component;
    }

    function setQuote($body, $attributes = null){
        $component = "<q ".$attributes.">".$body."</q>";
        return $component;
    }

    function setScript($body, $attributes = null){
        $component = "<script ".$attributes.">".$body."</script>";
        return $component;
    }

    function setTextArea($body, $attributes = null){
        $component = "<textarea ".$attributes.">".$body."</textarea>";
        return $component;
    }

    function setListItem($body, $attributes = null){
        $component = "<li ".$attributes.">".$body."</li>";
        return $component;
    }

    function setListElement(array $elements){
        $component="";

        $component .= "<ul>";
        foreach ($elements as $element){
            $component .= $element;
        }
        $component .= "</ul>";
        return $component;
    }





    function printH1($body,$attributes = null){
        $component = "<h1 ". $attributes .  ">".$body."</h1>";
        echo $component;
    }

    function printH2($body,$attributes = null){
        $component = "<h2 ". $attributes .  ">".$body."</h2>";
        echo $component;
    }

    function printH3($body,$attributes = null){
        $component = "<h3 ". $attributes .  ">".$body."</h3>";
        echo $component;
    }

    function printH4($body,$attributes = null){
        $component = "<h4 ". $attributes .  ">".$body."</h4>";
        echo $component;
    }

    function printH5($body,$attributes = null){
        $component = "<h5 ". $attributes .  ">".$body."</h5>";
        echo $component;
    }

    function printH6($body,$attributes = null){
        $component = "<h6 ". $attributes .  ">".$body."</h6>";
        echo $component;
    }

    function printInput($attributes = null){
        $component ="<input ".$attributes.">";
        echo $component;
    }

    function printBreakLine(){
        $component = "<br>";
        echo $component;
    }
    function printButton($body, $attributes = null){
        $component = "<button ".$attributes.">".$body."</button>";
        echo $component;

    }
    function printImg($attributes = null){
        $component = "<img".$attributes.">";
        echo $component;

    }

    function printLabel($body, $attributes = null){
        $component = "<label ".$attributes.">".$body."</label>";
        echo $component;
    }

    function printAReference($body, $attributes = null){
        $component = "<a ".$attributes.">".$body."</a>";
        echo $component;
    }

    function printOption($body, $attributes = null){
        $component = "<option ".$attributes.">".$body."</option>";
        echo $component;
    }

    function printSelect(array $elements){
        $component="";
        $component .= "<select>";
        foreach ($elements as $element){
            $component .= $element;
        }
        $component .= "</select>";
        echo $component;
    }

    function printParagraph($body, $attributes = null){
        $component = "<p ".$attributes.">".$body."</p>";
        echo $component;
    }

    function printQuote($body, $attributes = null){
        $component = "<q ".$attributes.">".$body."</q>";
        echo $component;
    }

    function printScript($body, $attributes = null){
        $component = "<script ".$attributes.">".$body."</script>";
        echo $component;
    }

    function printTextArea($body, $attributes = null){
        $component = "<textarea ".$attributes.">".$body."</textarea>";
        echo $component;
    }

    function printListItem($body, $attributes = null){
        $component = "<li ".$attributes.">".$body."</li>";
        echo $component;
    }

    function printListElement(array $elements){
        $component="";

        $component .= "<ul>";
        foreach ($elements as $element){
            $component .= $element;
        }
        $component .= "</ul>";
        echo $component;
    }
}

