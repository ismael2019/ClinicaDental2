<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Suggestion'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="suggestions index large-9 medium-8 columns content">
    <h3><?= __('Suggestions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('last_name') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suggestions as $suggestion): ?>
            <tr>
                <td><?= $this->Number->format($suggestion->id) ?></td>
                <td><?= h($suggestion->username) ?></td>
                <td><?= h($suggestion->last_name) ?></td>
                <td><?= h($suggestion->email) ?></td>
                <td><?= h($suggestion->phone) ?></td>
                <td><?= h($suggestion->created) ?></td>
                <td><?= h($suggestion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $suggestion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $suggestion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $suggestion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $suggestion->id)]) ?>
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
