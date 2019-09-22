<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start( 'page_title' ) ?>
Blog
<?php $this->stop( 'page_title' ) ?>

<?php
//Pagination

// Pagination

////Een constante aannmaken voor max 5 blog posts per pagina
//define("RIJ_PER_PAGINA",5);
//$per_pagina_html = '';
//$pagina = 1;
//$start = 0;
//if(!empty($_POST["page"])) {
//    $pagina = $_POST["page"];
//    $start = ($pagina-1) * RIJ_PER_PAGINA;
//}
//$limit = " limit " . $start . "," . RIJ_PER_PAGINA;
//
//// PDO statement
//$pagination_statement = $database->prepare($sql);
//$pagination_statement->bindValue(':keyword', '%' . $zoek_keyword . '%', PDO::PARAM_STR);
//$pagination_statement->execute();
//
//// uitrekenen pagina's
//$rij_count = $pagination_statement->rowCount();
//if(!empty($rij_count)){
//    // ceil is een afrondfunctie in php
//    $pagina_count = ceil($rij_count/RIJ_PER_PAGINA);
//    if($pagina_count > 1) {
//        for($i = 1; $i <= $pagina_count; $i++){
//            if($i == $pagina){
//                $per_pagina_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
//            } else {
//                $per_pagina_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
//            }
//        }
//    }
//}
//
//$query = $sql.$limit;
//$pdo_statement = $database->prepare($query);
//$pdo_statement->bindValue(':keyword', '%' . $zoek_keyword . '%', PDO::PARAM_STR);
//$pdo_statement->execute();
//$result = $pdo_statement->fetchAll();
?>


<?php $first_post = array_shift($blogposts); ?>
    <div class="main__first-post-wrapper">
      <div class="main__first-post-wrapper__container">
          <img class="main__first-post-wrapper__container--blog-img" src="<?= url( '/content/' . $first_post['foto'] ) ?>" alt="blog_pic">
          <div class="main__first-post-wrapper__container--blog-content">
              <h3><?= $first_post['naam'] ?></h3>
              <p><?= $first_post['short'] ?></p>
              <a href="<?= url('/view-blog/blogpost/' . $first_post['id']) ?>" class="readmore__blue">Read more...</a>
          </div>
      </div>
    </div>

<div class="main__grid">
    <?php foreach ( $blogposts as $blogPost ): ?>
        <div class="main__grid__post">
            <div class="main__grid__post__container">
                <!-- Input voor image -->
                <img class="main__grid__blog-post--img" src="<?= url( '/content/' . $blogPost['foto'] ) ?>" alt="blog_pic">
                <div class="main__grid__blog-post--content">
                    <h3><?= $blogPost['naam'] ?></h3>
                    <p><?= $blogPost['short'] ?></p>
                    <a href="<?php echo url('/view-blog/blogpost/' . $blogPost['id']) ?>" class="readmore__blue">Read more...</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="main__grid__blog__list">
        <h3>Blog posts</h3>
        <ol reversed class="main__blog-grid__list--orderedlist">
            <?php foreach ($blogposts as $blogPost): ?>
            <li><a href="<?= url('/view-blog/blogpost/' . $blogPost['id']) ?>"><?= $blogPost['naam'] ?></a></li>
            <?php endforeach; ?>
     </ol>
    </div>


</div>

<?php //echo "<p class='paginanummers'>$per_pagina_html</p>";?>
