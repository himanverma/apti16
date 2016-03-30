<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Que'), ['action' => 'edit', $que->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Que'), ['action' => 'delete', $que->id], ['confirm' => __('Are you sure you want to delete # {0}?', $que->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Que'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ques view large-9 medium-8 columns content">
    <h3><?= h($que->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Marks') ?></th>
            <td><?= h($que->marks) ?></td>
        </tr>
        <tr>
            <th><?= __('Correct') ?></th>
            <td><?= h($que->correct) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($que->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Ques') ?></h4>
        <?= $this->Text->autoParagraph(h($que->ques)); ?>
    </div>
    <div class="row">
        <h4><?= __('Opa') ?></h4>
        <?= $this->Text->autoParagraph(h($que->opa)); ?>
    </div>
    <div class="row">
        <h4><?= __('Opb') ?></h4>
        <?= $this->Text->autoParagraph(h($que->opb)); ?>
    </div>
    <div class="row">
        <h4><?= __('Opc') ?></h4>
        <?= $this->Text->autoParagraph(h($que->opc)); ?>
    </div>
    <div class="row">
        <h4><?= __('Opd') ?></h4>
        <?= $this->Text->autoParagraph(h($que->opd)); ?>
    </div>
    <div class="row">
        <h4><?= __('Exp') ?></h4>
        <?= $this->Text->autoParagraph(h($que->exp)); ?>
    </div>
</div>
