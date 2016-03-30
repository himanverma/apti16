<div class="row">
    <ul class="nav nav-pills nav-stacked">
    <?php foreach($klass->chapters as $ch){ ?>
        <li>
            <a href="/<?= $ch->subject->slug ?>/<?= $ch->slug ?>"><?= $ch->title ?></a>
        </li>
    <?php } ?>
    </ul>
</div>
