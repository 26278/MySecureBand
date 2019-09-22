<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start( 'page_title' ) ?>
<?php echo 'Blog > ' . $blogpost['naam'] ?>
<?php $this->stop( 'page_title' ) ?>

<div class="main__first-post-wrapper">
  <div class="main__first-post-wrapper__container">
    <h2><?php echo $blogpost['naam'] ?></h2>
    <img class="main__first-post-wrapper__container--blog-img" src="<?php echo '/MyBand-PredatorFishing/public/content/' . $blogpost['foto'] ?>" alt="blog-photo">
    <p><?= $blogpost['tekst'] ?></p>
  </div>
  <a class="back-to-blog" href="<?php echo url('/blog')?>" >Terug naar blog</a>
</div>
