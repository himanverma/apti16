<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Que Subch'), ['action' => 'edit', $queSubch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Que Subch'), ['action' => 'delete', $queSubch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $queSubch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Que Subch'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Que Subch'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subchapters'), ['controller' => 'Subchapters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subchapter'), ['controller' => 'Subchapters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ques'), ['controller' => 'Ques', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Que'), ['controller' => 'Ques', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chapters'), ['controller' => 'Chapters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chapter'), ['controller' => 'Chapters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="queSubch view large-9 medium-8 columns content">
    <h3><?= h($queSubch->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Subchapter') ?></th>
            <td><?= $queSubch->has('subchapter') ? $this->Html->link($queSubch->subchapter->title, ['controller' => 'Subchapters', 'action' => 'view', $queSubch->subchapter->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Que') ?></th>
            <td><?= $queSubch->has('que') ? $this->Html->link($queSubch->que->id, ['controller' => 'Ques', 'action' => 'view', $queSubch->que->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Chapter') ?></th>
            <td><?= $queSubch->has('chapter') ? $this->Html->link($queSubch->chapter->title, ['controller' => 'Chapters', 'action' => 'view', $queSubch->chapter->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($queSubch->id) ?></td>
        </tr>
    </table>
</div>
