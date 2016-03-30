<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Que Subch'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subchapters'), ['controller' => 'Subchapters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subchapter'), ['controller' => 'Subchapters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ques'), ['controller' => 'Ques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Que'), ['controller' => 'Ques', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chapters'), ['controller' => 'Chapters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chapter'), ['controller' => 'Chapters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="queSubch form large-9 medium-8 columns content">
    <?= $this->Form->create($queSubch) ?>
    <fieldset>
        <legend><?= __('Add Que Subch') ?></legend>
        <?php
            echo $this->Form->input('subchapter_id', ['options' => $subchapters]);
            echo $this->Form->input('ques_id', ['options' => $ques]);
            echo $this->Form->input('chapter_id', ['options' => $chapters]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
