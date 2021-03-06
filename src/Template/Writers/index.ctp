<?php
/**
  * @var \App\View\AppView $this
  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: rgb(214, 214, 214);
        color: white;
    }
</style>
</head>
<body>
  <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <!-- <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Writer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul> -->
</nav>
<div class="writers index large-9 medium-8 columns content">
    <h3><?= __('Writers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($writers as $writer): ?>
            <tr>
                <td><?= $this->Number->format($writer->id) ?></td>
                <td><?= h($writer->name) ?></td>
                <td><?= h($writer->slug) ?></td>
                <td><?= h($writer->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $writer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $writer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $writer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $writer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>  
</body>
</html>
