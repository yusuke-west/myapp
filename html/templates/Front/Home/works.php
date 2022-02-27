<? $this->assign('block', 'works') ?>
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

<h2 class="title">Works<span>業務内容</span></h2>
<p>画像サイズは適当でかまいませんが必ず正方形にして下さい。1pxでもずれがあると段落ちする場合があります。<br>
リンクが設定されている場合、画像の右上に「→」マークが出ます。色やサイズなどの指定はcssフォルダのstyle.cssの「.list a::after」でできます。小さな端末用の再設定もあるので注意して下さい。</p>

<div class="list">
<a href="works2.html">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>タイトル</h4>
</a>
</div>

<div class="list">
<a href="works2.html">
<figure><img src="images/sample2.jpg" alt=""></figure>
<h4>タイトル</h4>
</a>
</div>

<div class="list">
<a href="works2.html">
<figure><img src="images/sample3.jpg" alt=""></figure>
<h4>タイトル</h4>
</a>
</div>

<div class="list">
<figure><img src="images/sample1.jpg" alt=""></figure>
<h4>タイトル</h4>
</div>

<div class="list">
<figure><img src="images/sample2.jpg" alt=""></figure>
<h4>タイトル</h4>
</div>

<div class="list">
<figure><img src="images/sample3.jpg" alt=""></figure>
<h4>タイトル</h4>
</div>

</section>

<section>

<h2>３列ではない終わり方になる場合</h2>

<div class="list">
<figure><img src="images/sample2.jpg" alt=""></figure>
<h4>タイトル</h4>
</div>

<div class="list">
<figure><img src="images/sample3.jpg" alt=""></figure>
<h4>タイトル</h4>
</div>

<p>このように、ブロックが回り込んでしまいます。<br>
それを避けるには、回り込みを回避したいブロックにclass=&quot;clear&quot;を指定します。<br>
下にその例があります。</p>
<p>サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</p>

</section>

<section>

<h2>clear指定した例</h2>

<div class="list">
<figure><img src="images/sample2.jpg" alt=""></figure>
<h4>タイトル</h4>
</div>

<div class="list">
<figure><img src="images/sample3.jpg" alt=""></figure>
<h4>タイトル</h4>
</div>

<p class="clear">ブロックにclass=&quot;clear&quot;を指定するとこのように回り込みを解除できます。<br>
尚、h2やh3の見出しにはあらかじめclear指定が入っているのでこの指定がなくても問題ありません。<br>
サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。サンプルテキスト。</p>

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