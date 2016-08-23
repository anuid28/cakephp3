<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Hobby'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Hobby Users'), ['controller' => 'HobbyUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hobby User'), ['controller' => 'HobbyUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hobbies index large-9 medium-8 columns content">
    <h3><?= __('Hobbies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hobbies as $hobby): ?>
            <tr>
                <td><?= $this->Number->format($hobby->id) ?></td>
                <td><?= h($hobby->name) ?></td>
                <td><?= h($hobby->created) ?></td>
                <td><?= h($hobby->modified) ?></td>
                <td><?= $this->Number->format($hobby->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hobby->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hobby->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hobby->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hobby->id)]) ?>
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
