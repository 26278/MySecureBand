<?php $this->layout( 'standard_layout' ) ?>

<?php $this->start( 'page_title' ) ?>
    Agenda
<?php $this->stop( 'page_title' ) ?>


<!--HIER VERDER WERKEN-->
<?php foreach ($events as $results): ?>
<div class="events">
    <h2>Events</h2>
    <div class="events-post">
        <h3>Wat? - <?= $results['naam'] ?></h3>
        <h4>Wanneer? - <?= $results['datum'] ?></h4>
        <p><?= $results['beschrijving'] ?></p>
    </div>
</div>
<?php endforeach; ?>
