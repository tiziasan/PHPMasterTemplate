<?php
class general_form{
    function createGeneralForm($attributes){
       $component = "
<div class=\"form-container\">
    <form class=\"form-style\" ".$attributes.">
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
                <button class=\"button\"> Send Message</button>
            </li>
        </ul>
    </form>
</div>
       ";

        return $component;
    }
}