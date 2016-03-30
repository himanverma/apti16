<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subchapter'), ['action' => 'edit', $subchapter->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subchapter'), ['action' => 'delete', $subchapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subchapter->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subchapters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subchapter'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chapters'), ['controller' => 'Chapters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chapter'), ['controller' => 'Chapters', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Que Subch'), ['controller' => 'QueSubch', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Que Subch'), ['controller' => 'QueSubch', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subchapters view large-9 medium-8 columns content">
    <h3><?= h($subchapter->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Chapter') ?></th>
            <td><?= $subchapter->has('chapter') ? $this->Html->link($subchapter->chapter->title, ['controller' => 'Chapters', 'action' => 'view', $subchapter->chapter->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($subchapter->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Details') ?></th>
            <td><?= h($subchapter->details) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($subchapter->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Que Subch') ?></h4>
        <?php if (!empty($subchapter->que_subch)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Subchapter Id') ?></th>
                <th><?= __('Ques Id') ?></th>
                <th><?= __('Chapter Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subchapter->que_subch as $queSubch): ?>
            <tr>
                <td><?= h($queSubch->id) ?></td>
                <td><?= h($queSubch->subchapter_id) ?></td>
                <td><?= h($queSubch->ques_id) ?></td>
                <td><?= h($queSubch->chapter_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'QueSubch', 'action' => 'view', $queSubch->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'QueSubch', 'action' => 'edit', $queSubch->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'QueSubch', 'action' => 'delete', $queSubch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $queSubch->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
