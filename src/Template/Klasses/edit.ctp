<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $klass->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $klass->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Klasses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="klasses form large-9 medium-8 columns content">
    <?= $this->Form->create($klass) ?>
    <fieldset>
        <legend><?= __('Edit Klass') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('details');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
