<div>
    <ol class="breadcrumb">
        <li><a href="/classes">Home</a></li>
        <li><a href="/<?= $subject->slug ?>"><?= $subject->title ?></a></li>
    </ol>
</div>
<div>
    <?php foreach($subject->chapters as $ch){ ?>
    <div class="col-lg-3">
        <a href="/<?= $subject->slug ?>/<?= $ch->slug ?>" class="btn btn-primary">
            <h4><?= $ch->title ?></h4>
        </a>
    </div>
    <?php } ?>
</div>
