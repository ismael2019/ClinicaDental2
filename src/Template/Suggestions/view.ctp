<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Suggestion'), ['action' => 'edit', $suggestion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Suggestion'), ['action' => 'delete', $suggestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suggestion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Suggestions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Suggestion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="suggestions view large-9 medium-8 columns content">
    <h3><?= h($suggestion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($suggestion->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($suggestion->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($suggestion->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($suggestion->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($suggestion->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($suggestion->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($suggestion->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Suggestion') ?></h4>
        <?= $this->Text->autoParagraph(h($suggestion->suggestion)); ?>
    </div>
</div>
