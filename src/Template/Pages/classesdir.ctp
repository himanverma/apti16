<div class="row">
    <ul class="nav nav-pills nav-stacked">
    <?php foreach($klasses as $kl){ ?>
        <li>
            <a href="/classes/<?= $kl->slug ?>"><?= $kl->title ?></a>
        </li>
    <?php } ?>
    </ul>
</div>