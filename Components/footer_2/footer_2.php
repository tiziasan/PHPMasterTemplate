<?php
class footer_2{

    function insert_footer(array $arrayButton, array $arrayButton1, array $arrayButton2, array $arrayButton3, array $arrayButton4)
    {

        $button = '';

        foreach ($arrayButton as $k => $v) {

            $button .= "<li>" . $k . "</li>";
        }

        $button1 = '';

        foreach ($arrayButton1 as $k => $v) {

            $button1 .= "<li>" . $k . "</li>";
        }

        $button2 = '';

        foreach ($arrayButton2 as $k => $v) {

            $button2 .= "<li>" . $k . "</li>";
        }

        $button3 = '';

        foreach ($arrayButton3 as $k => $v) {

            $button3 .= "<li>". $k . "</li>";
        }

        $button4 = '';

        foreach ($arrayButton4 as $k => $v) {

            $button4 .= "<li>" . $k . "</li>";
        }

        $component = "

<div class=\"footer\">
  <div class=\"contain\">
  <div class=\"col\">
    <h1>Company</h1>
    <ul>
      " . $button . "
    </ul>
  </div>
  <div class=\"col\">
    <h1>Products</h1>
    <ul>
     ".$button1."
    </ul>
  </div>
  <div class=\"col\">
    <h1>Accounts</h1>
    <ul>
      ".$button2."
    </ul>
  </div>
  <div class=\"col\">
    <h1>Resources</h1>
    <ul>
      ".$button3."
    </ul>
  </div>
  <div class=\"col\">
    <h1>Support</h1>
    <ul>
      ".$button4."
    </ul>
  </div>
<div class=\"clearfix\"></div>
</div>
</div>";

            echo $component;
        }

    }