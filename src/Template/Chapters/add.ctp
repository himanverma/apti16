<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Chapters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Klasses'), ['controller' => 'Klasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Klass'), ['controller' => 'Klasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Que Subch'), ['controller' => 'QueSubch', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Que Subch'), ['controller' => 'QueSubch', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chapters form large-9 medium-8 columns content">
    <?= $this->Form->create($chapter) ?>
    <fieldset>
        <legend><?= __('Add Chapter') ?></legend>
        <?php
            echo $this->Form->input('subject_id', ['options' => $subjects]);
            echo $this->Form->input('klasses_id', ['options' => $klasses]);
            echo $this->Form->input('title');
            echo $this->Form->input('details');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
