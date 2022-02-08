<footer>
	<section class="grid-container bottom">
		<div class="grid-x justify-center">
			<div class="cell">
				<ul class="social-icons">
					<li class="instagram">
						<a href="https://instagram.com/upheavaldesign/" title="Instagram" target="_blank"
							rel="noopener">
							<span><svg aria-hidden="true">
									<use xlink:href="/assets/gfx/sprite.svg#social-instagram"></use>
								</svg></span>
						</a></li>					
					<li class="istock"><a href="https://www.istockphoto.com/portfolio/upheaval/"
							title="Contributor at iStock Photo" target="_blank" rel="noopener"><span><svg
									aria-hidden="true">
									<use xlink:href="/assets/gfx/sprite.svg#social-istockphoto"></use>
								</svg></span></a></li>
								<li class="500px"><a href="http://www.500px.com/upheaval/" title="Portfolio at 500px"
							target="_blank" rel="noopener"><span><svg aria-hidden="true">
									<use xlink:href="/assets/gfx/sprite.svg#social-500px"></use>
								</svg></span></a></li>
					<li class="vimeo"><a href="https://vimeo.com/upheavaldesign/" title="Portfolio at Vimeo"
							target="_blank" rel="noopener"><span><svg aria-hidden="true">
									<use xlink:href="/assets/gfx/sprite.svg#social-vimeo"></use>
								</svg></span></a></li>
					<li class="twitter">
						<a href="https://twitter.com/upheavaldesign/" title="Twitter" target="_blank" rel="noopener">
							<span><svg aria-hidden="true">
									<use xlink:href="/assets/gfx/sprite.svg#social-twitter"></use>
								</svg></span>
						</a></li>
					<li class="github"><a href="https://github.com/upheavaldesign/" title="View my work at Github"
							target="_blank" rel="noopener"><span><svg aria-hidden="true">
									<use xlink:href="/assets/gfx/sprite.svg#social-github"></use>
								</svg></span></a></li>
				</ul>
			</div>

			<div class="cell">
				<div class="quicklinks">
					<ul class="a">
						<li><a class="<?php if($parent == 'web'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; }?>"
								href="/web">Web</a></li>
						<li><a class="<?php if($parent == 'photo'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; }?>"
								href="/photo">Photo</a></li>
						<li><a class="<?php if($parent == 'artwork'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; }?>"
								href="/artwork">Artwork</a></li>
					</ul>
					<ul class="b">
						<li><a class="<?php if($parent == 'about'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; } ?>"
								href="/about">About</a></li>
						<li><a class="<?php if($parent == 'contact'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; } ?>"
								href="/contact">Contact</a></li>
						<?php /*?><li><a href="/archive">Archive</a></li><?php */?>
						<li><a class="<?php if($parent == 'pay'){ echo ($cur_url != 'index.php') ? 'active' : 'current'; } ?>"
								href="/pay">Pay</a></li>

					</ul>
				</div>
			</div>
			<div class="cell copyright">
				<p>COPYRIGHT &copy; UPHEAVAL DESIGN <?php echo auto_copyright(2001) ?>.<br class="show-for-medium-only">
					Portland, OR, USA</p>
			</div>
		</div>
	</section>
</footer>

<script type="text/javascript" src="/assets/js/scripts.js?v=1640309261342!"></script>
<?php if($local){?>
<script type="text/javascript">
	document.write('<script src="http://' +
		(location.host || 'localhost').split(':')[0] +
		':35729/livereload.js"></' +
		'script>')
</script>
<?php } else { ?>
<script>
	(function (i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function () {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
	ga('create', '<?php echo $GA_ID; ?>', 'auto');
	ga('send', 'pageview');
</script>
<?php } ?>
</body>

</html>