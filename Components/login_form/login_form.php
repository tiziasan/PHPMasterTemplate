<?php

class login_form{

    function login($attributes) {
   $component = "
<div class=\"form-container\">
    <form class=\"login form-style\" ".$attributes.">
        <p class=\"title-login\">Log in</p>
        <input class=\"input-login\" type=\"text\" placeholder=\"Username\" autofocus/>
        <i class=\"fa fa-user\"></i>
        <input class=\"input-login\" type=\"password\" placeholder=\"Password\" />
        <i class=\"fa fa-key\"></i>
        <a class=\"a-login\" href=\"#\">Forgot your password?</a>
        <button class=\"button\">Log in</button>
    </form>
</div>
";
    return $component;
    }
}