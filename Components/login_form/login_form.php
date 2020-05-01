<?php

class login_form{

    function login($attributes) {
   $component = "
<div class=\"form-container\">
    <form class=\"login form-style\" ".$attributes.">
        <p class=\"title-login\">Log in</p>
        <input class=\"input-login\" type=\"text\" placeholder=\"Username\" autofocus/>
        <input class=\"input-login\" type=\"password\" placeholder=\"Password\" />
        <a class=\"input-login\" href=\"#\">Forgot your password?</a>
        <button class=\"button\">Log in</button>
    </form>
</div>
";
    return $component;
    }
}