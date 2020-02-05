<?php
class footer{

    function insert_footer($arrayButton, $arrayButton1, $arrayButton2, $arrayButton3, $arrayButton4)
    {

        $button = '';

        foreach ($arrayButton as $k => $v) {

            $button .= "<li><a href=\"" . $v . "\"</a>" . $k . "</li>";
        }

        $button1 = '';

        foreach ($arrayButton1 as $k => $v) {

            $button1 .= "<li><a href=\"" . $v . "\"</a>" . $k . "</li>";
        }

        $button2 = '';

        foreach ($arrayButton2 as $k => $v) {

            $button2 .= "<li><a href=\"" . $v . "\"</a>" . $k . "</li>";
        }

        $button3 = '';

        foreach ($arrayButton3 as $k => $v) {

            $button3 .= "<li><a href=\"" . $v . "\"</a>" . $k . "</li>";
        }

        $button4 = '';

        foreach ($arrayButton4 as $k => $v) {

            $button4 .= "<li><a href=\"" . $v . "\"</a>" . $k . "</li>";
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