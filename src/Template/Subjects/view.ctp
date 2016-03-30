<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chapters'), ['controller' => 'Chapters', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chapter'), ['controller' => 'Chapters', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subjects view large-9 medium-8 columns content">
    <h3><?= h($subject->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Title') ?></th>
            <td><?= h($subject->title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($subject->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Details') ?></h4>
        <?= $this->Text->autoParagraph(h($subject->details)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Chapters') ?></h4>
        <?php if (!empty($subject->chapters)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Subject Id') ?></th>
                <th><?= __('Klasses Id') ?></th>
                <th><?= __('Title') ?></th>
                <th><?= __('Details') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($subject->chapters as $chapters): ?>
            <tr>
                <td><?= h($chapters->id) ?></td>
                <td><?= h($chapters->subject_id) ?></td>
                <td><?= h($chapters->klasses_id) ?></td>
                <td><?= h($chapters->title) ?></td>
                <td><?= h($chapters->details) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Chapters', 'action' => 'view', $chapters->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Chapters', 'action' => 'edit', $chapters->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Chapters', 'action' => 'delete', $chapters->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapters->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
