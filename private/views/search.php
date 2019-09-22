<?php $this->layout( 'standard_layout' ) ?>
<?php $this->start( 'page_title' ) ?>
Search
<?php $this->stop( 'page_title' ) ?>

<section class="content">
    <h1>Zoekresultaten</h1>
    <p>Hieronder staan <?php echo count($zoekresultaten) ?> zoekresultaten voor de zoekterm: "<?php echo $searchterm ?>"</p>

    <?php foreach ($zoekresultaten as $result):?>
        <div class="result">
            <h2><?php echo $result['type'] ?> > <?php echo $result['title']?></h2>
            <p> <?php echo $result['short'] ?></p> <br>
            <a class="readmore__blue" href="<?php echo url('/view-blog/blogpost/' . $result['id']) ?>">Read more...</a>
        </div>
    <?php endforeach; ?>


</section>