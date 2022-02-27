<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= $this->Form->create(null, [
        'url' => ['action'=>'confirm'],
    ]) ?>
    <?= $this->Form->control('family_name') ?>
    <?= $this->Form->control('first_name') ?>
    <?= $this->Form->control('family_name_kana') ?>
    <?= $this->Form->control('first_name_kana') ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('tel') ?>
    <?= $this->Form->button('submit') ?>
    <?= $this->Form->end() ?> 
</body>
</html>