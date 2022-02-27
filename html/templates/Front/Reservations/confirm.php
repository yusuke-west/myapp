<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= h(nl2br($postData['reserved_at'])) ?>
    <?= h(nl2br($postData['staff'])) ?>
    <?= h(nl2br($postData['service'])) ?>


    <?= $this->Form->create(null, [
        'url' => ['action'=>'complete'],
    ]) ?>
    <?= $this->Form->hidden('reserved_at') ?>
    <?= $this->Form->hidden('staff') ?>
    <?= $this->Form->hidden('service') ?>



    <?= $this->Form->button('submit') ?>
    <?= $this->Form->button('back',['onclick'=>'history.back()']) ?>
    <?= $this->Form->end() ?>
</body>
</html>
