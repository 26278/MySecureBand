<?php
class SearchController {

    function search(){


        $searchterm = filter_var($_GET['term'], FILTER_SANITIZE_STRING);
        $zoekresultaten = search_database($searchterm);
//        include 'search.php';

        $template_engine = get_template_engine();

        echo $template_engine->render( 'search', [
            'zoekresultaten' => $zoekresultaten,
            'searchterm'     => $searchterm
        ] );

    }
}
?>