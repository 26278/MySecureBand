<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start( 'page_title' ) ?>
Evenementen op Camping Duinzicht
<?php $this->stop( 'page_title' ) ?>

<p>
    Kom naar één van onze evenementen, altijd leuk en gezellig!
</p>

<div class="events-wrapper">

    <section class="events">
		<?php foreach ( $events as $event ): ?>
            <ul class="event">
                <li class="datum"><?php echo $event['datum'] ?></li>
                <li>
                    <h1><?php echo $event['naam'] ?></h1>
                </li>
                <li><a href="" class="btn btn-sm btn-success my-2">Schrijf je nu in</a></li>
            </ul>
		<?php endforeach; ?>
    </section>

    <aside class="sidebar">
        <h2>Onze huisjes</h2>
	    <?php foreach ( $houses as $house ): ?>
            <a href="<?php echo url('/onze-huisjes/huis/'.$house['id'])?>"><?php echo $house['naam'] ?></a>
	    <?php endforeach; ?>
    </aside>

</div>