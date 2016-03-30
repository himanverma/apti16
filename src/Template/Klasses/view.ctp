<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Klass'), ['action' => 'edit', $klass->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Klass'), ['action' => 'delete', $klass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $klass->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Klasses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Klass'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="klasses view large-9 medium-8 columns content">
    <h3><?= h($klass->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($klass->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($klass->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Details') ?></h4>
        <?= $this->Text->autoParagraph(h($klass->details)); ?>
    </div>
</div>
