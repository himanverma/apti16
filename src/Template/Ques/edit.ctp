<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $que->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $que->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ques'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ques form large-9 medium-8 columns content">
    <?= $this->Form->create($que) ?>
    <fieldset>
        <legend><?= __('Edit Que') ?></legend>
        <?php
            echo $this->Form->input('ques');
            echo $this->Form->input('opa');
            echo $this->Form->input('opb');
            echo $this->Form->input('opc');
            echo $this->Form->input('opd');
            echo $this->Form->input('exp');
            echo $this->Form->input('marks');
            echo $this->Form->input('correct');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
