<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Que Subch'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subchapters'), ['controller' => 'Subchapters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subchapter'), ['controller' => 'Subchapters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ques'), ['controller' => 'Ques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Que'), ['controller' => 'Ques', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chapters'), ['controller' => 'Chapters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chapter'), ['controller' => 'Chapters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="queSubch index large-9 medium-8 columns content">
    <h3><?= __('Que Subch') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('subchapter_id') ?></th>
                <th><?= $this->Paginator->sort('ques_id') ?></th>
                <th><?= $this->Paginator->sort('chapter_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($queSubch as $queSubch): ?>
            <tr>
                <td><?= $this->Number->format($queSubch->id) ?></td>
                <td><?= $queSubch->has('subchapter') ? $this->Html->link($queSubch->subchapter->title, ['controller' => 'Subchapters', 'action' => 'view', $queSubch->subchapter->id]) : '' ?></td>
                <td><?= $queSubch->has('que') ? $this->Html->link($queSubch->que->id, ['controller' => 'Ques', 'action' => 'view', $queSubch->que->id]) : '' ?></td>
                <td><?= $queSubch->has('chapter') ? $this->Html->link($queSubch->chapter->title, ['controller' => 'Chapters', 'action' => 'view', $queSubch->chapter->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $queSubch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $queSubch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $queSubch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $queSubch->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
