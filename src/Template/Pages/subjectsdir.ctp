<div class="row">
    <?php foreach($klasses as $kl){ ?>
    <div class="col-lg-12">
        <div class="alert alert-info alert-dismissible fade in" role="alert"> 
            <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>--> 
            <h4><?= $kl->title ?></h4> 
            <p>
                <?= $kl->details ?>
                <a href="/subjects/<?= $kl->slug ?>" style="margin-top: -30px" class="btn btn-primary pull-right">Browse</a> 
            </p>  
        </div>
    </div>
    <?php } ?>
</div>