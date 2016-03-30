<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chapter'), ['action' => 'edit', $chapter->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chapter'), ['action' => 'delete', $chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapter->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Chapters'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chapter'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Klasses'), ['controller' => 'Klasses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Klass'), ['controller' => 'Klasses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Que Subch'), ['controller' => 'QueSubch', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Que Subch'), ['controller' => 'QueSubch', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chapters view large-9 medium-8 columns content">
    <h3><?= h($chapter->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Subject') ?></th>
            <td><?= $chapter->has('subject') ? $this->Html->link($chapter->subject->title, ['controller' => 'Subjects', 'action' => 'view', $chapter->subject->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Klass') ?></th>
            <td><?= $chapter->has('klass') ? $this->Html->link($chapter->klass->title, ['controller' => 'Klasses', 'action' => 'view', $chapter->klass->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($chapter->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($chapter->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Details') ?></h4>
        <?= $this->Text->autoParagraph(h($chapter->details)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Que Subch') ?></h4>
        <?php if (!empty($chapter->que_subch)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Subchapter Id') ?></th>
                <th><?= __('Ques Id') ?></th>
                <th><?= __('Chapter Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($chapter->que_subch as $queSubch): ?>
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
