<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start( 'page_title' ) ?>
<?php echo $house['naam'] ?>
<?php $this->stop( 'page_title' ) ?>

<article class="house-details">
    <p>
		<?php echo $house['beschrijving'] ?>
    </p>
    <img src="<?php echo url( '/uploads/' . $house['foto'] ) ?>"/>
</article>

<a href="<?php echo url('/onze-huisjes')?>" class="btn btn-primary mt-3">Overzicht van de huisjes</a>