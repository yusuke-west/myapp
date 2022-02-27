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
    <?= $this->Form->control('reserved_at', [
        'type' => 'datetime',
    ]) ?>
    <?= $this->Form->select('staff', [1,2,3,4]) ?>
    <?= $this->Form->select('service', [1,2,3]) ?>
    <?= $this->Form->button('submit') ?>
    <?= $this->Form->end() ?> 
</body>
</html>