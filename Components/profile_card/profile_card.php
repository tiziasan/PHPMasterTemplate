<?php
class profile_card{
    function createProfile($name, $surname, $role, $language, $hometown, $birthday, $relationship, $email, $phone, $whatsapp, $skypename){
        $component = "	<article class=\"cssui-usercard\">
		<div class=\"cssui-usercard__body\">
			<header class=\"cssui-usercard__header\">
				<img src=\"https://stas-melnikov.ru/cliparts/stas.jpg\" class=\"cssui-usercard__avatar\" alt=\"Avatar\">
				<div class=\"cssui-usercard__header-info\">
					<h3 class=\"cssui-usercard__name\">".$name." <span class=\"cssui-usercard__name-label\">".$surname."</span></h3>
					<span class=\"cssui-usercard__post\">".$role."</span>
				</div>
			</header>
			<div class=\"cssui-usercard__content\">
				<div class=\"cssui-slider\">

					<!-- the control elements of slider -->

					<input id=\"slide1\" type=\"radio\" class=\"cssui-slider__switch cssui-usercard__switch\" name=\"slider-controls\" checked autofocus>
					<label for=\"slide1\" class=\"cssui-slider__control cssui-usercard__control\"></label>
					<input id=\"slide3\" type=\"radio\" class=\"cssui-slider__switch cssui-usercard__switch\" name=\"slider-controls\">
					<label for=\"slide3\" class=\"cssui-slider__control cssui-usercard__control\"></label>
					<div class=\"cssui-slider__slides\">

						<!-- first slide -->

						<div class=\"cssui-slider__slide\">
							<h4 class=\"cssui-usercard__title\">About me</h4>
							<div class=\"cssui-usercard__stats\">
								<div class=\"cssui-stats cssui-usercard__stats-item\">
									<i class=\"cssui-icon icon-earth\"></i>
									<div class=\"cssui-stats__info cssui-usercard__stats-info\">
										<span class=\"cssui-stats__name cssui-usercard__stats-name\"> Language </span>
										<span class=\"cssui-stats__value\">".$language."</span>
									</div>
								</div>
								<div class=\"cssui-stats cssui-usercard__stats-item\">
									<i class=\"cssui-icon icon-location\"></i>
									<div class=\"cssui-stats__info cssui-usercard__stats-info\">
										<span class=\"cssui-stats__name cssui-usercard__stats-name\">Hometown</span>
										<span class=\"cssui-stats__value\">".$hometown."</span>
									</div>
								</div>
								<div class=\"cssui-stats cssui-usercard__stats-item\">
									<i class=\"cssui-icon icon-calendar\"></i>
									<div class=\"cssui-stats__info cssui-usercard__stats-info\">
										<span class=\"cssui-stats__name cssui-usercard__stats-name\">Date of birth</span>
										<span class=\"cssui-stats__value\">".$birthday."</span>
									</div>
								</div>
								<div class=\"cssui-stats cssui-usercard__stats-item\">
									<i class=\"cssui-icon icon-man-woman\"></i>
									<div class=\"cssui-stats__info cssui-usercard__stats-info\">
										<span class=\"cssui-stats__name cssui-usercard__stats-name\">Relationship</span>
										<span class=\"cssui-stats__value\">".$relationship."</span>
									</div>
								</div>
							</div>
						</div>

						<!-- second slide -->

						<div class=\"cssui-slider__slide\">
							<h4 class=\"cssui-usercard__title\">My Contacts</h4>
							<div class=\"cssui-usercard__stats\">
								<div class=\"cssui-stats cssui-usercard__stats-item\">
									<i class=\"cssui-icon icon-email\"></i>
									<div class=\"cssui-stats__info cssui-usercard__stats-info\">
										<span class=\"cssui-stats__name cssui-usercard__stats-name\">E-mail</span>
										<a href=\"#0\" class=\"cssui-stats__value\">".$email."</a>
									</div>
								</div>
								<div class=\"cssui-stats cssui-usercard__stats-item\">
									<i class=\"cssui-icon icon-phone\"></i>
									<div class=\"cssui-stats__info cssui-usercard__stats-info\">
										<span class=\"cssui-stats__name cssui-usercard__stats-name\">Phone</span>
										<a href=\"tel:79000000000\" class=\"cssui-stats__value\">".$phone."</a>
									</div>
								</div>
								<div class=\"cssui-stats cssui-usercard__stats-item\">
									<i class=\"cssui-icon icon-whatsapp\"></i>
									<div class=\"cssui-stats__info cssui-usercard__stats-info\">
										<span class=\"cssui-stats__name cssui-usercard__stats-name\">WhatsApp</span>
										<span class=\"cssui-stats__value\">".$whatsapp."</span>
									</div>
								</div>
								<div class=\"cssui-stats cssui-usercard__stats-item\">
									<i class=\"cssui-icon icon-skype\"></i>
									<div class=\"cssui-stats__info cssui-usercard__stats-info\">
										<span class=\"cssui-stats__name cssui-usercard__stats-name\">Skype</span>
										<span class=\"cssui-stats__value\">".$skypename."</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>";

        return $component;
    }
}
