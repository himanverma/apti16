<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Klass'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="klasses index large-9 medium-8 columns content">
    <h3><?= __('Klasses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($klasses as $klass): ?>
            <tr>
                <td><?= $this->Number->format($klass->id) ?></td>
                <td><?= h($klass->title) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $klass->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $klass->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $klass->id], ['confirm' => __('Are you sure you want to delete # {0}?', $klass->id)]) ?>
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
