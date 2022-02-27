<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= h(nl2br($postData['family_name'])) ?>
    <?= h(nl2br($postData['first_name'])) ?>
    <?= h(nl2br($postData['family_name_kana'])) ?>
    <?= h(nl2br($postData['first_name_kana'])) ?>
    <?= h(nl2br($postData['email'])) ?>
    <?= h(nl2br($postData['tel'])) ?>
    <?= $this->Form->create(null, [
        'url' => ['action'=>'complete'],
    ]) ?>
    <?= $this->Form->hidden('family_name') ?>
    <?= $this->Form->hidden('first_name') ?>
    <?= $this->Form->hidden('family_name_kana') ?>
    <?= $this->Form->hidden('first_name_kana') ?>
    <?= $this->Form->hidden('email') ?>
    <?= $this->Form->hidden('tel') ?>
    <?= $this->Form->button('submit') ?>
    <?= $this->Form->button('back',['onclick'=>'history.back()']) ?>
    <?= $this->Form->end() ?>
</body>
</html>
