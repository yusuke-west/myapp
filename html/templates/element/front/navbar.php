<nav id="menubar">
	<ul>
	<li class="menuimg menu1 current">
		<a href="<?= $this->Url->build(['action'=>'index']) ?>"><span>Home</span></a>
	</li>
	<li class="menuimg menu2">
		<a href="<?= $this->Url->build(['action'=>'company']) ?>"><span>Company</span></a>
	</li>
	<li class="menuimg menu3">
		<a href="<?= $this->Url->build(['action'=>'works']) ?>"><span>Works</span></a>
	</li>
	<li class="menuimg menu4">
		<a href="<?= $this->Url->build(['action'=>'link']) ?>"><span>Link</span></a>
	</li>
	<li class="menuimg menu5">
		<a href="<?= $this->Url->build(['action'=>'contact']) ?>"><span>Contact</span></a>
	</li>
	</ul>
</nav>