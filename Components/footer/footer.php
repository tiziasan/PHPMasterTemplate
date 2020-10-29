<?php
class footer
{


    function setFooter(string $title, string $completeAddress, string $phoneNumber, string $email, string $mailLink, string $description, string $attributes = null)
    {
        $component = "
		<footer class=\"footer-distributed\" ".$attributes.">
			<div class=\"footer-left\">
				<h3>".$title."</h3>
			</div>

			<div class=\"footer-center\">
				<div>
					<i class=\"fa fa-map-marker\"></i>
					  <p><span>".$completeAddress."</span></p>
				</div>

				<div>
					<i class=\"fa fa-phone\"></i>
					<p>".$phoneNumber."</p>
				</div>
				<div>
					<i class=\"fa fa-envelope\"></i>
					<p><a href=\"".$mailLink."\">".$email."</a></p>
				</div>
			</div>
			<div class=\"footer-right\">
				<p class=\"footer-company-about\">
					<span>About the company</span>
					".$description."</p>
				
			</div>
		</footer>
";
        echo $component;
    }
}