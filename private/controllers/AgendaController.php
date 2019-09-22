<?php

/**
 * Class EventController
 *
 * Deze handelt de logica van ALLE agenda functionaliteit af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class AgendaController {

    function agenda(){

        $AllEvents = agenda();

        $template_engine = get_template_engine();
        echo $template_engine->render('agenda',[
            'events' => $AllEvents
        ]);
    }

	function overview(){


		// Haal alle evenementen op uit de "model" laag.
		$events = getAllEvents();

		// Haal OOK de huisjes op voor in de sidebar
		$houses = getAllHouses();

		$template_engine = get_template_engine();

		echo $template_engine->render('evenementen', [
			'events' => $events,
			'houses' => $houses
		]);
	}
}