<div>
    <ol class="breadcrumb">
        <li><a href="/classes">Home</a></li>
        <li><a href="/<?= $subject->slug ?>"><?= $subject->title ?></a></li>
        <li><a href="/<?= $subject->slug ?>/<?= $chapter->slug ?>"><?= $chapter->title ?></a></li>
    </ol>
</div>
<div>
    <?php foreach ($chapter->subchapters as $sch) { ?>
        <div class="col-lg-3">
            <a href="/<?= $subject->slug ?>/<?= $chapter->slug ?>/<?= $sch->slug ?>" class="btn btn-primary">
                <h4><?= $sch->title ?></h4>
            </a>
        </div>
    <?php } ?>
</div>
