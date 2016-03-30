<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Subchapter'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chapters'), ['controller' => 'Chapters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chapter'), ['controller' => 'Chapters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Que Subch'), ['controller' => 'QueSubch', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Que Subch'), ['controller' => 'QueSubch', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="subchapters index large-9 medium-8 columns content">
    <h3><?= __('Subchapters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('chapters_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('details') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subchapters as $subchapter): ?>
            <tr>
                <td><?= $this->Number->format($subchapter->id) ?></td>
                <td><?= $subchapter->has('chapter') ? $this->Html->link($subchapter->chapter->title, ['controller' => 'Chapters', 'action' => 'view', $subchapter->chapter->id]) : '' ?></td>
                <td><?= h($subchapter->title) ?></td>
                <td><?= h($subchapter->details) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $subchapter->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subchapter->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subchapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subchapter->id)]) ?>
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
