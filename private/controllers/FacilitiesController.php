<?php

/**
 * Class FacilitiesController
 *
 * Deze handelt de logica van de alle te verhuren huisje sop de camping af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class FacilitiesController {

	function housesOverview() {


		//Roep de function in het model aan om alle huisjes uit de database op te halen
		$allHouses = getAllHouses();

		$template_engine = get_template_engine();

		echo $template_engine->render( 'onze-huisjes', [
			'houses' => $allHouses
		] );
	}

	function showHouse( $id ) {
		//Roep de function in het model aan om alle huisjes uit de database op te halen
		$house = getHouse( $id );

		$template_engine = get_template_engine();

		echo $template_engine->render( 'toon-huis', [
			'house' => $house
		] );
	}

}