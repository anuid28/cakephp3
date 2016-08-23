<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hobby'), ['action' => 'edit', $hobby->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hobby'), ['action' => 'delete', $hobby->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hobby->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hobbies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hobby'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hobby Users'), ['controller' => 'HobbyUsers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hobby User'), ['controller' => 'HobbyUsers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hobbies view large-9 medium-8 columns content">
    <h3><?= h($hobby->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($hobby->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($hobby->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $this->Number->format($hobby->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($hobby->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($hobby->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hobby Users') ?></h4>
        <?php if (!empty($hobby->hobby_users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Hobby Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($hobby->hobby_users as $hobbyUsers): ?>
            <tr>
                <td><?= h($hobbyUsers->id) ?></td>
                <td><?= h($hobbyUsers->hobby_id) ?></td>
                <td><?= h($hobbyUsers->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HobbyUsers', 'action' => 'view', $hobbyUsers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HobbyUsers', 'action' => 'edit', $hobbyUsers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HobbyUsers', 'action' => 'delete', $hobbyUsers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hobbyUsers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
