<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffs view content">
            <h3><?= h($staff->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Family Name') ?></th>
                    <td><?= h($staff->family_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($staff->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Family Name Kana') ?></th>
                    <td><?= h($staff->family_name_kana) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name Kana') ?></th>
                    <td><?= h($staff->first_name_kana) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($staff->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Deleted At') ?></th>
                    <td><?= h($staff->deleted_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated At') ?></th>
                    <td><?= h($staff->updated_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($staff->created_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Reservations') ?></h4>
                <?php if (!empty($staff->reservations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Reserved At') ?></th>
                            <th><?= __('Staff Id') ?></th>
                            <th><?= __('Service Id') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Deleted At') ?></th>
                            <th><?= __('Updated At') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($staff->reservations as $reservations) : ?>
                        <tr>
                            <td><?= h($reservations->id) ?></td>
                            <td><?= h($reservations->reserved_at) ?></td>
                            <td><?= h($reservations->staff_id) ?></td>
                            <td><?= h($reservations->service_id) ?></td>
                            <td><?= h($reservations->status) ?></td>
                            <td><?= h($reservations->deleted_at) ?></td>
                            <td><?= h($reservations->updated_at) ?></td>
                            <td><?= h($reservations->created_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
