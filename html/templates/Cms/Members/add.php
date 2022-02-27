<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member $member
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Members'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="members form content">
            <?= $this->Form->create($member) ?>
            <fieldset>
                <legend><?= __('Add Member') ?></legend>
                <?php
                    echo $this->Form->control('family_name');
                    echo $this->Form->control('first_name');
                    echo $this->Form->control('family_name_kana');
                    echo $this->Form->control('first_name_kana');
                    echo $this->Form->control('email');
                    echo $this->Form->control('tel');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
