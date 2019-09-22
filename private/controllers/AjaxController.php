<?php

/**
 * Class AjaxController
 *
 * Deze handelt de logica voor Ajax functionaliteit af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft deze weer via een echo statement of door een view te gebruiken
 *
 */
class AjaxController
{

    public function ajaxPage()
    {
        ?>
        <html>
        <head>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
            <link rel="stylesheet" href="<?php echo url('/css/ajax.css')?>" type="text/css"/>
            <script src="<?php echo url('/js/ajax.js')?>"></script>
            <meta charset="UTF-8">
        </head>
        <body>
        <h1>Voorbeeld zoeken met AJAX in MVC</h1>
        <form method="GET" action="<?php echo url('/ajax-search')?>">
        <div class='zoek'>ZOEKEN met ajax<br>
            <input type='text' name='txt' id="search" value="" id='keyword' maxlength='25'>
            <div id="show_up"></div>
        </div>
        </form>
        </body>
        </html>
        <?php
    }

    public function ajaxSearch()
    {

        $text = $_GET['txt'];
        $titels = searchTitels($text);

        foreach ($titels as $titel) {
            // laat elke titel als link zien
            echo '<a href="">' . $titel['titel'] . '</a>';

        }

    }

}