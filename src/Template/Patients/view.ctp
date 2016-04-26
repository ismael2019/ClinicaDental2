<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Patient'), ['action' => 'edit', $patient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Patient'), ['action' => 'delete', $patient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Patients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Patient'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="patients view large-9 medium-8 columns content">
    <h3><?= h($patient->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($patient->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($patient->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('C I') ?></th>
            <td><?= h($patient->c_i) ?></td>
        </tr>
        <tr>
            <th><?= __('Sex') ?></th>
            <td><?= h($patient->sex) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($patient->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($patient->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($patient->address) ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $patient->has('user') ? $this->Html->link($patient->user->id, ['controller' => 'Users', 'action' => 'view', $patient->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($patient->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($patient->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($patient->modified) ?></td>
        </tr>
    </table>
</div>
