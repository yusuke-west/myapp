<? $this->assign('block', 'contact') ?>
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

<p class="check">当ページ（contact.html）はフォームの見本ページです。実際の自動フォームには使いませんのでご注意下さい。</p>

<h2 class="title">CONTACT<span>お問い合わせ</span></h2>

<p>当ページと同じ３項目のお問い合わせフォーム（自動フォーム試用版）を簡単に使えるようにセットしています。</p>
<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="http://template-party.com/file/formgen_manual_set2.html" target="_blank">こちらのマニュアルをご覧下さい。</a></p>
<p><strong class="color1">■自動フォームを使わない場合</strong><br>
テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

<table class="ta1">
<tr>
<th>お名前※</th>
<td><input type="text" name="お名前" size="30" class="ws"></td>
</tr>
<tr>
<th>メールアドレス※</th>
<td><input type="text" name="メールアドレス" size="30" class="ws"></td>
</tr>
<tr>
<th>お問い合わせ詳細※</th>
<td><textarea name="お問い合わせ詳細" cols="30" rows="10" class="wl"></textarea></td>
</tr>
</table>

<p class="c">
<input type="submit" value="内容を確認する" class="btn">
</p>

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