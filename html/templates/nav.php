<header id="masthead">
	<div class="grid-container">
		<div class="logo">
			<a href="/">
				<figure class="upheaval"><img src="/assets/gfx/UPHEAVAL.png" alt="Upheaval Design logo"></figure>
				<div class="name">UPHEAVAL <span class="title">Design &amp; Photo</span></div>
			</a>
		</div>

		<button id="nav-icon">
			<span></span>
		</button>
		<nav class="primary-nav">
			<ul>
				<li> <a class="<?php if($parent == 'web'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; } ?>"
						href="/web/"> <span>Web</span> </a></li>				
				<li> <a class="<?php if($parent == 'photo'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; } ?>"
						href="/photo/"> <span>Photo</span></a> </li>
						<li> <a class="<?php if($parent == 'artwork'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; } ?>"
						href="/artwork/"> <span>Artwork</span></a> </li>
				<li> <a class="<?php if($parent == 'about'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; } ?>"
						href="/about/"> <span>About</span></a> </li>
				<li> <a class="<?php if($parent == 'contact'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; } ?>"
						href="/contact/"> <span>Contact</span></a> </li>

			</ul>
		</nav>
	</div>
</header>