<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hobbyUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hobbyUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Hobby Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hobbies'), ['controller' => 'Hobbies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hobby'), ['controller' => 'Hobbies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hobbyUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($hobbyUser) ?>
    <fieldset>
        <legend><?= __('Edit Hobby User') ?></legend>
        <?php
            echo $this->Form->input('hobby_id', ['options' => $hobbies, 'empty' => true]);
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
