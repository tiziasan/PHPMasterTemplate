<?php
class registration_form{
    function createRegistrationForm(string $attributes){
        $component = "<div  class=\"form-rf\">
            <form ".$attributes.">
            <ul>
                <li>
                    <input class=\"form-rffield-full rf-field-style\" name=\"name\" placeholder=\"First and last name\" required=\"\" type=\"text\">
                </li>
                <li>   
                    <input class=\"form-rffield-full rf-field-style\" name=\"email\" placeholder=\"example@domain.com\" required=\"\" type=\"email\">
                </li>
                <li>
                    <input class=\"form-rffield-full rf-field-style\" name=\"username\" placeholder=\"username\" required=\"\"  type=\"text\">
                </li>
                <li>
                    <input type=\"password\" class=\"form-rffield-full rf-field-style\" name=\"password\" placeholder=\"InsertPassword\" required=\"\" type=\"text\">
                </li>
                <li>
                    <input type=\"password\" class=\"form-rffield-full rf-field-style\" name=\"password\" placeholder=\"ConfirmPassword\" required=\"\" type=\"text\">
                </li>
                <li> 
                    <label>Birthday</label>
                    <input class=\"birthday rf-field-style\" maxlength=\"2\" name=\"BirthDay\"  placeholder=\"Day\" required=\"\">
                    <input class=\"birthday rf-field-style\" maxlength=\"2\" name=\"BirthDay\"  placeholder=\"Month\" required=\"\">
                    <input class=\"birthday rf-field-style\" maxlength=\"4\" name=\"BirthYear\" placeholder=\"Year\" required=\"\">
                  </li>
                <li>
                <select class=\"select-style gender rf-field-style\" name=\"gender\">
                    <option value=\"select\">i am..</option>
                    <option value=\"m\">Male</option>
                    <option value=\"f\">Female</option>
                    <option value=\"others\">Other</option>
                </select>
                <br><br>
                </li>
                <li>
                    <input class=\"form-rffield-full rf-field-style\" name=\"phone\" placeholder=\"phone number\" required=\"\" type=\"text\"> <br>
                </li>
            </ul>

            <button class=\"button-rf\">
                <span class=\"state-rf\">Sign Up</span>
            </button>
            
   </form>
</div>
";

        return $component;

    }
}