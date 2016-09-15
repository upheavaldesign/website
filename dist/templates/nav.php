<header>
	<div class="row logo">
		<figure class="columns">
			<div class="wrap"> <a href="/">
				<figure class="upheaval"><img src="/assets/ui/UPHEAVAL.png" alt="Upheaval"></figure>
				<div class="name">UPHEAVAL <span class="title">Design &amp; Photo</span></div>
				</a> </div>
		</figure>
	</div>
	<div class="row">
		<?php /*?><ul class="contact">
			<li><a class="tel" href="tel:+15416197249"><i class="icon-phone"></i>(541) 619-7249</a></li>
			<li><i class="icon-email"></i><a class="email" href="mailto:sales@upheavaldesign.com?subject=Hello!">Email</a></li>
			<!--<li>Portland, Oregon, USA</li>-->
		</ul>	
		<hr class="break"><?php */?>
		<div id="drop"> <a class="" href="#">
			<figure><span></span></figure>
			<!--<span class="m">Menu</span>--> 
			</a> </div>
		<nav class="main">
			<ul>
				<li> <a class="<?php echo ($parent == 'web') ? 'current' : ''?>" href="/web/"> <span>Web<i></i></span> </a> </li>
                <li> <a class="<?php echo ($parent == 'artwork') ? 'current' : ''?>" href="/artwork/"> <span>Artwork<i></i></span> </a> </li>
				<li> <a class="<?php echo ($parent == 'photo') ? 'current' : ''?>" href="/photo/"> <span>Photo<i></i></span> </a> </li>
				<li> <a class="<?php if ($parent == 'about') { echo ($cur_dir != 'about') ? 'active' : 'current'; } ?>" href="/about/"> <span>About<i></i></span> </a> </li>
                <li> <a class="<?php echo ($parent == 'contact') ? 'current' : ''?>" href="/contact/"> <span>Contact<i></i></span> </a> </li>
				
			</ul>
		</nav>
	</div>
</header>

