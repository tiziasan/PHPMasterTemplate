<?php
class general_form{
    function createGeneralForm($array, $array1 $attributes){
       /* $component = "<form class=\"form-style-9\" action=".$attributes.">
                    <ul>";
    foreach ($array as $key => $val) {
        $component .= "<li>
    <input type=".$val." name=\"field1\" class=\"field-style field-split align-left\" placeholder=" . $key . " /> 
    </li>
        <li>
    <input type=".$val." name=\"field2\" class=\"field-style field-split align-right\" placeholder=" . $key . " /> 
    </li>";
    }

        $component.= "<li>
                        <input type=\"submit\" value=\"Send Message\" />
                      </li>
                    </ul>
                    </form>";*/

       $component = "<form class=\"form-style-9\">
<ul>
<li>
    <input type=\"text\" name=\"field1\" class=\"field-style field-split align-left\" placeholder=\"Name\" />
    <input type=\"email\" name=\"field2\" class=\"field-style field-split align-right\" placeholder=\"Email\" />

</li>
<li>
    <input type=\"text\" name=\"field3\" class=\"field-style field-split align-left\" placeholder=\"Phone\" />
    <input type=\"url\" name=\"field4\" class=\"field-style field-split align-right\" placeholder=\"Website\" />
</li>
<li>
<input type=\"text\" name=\"field3\" class=\"field-style field-full align-none\" placeholder=\"Subject\" />
</li>
<li>
<textarea name=\"field5\" class=\"field-style\" placeholder=\"Message\"></textarea>
</li>
<li>
<input class=\"submit-gf\" value=\"Send Message\" />
</li>
</ul>
</form>
       ";

        echo $component;
    }
}