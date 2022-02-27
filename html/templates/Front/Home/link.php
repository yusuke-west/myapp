<? $this->assign('block', 'link') ?>
<div id="container">

<!--PC用（801px以上端末）で表示させるブロック-->
<?= $this->element('front/header_pc') ?>

<!--/.pc-->

<!--小さな端末用（800px以下端末）で表示させるブロック-->
<?= $this->element('front/header_sp') ?>

<!--/.sh-->

<div id="contents">

<div id="main">

<section id="pagetop">

<h2 class="title">Links<span>リンク</span></h2>

<table class="ta1">
<caption>見出しが必要であればここを使います</caption>
<tr>
<th><a href="#">サイト名</a></th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th><a href="#">サイト名</a></th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th><a href="#">サイト名</a></th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th><a href="#">サイト名</a></th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th><a href="#">サイト名</a></th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th><a href="#">サイト名</a></th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th><a href="#">サイト名</a></th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th><a href="#">サイト名</a></th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
</table>

</section>

<footer>
<small>Copyright&copy; <a href="index.html">SAMPLE SITE</a> All Rights Reserved.</small>
<span class="pr"><a href="https://template-party.com/" target="_blank">《Web Design:Template-Party》</a></span>
</footer>

</div>
<!--/#main-->

</div>
<!--/#contents-->

</div>
<!--/#container-->

<!--ページの上部に戻る「↑」ボタン-->
<p class="nav-fix-pos-pagetop"><a href="#pagetop">↑</a></p>

<!--メニュー開閉ボタン-->
<div id="menubar_hdr" class="close"></div>

<!--メニューの開閉処理条件設定　800px以下-->
<script>
if (OCwindowWidth() <= 800) {
	open_close("menubar_hdr", "menubar-s");
}
</script>