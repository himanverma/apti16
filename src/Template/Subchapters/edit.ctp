<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $subchapter->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $subchapter->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Subchapters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Chapters'), ['controller' => 'Chapters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chapter'), ['controller' => 'Chapters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Que Subch'), ['controller' => 'QueSubch', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Que Subch'), ['controller' => 'QueSubch', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subchapters form large-9 medium-8 columns content">
    <?= $this->Form->create($subchapter) ?>
    <fieldset>
        <legend><?= __('Edit Subchapter') ?></legend>
        <?php
            echo $this->Form->input('chapters_id', ['options' => $chapters]);
            echo $this->Form->input('title');
            echo $this->Form->input('details');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
