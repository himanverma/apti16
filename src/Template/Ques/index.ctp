<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Que'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ques index large-9 medium-8 columns content">
    <h3><?= __('Ques') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('marks') ?></th>
                <th><?= $this->Paginator->sort('correct') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ques as $que): ?>
            <tr>
                <td><?= $this->Number->format($que->id) ?></td>
                <td><?= h($que->marks) ?></td>
                <td><?= h($que->correct) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $que->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $que->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $que->id], ['confirm' => __('Are you sure you want to delete # {0}?', $que->id)]) ?>
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
