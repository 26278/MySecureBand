<?php
//Class BlogController
//
//Deze handelt de blog posts af
//Haalt de gegevens uit de model laag van de website
//Geeft de gegevens aan de view laag om weer te geven.
//

class BlogController{

    function BlogOverview() {
        //Functie aanroepen om in het model alle blog posts uit de database te halen
        $allBlogPosts = getAllBlogPosts();

        $template_engine = get_template_engine();

        echo $template_engine->render('blog', [
            'blogposts' => $allBlogPosts
        ]);
    }

    function showBlog( $id ) {
        //Functie aanroepen binnen model om alle huisjes uit de database op te halen
        $blogpost = getAllBlogPosts();

        $template_engine = get_template_engine();
        echo $template_engine->render('view-blog', [
            'blogpost' => $blogpost
        ]);
    }

    function view($id) {
        $blogpost = getBlogPost($id); //$blogpost is alle content van de blogpost van het matchende id.

        $template_engine = get_template_engine();

        echo $template_engine->render('view-blog', [
            'blogpost' => $blogpost
        ]);

        echo $id;

    }

}
?>