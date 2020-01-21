<?php
class general_form{
    function createGeneralForm($array, $attributes){
        $component = "<form class=\"form-style-9\" action=".$attributes.">
                    <ul>";
    foreach ($array as $val) {
        $component .= "<li>
    <input type=\"text\" name=\"field1\" class=\"field-style field-split align-left\" placeholder=" . $val . " /> 
    </li>";
    }

        $component.= "<li>
                        <input type=\"submit\" value=\"SUBMIT\" />
                      </li>
                    </ul>
                    </form>";

        echo $component;
    }
}