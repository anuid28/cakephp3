<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hobbies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Hobby Users'), ['controller' => 'HobbyUsers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Hobby User'), ['controller' => 'HobbyUsers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hobbies form large-9 medium-8 columns content">
    <?= $this->Form->create($hobby) ?>
    <fieldset>
        <legend><?= __('Add Hobby') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
