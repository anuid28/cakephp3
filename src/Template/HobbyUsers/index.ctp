<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hobby User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hobbies'), ['controller' => 'Hobbies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hobby'), ['controller' => 'Hobbies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hobbyUsers index large-9 medium-8 columns content">
    <h3><?= __('Hobby Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('hobby_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hobbyUsers as $hobbyUser): ?>
            <tr>
                <td><?= $this->Number->format($hobbyUser->id) ?></td>
                <td><?= $hobbyUser->has('hobby') ? $this->Html->link($hobbyUser->hobby->name, ['controller' => 'Hobbies', 'action' => 'view', $hobbyUser->hobby->id]) : '' ?></td>
                <td><?= $hobbyUser->has('user') ? $this->Html->link($hobbyUser->user->name, ['controller' => 'Users', 'action' => 'view', $hobbyUser->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hobbyUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hobbyUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hobbyUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hobbyUser->id)]) ?>
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
