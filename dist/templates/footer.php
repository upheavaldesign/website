<footer>
	<section class="row bottom">
		<div class="columns">
			<ul class="social">
				<li class="twitter"><a href="https://twitter.com/upheavaldesign" title="Twitter" target="_blank"><i class="icon-twitter"></i></a></li>
				<li class="instagram"><a href="https://instagram.com/upheavaldesign" title="Instagram" target="_blank"><i class="icon-instagram"></i></a></li>
				<li class="500px"><a href="http://www.500px.com/upheaval" title="Portfolio at 500px" target="_blank"><i class="icon-500px"></i></a></li>
				<li class="istock"><a href="http://www.istockphoto.com/search/portfolio/245063/" title="Contributor at iStock Photo" target="_blank"><i class="icon-istock"></i></a></li>
				<li class="vimeo"><a href="https://vimeo.com/upheavaldesign" title="Vimeo" target="_blank"><i class="icon-vimeo"></i></a></li>
			</ul>
		</div>
		<div class="columns">
			<div class="quicklinks">
				<ul class="a">
					<li><a class="<?php echo ($parent == 'web') ? 'current' : ''?>" href="/web">Web</a></li>
                    <li><a class="<?php echo ($parent == 'artwork') ? 'current' : ''?>" href="/artwork">Artwork</a></li>
					<li><a class="<?php echo ($parent == 'photo') ? 'current' : ''?>" href="/photo">Photo</a></li>

				</ul>
				<ul class="b">
                	<li><a class="<?php if ($parent == 'about') { echo ($cur_dir != 'about') ? 'active' : 'current'; } ?>" href="/about">About</a></li>
					<li><a class="<?php echo ($parent == 'contact') ? 'current' : ''?>"  href="/contact">Contact</a></li>
					<?php /*?><li><a href="/archive">Archive</a></li><?php */?>
					<li><a class="<?php echo ($parent == 'pay') ? 'current' : ''?>"  href="/pay">Pay</a></li>
					<?php /*?><li><a href="/blog">Blog</a></li><?php */?>
				</ul>
			</div>
		</div>
		<div class="columns copyright">
			<p>COPYRIGHT &copy; UPHEAVAL DESIGN <?php echo auto_copyright(2001) ?>.<br class="show-for-medium-only">
				Portland, OR, USA</p>
		</div>
	</section>
</footer>

<?php if($dev){?>
<script type="text/javascript" src="/assets/js/scripts.js"></script>
<script type="text/javascript">
<!--// live reload
$(function() {
	setTimeout( function() { $('body').append('<script src="http://'+location.hostname+':35729/livereload.js"></script>'); }, 1000 );
});
//-->
</script>
<?php } else { ?>
<script type="text/javascript" src="/assets/js/scripts.1465403434108.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-5764394-1', 'auto');
  ga('send', 'pageview');
</script>
<?php } ?>
</body></html>