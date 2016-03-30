<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Chapter'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Klasses'), ['controller' => 'Klasses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Klass'), ['controller' => 'Klasses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Que Subch'), ['controller' => 'QueSubch', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Que Subch'), ['controller' => 'QueSubch', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chapters index large-9 medium-8 columns content">
    <h3><?= __('Chapters') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('subject_id') ?></th>
                <th><?= $this->Paginator->sort('klasses_id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chapters as $chapter): ?>
            <tr>
                <td><?= $this->Number->format($chapter->id) ?></td>
                <td><?= $chapter->has('subject') ? $this->Html->link($chapter->subject->title, ['controller' => 'Subjects', 'action' => 'view', $chapter->subject->id]) : '' ?></td>
                <td><?= $chapter->has('klass') ? $this->Html->link($chapter->klass->title, ['controller' => 'Klasses', 'action' => 'view', $chapter->klass->id]) : '' ?></td>
                <td><?= h($chapter->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chapter->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chapter->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapter->id)]) ?>
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
