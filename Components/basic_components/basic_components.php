<?php
class Basic_components{

    function setHead($title){

        $component  = "<!DOCTYPE html><html lang=\"it\"><head><meta charset=\"utf-8\"><title>".$title."</title>";

        $component .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
                       <meta name=\"viewport\" content=\"width=device-width\">";

        $component .= "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">";

        $component .= "<link rel=\"stylesheet\" type=\"text/css\" href=\"Components/basic_components/style.css\">";
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

        $component .= "</head>";

        echo $component;

    }

    function setH1(string $body, string $attributes = null){
        $component = "<h1 ". $attributes .  ">".$body."</h1>";
        return $component;
    }

    function setH2(string $body, string $attributes = null){
        $component = "<h2 ". $attributes .  ">".$body."</h2>";
        return $component;
    }

    function setH3(string $body, string $attributes = null){
        $component = "<h3 ". $attributes .  ">".$body."</h3>";
        return $component;
    }

    function setH4(string $body, string $attributes = null){
        $component = "<h4 ". $attributes .  ">".$body."</h4>";
        return $component;
    }

    function setH5(string $body, string $attributes = null){
        $component = "<h5 ". $attributes .  ">".$body."</h5>";
        return $component;
    }

    function setH6(string $body, string $attributes = null){
        $component = "<h6 ". $attributes .  ">".$body."</h6>";
        return $component;
    }

    function setInput(string $attributes = null){
        $component ="<input ".$attributes.">";
        return $component;
    }

    function setBreakLine(){
        $component = "<br>";
        return $component;
    }
    function setButton(string $body, string $attributes = null){
        $component = "<button ".$attributes.">".$body."</button>";
        return $component;

    }
    function setImg(string $attributes = null){
        $component = "<img ".$attributes.">";
        return $component;

    }

    function setLabel(string $body, string $attributes = null){
        $component = "<label ".$attributes.">".$body."</label>";
        return $component;
    }

    function setAReference(string $body, string $attributes = null){
        $component = "<a ".$attributes.">".$body."</a>";
        return $component;
    }

    function setOption(string $body, string $value, string $attributes = null){
        $component = "<option value=\"$value\" ".$attributes.">".$body."</option>";
        return $component;
    }

    function setSelectByString(string $body, string $attributes = null){
        $component = "<select ".$attributes.">".$body."</select>";
        return $component;
    }
    
    function setSelectByOptionsArray(array $elements, string $attributes = null){
        $component="";
        $component .= "<select ".$attributes.">";
        foreach ($elements as $element){
            $component .= $element;
        }
        $component .= "</select>";
        return $component;
    }

    function setParagraph(string $body, string $attributes = null){
        $component = "<p ".$attributes.">".$body."</p>";
        return $component;
    }

    function setQuote(string $body, string $attributes = null){
        $component = "<q ".$attributes.">".$body."</q>";
        return $component;
    }

    function setScript(string $body, string $attributes = null){
        $component = "<script ".$attributes.">".$body."</script>";
        return $component;
    }

    function setTextArea(string $body, string $attributes = null){
        $component = "<textarea ".$attributes.">".$body."</textarea>";
        return $component;
    }

    function setListItem(string $body, string $attributes = null){
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





    function printH1(string $body, string $attributes = null){
        $component = "<h1 ". $attributes .  ">".$body."</h1>";
        echo $component;
    }

    function printH2(string $body, string $attributes = null){
        $component = "<h2 ". $attributes .  ">".$body."</h2>";
        echo $component;
    }

    function printH3(string $body, string $attributes = null){
        $component = "<h3 ". $attributes .  ">".$body."</h3>";
        echo $component;
    }

    function printH4(string $body, string $attributes = null){
        $component = "<h4 ". $attributes .  ">".$body."</h4>";
        echo $component;
    }

    function printH5(string $body, string $attributes = null){
        $component = "<h5 ". $attributes .  ">".$body."</h5>";
        echo $component;
    }

    function printH6(string $body, string $attributes = null){
        $component = "<h6 ". $attributes .  ">".$body."</h6>";
        echo $component;
    }

    function printInput(string $attributes = null){
        $component ="<input ".$attributes.">";
        echo $component;
    }

    function printBreakLine(){
        $component = "<br>";
        echo $component;
    }
    function printButton(string $body, string $attributes = null){
        $component = "<button ".$attributes.">".$body."</button>";
        echo $component;

    }
    function printImg(string $attributes = null){
        $component = "<img ".$attributes.">";
        echo $component;

    }

    function printLabel(string $body, string $attributes = null){
        $component = "<label ".$attributes.">".$body."</label>";
        echo $component;
    }

    function printAReference(string $body, string $attributes = null){
        $component = "<a ".$attributes.">".$body."</a>";
        echo $component;
    }

    function printOption(string $body, string $value, string $attributes = null){
        $component = "<option value=\"$value\" ".$attributes.">".$body."</option>";
        echo $component;
    }

    function printSelectByString(string $body, string $attributes = null){
        $component = "<select ".$attributes.">".$body."</select>";
        echo $component;
    }

    function printSelectByOptionsArray(array $elements, string $attributes = null){
        $component="";
        $component .= "<select ".$attributes.">";
        foreach ($elements as $element){
            $component .= $element;
        }
        $component .= "</select>";
        echo $component;
    }

    function printParagraph(string $body, string $attributes = null){
        $component = "<p ".$attributes.">".$body."</p>";
        echo $component;
    }

    function printQuote(string $body, string $attributes = null){
        $component = "<q ".$attributes.">".$body."</q>";
        echo $component;
    }

    function printScript(string $body, string $attributes = null){
        $component = "<script ".$attributes.">".$body."</script>";
        echo $component;
    }

    function printTextArea(string $body, string $attributes = null){
        $component = "<textarea ".$attributes.">".$body."</textarea>";
        echo $component;
    }

    function printListItem(string $body, string $attributes = null){
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

