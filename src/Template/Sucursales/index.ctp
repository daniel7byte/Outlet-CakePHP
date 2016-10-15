<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sucursale'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ciudades'), ['controller' => 'Ciudades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ciudade'), ['controller' => 'Ciudades', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sucursales index large-9 medium-8 columns content">
    <h3><?= __('Sucursales') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lng') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ciudad_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sucursales as $sucursale): ?>
            <tr>
                <td><?= $this->Number->format($sucursale->id) ?></td>
                <td><?= h($sucursale->titulo) ?></td>
                <td><?= h($sucursale->direccion) ?></td>
                <td><?= h($sucursale->lat) ?></td>
                <td><?= h($sucursale->lng) ?></td>
                <td><?= h($sucursale->created) ?></td>
                <td><?= h($sucursale->modified) ?></td>
                <td><?= $sucursale->has('empresa') ? $this->Html->link($sucursale->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $sucursale->empresa->id]) : '' ?></td>
                <td><?= $sucursale->has('ciudade') ? $this->Html->link($sucursale->ciudade->id, ['controller' => 'Ciudades', 'action' => 'view', $sucursale->ciudade->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sucursale->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sucursale->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sucursale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sucursale->id)]) ?>
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
