<!DOCTYPE html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyBand > <?php echo $this->section( 'page_title', 'Standaard pagina titel') ?></title>
    <link rel="stylesheet" href= "/MyBand-PredatorFishing/public/css/master.css">
    <link rel="stylesheet" href= "/MyBand-PredatorFishing/public/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!-- -=-=-=-=-         Header        -=-=-=-=- -->
<header>
    <div class="header__logo">
        <h1>PredatorFishing</h1>
    </div>
    <div class="header__navBar" id="myTopnav">
        <a href="<?php echo url( '/' ) ?>" class="header__navBar__element" id="active">Home</a>
        <a href="<?php echo url( '/blog' ) ?>" class="header__navBar__element">Blog</a>
        <a href="<?php echo url( '/agenda' ) ?>" class="header__navBar__element">Agenda</a>
        <a href="<?php echo url( '/species' ) ?>" class="header__navBar__element">Species</a>
        <a href="<?php echo url( '/about-us' ) ?>" class="header__navBar__element">About us</a>
        <a href="<?php echo url( '/contact' ) ?>" class="header__navBar__element">Contact</a>
        <div class="header__navBar__helper"  onclick="responsiveNavigator()">
            <svg href="javascript:void(0);" class="header__navBar__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M2 15.5v2h20v-2H2zm0-5v2h20v-2H2zm0-5v2h20v-2H2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
        </div>
    </div>
    <div class="header__bar">
        <div class="header__bar__location">
            <!-- Live location on the webpage. The <a> is just for now -->
            <a>PredatorFishing > <?php echo $this->section( 'page_title', 'Standaard pagina titel') ?></a>
        </div>
        <div class="header__bar__searchBar">
            <form class="header__bar__searchbar--form" name="zoekformulier" action="<?php echo url('/search')?>" method='GET'>
                <input type="hidden" name="page" value="search"/>
                    <input class="header__bar__searchBar--search" type="text" name="term" id="search" placeholder="Search..." value="<?php if(isset($searchterm)): echo $searchterm; endif; ?>"/>
                <button type="submit"><svg class="header__bar__searchbar--search-img" viewBox="0 0 18 18"><path d="m 9.3962688,9.5396955 3.1875032,3.1165125 4.685825,4.581467 Z M 10.126225,9.276927 C 10.957192,8.2289874 11.351645,6.8454225 11.198222,5.5168348 11.044799,4.188247 10.345391,2.930999 9.2974515,2.1000317 8.249512,1.2690645 6.8659471,0.87461216 5.5373593,1.0280348 4.2087716,1.1814574 2.9515235,1.8808656 2.1205563,2.9288052 1.2895891,3.9767448 0.89513671,5.3603097 1.0485594,6.6888974 1.201982,8.0174852 1.9013902,9.2747332 2.9493298,10.1057 c 1.0479395,0.830968 2.4315044,1.22542 3.7600922,1.071997 1.3285877,-0.153422 2.5858358,-0.85283 3.416803,-1.90077 z" /></svg></button>
            </form>
            <div id="show_up"></div>
        </div>
    </div>
</header>
<!-- -=-=-=-=-     End of header     -=-=-=-=- -->

        <main>
            <?php echo $this->section( 'content' ) ?>
        </main>
<!-- -=-=-=-=-        Footer         -=-=-=-=- -->
<footer>
    <div class="footer__grid">
        <h2>PredatorFishing</h2>
        <div class="footer__grid--social-media">
            <h4>Facebook</h4>
            <h4>Twitter</h4>
            <h4>Instagram</h4>
        </div>
        <h3 class="footer__grid--copyright"> &#x24B8; 1990 - <?=date('Y')?>   PredatorFishing, Inc. </h3>
    </div>
</footer>

<!-- -=-=-=-=-     End of footer     -=-=-=-=- -->
<script src="/MyBand-PredatorFishing/public/js/javascript.js"></script>
</body>
</html>
