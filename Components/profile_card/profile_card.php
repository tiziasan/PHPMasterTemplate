<?php
class profile_card{
    function createProfile($name, $surname){
        $component = "<header>

    <!-- here’s the avatar -->
    <a href=\"https://tutsplus.com\">
      <img src=\"https://randomuser.me/api/portraits/men/99.jpg\">
    </a>

    <!-- the username -->
    <h1>pippo baudo</h1>

    <!-- and role or location -->
    <h2>- Full Stack Web Developer -</h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class=\"profile-bio\">

    <p>Hello there!</p>
    <p>I am a full stack web developer. I mainly work with PHP, HTML, CSS, JS and WordPress.
      <br />I also play well with Photoshop, Corel Draw, After Effects and other cool stuff.</p>

  </div> 
";

        echo $component;
    }
}
