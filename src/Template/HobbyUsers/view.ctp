<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hobby User'), ['action' => 'edit', $hobbyUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hobby User'), ['action' => 'delete', $hobbyUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hobbyUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hobby Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hobby User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hobbies'), ['controller' => 'Hobbies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hobby'), ['controller' => 'Hobbies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hobbyUsers view large-9 medium-8 columns content">
    <h3><?= h($hobbyUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Hobby') ?></th>
            <td><?= $hobbyUser->has('hobby') ? $this->Html->link($hobbyUser->hobby->name, ['controller' => 'Hobbies', 'action' => 'view', $hobbyUser->hobby->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $hobbyUser->has('user') ? $this->Html->link($hobbyUser->user->name, ['controller' => 'Users', 'action' => 'view', $hobbyUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($hobbyUser->id) ?></td>
        </tr>
    </table>
</div>
