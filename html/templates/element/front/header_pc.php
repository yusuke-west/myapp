<header class="pc">

	<h1 class="logo">
        <a href="<?= $this->Url->build(['action' => 'index']) ?>">
            <?= $this->Html->image('/plugins/template/tp_biz52_black/images/logo.png') ?>
        </a>
    </h1>

	<!--PC用（801px以上端末）メニュー-->
	<?= $this->element('front/navbar') ?>
	<?= $this->element('front/icon') ?>

</header>