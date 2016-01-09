<footer  class="dark">
	<section class="contactarea">
	<div class="row">
		<div class="columns xlarge-8  large-9 large-centered desc">
			<h3>A diverse skillset has been one of my greatest assets, an expanding range of creativity, capable of delivering concept to production.</h3>
			<hr>			
			<div class="email"><a href="mailto:sales@upheavaldesign.com?subject=Hello!"><h2>Email Me<i></i></h2></a></div>
		</div>
		</div>
					
	</section>
	<section class="row bottom">
		<div class="columns">
			<ul class="social">
				<li class="twitter"><a href="https://twitter.com/upheaval_tm" title="Twitter" target="_blank"><i class="icon-twitter"></i></a></li>
				<li class="instagram"><a href="https://instagram.com/upheavaldesign" title="Instagram" target="_blank"><i class="icon-instagram"></i></a></li>
				<li class="500px"><a href="http://www.500px.com/upheaval" title="Portfolio at 500px" target="_blank"><i class="icon-500px"></i></a></li>				
				<li class="istock"><a href="http://www.istockphoto.com/search/portfolio/245063/" title="Contributor at iStock Photo" target="_blank"><i class="icon-istock"></i></a></li>
				<li class="vimeo"><a href="https://vimeo.com/upheavaldesign" title="Vimeo" target="_blank"><i class="icon-vimeo"></i></a></li>
			</ul>
		</div>
		<div class="columns">
			<ul class="quicklinks">
				<li><a href="/web">Web</a></li>
				<li><a href="/photo">Photo</a></li>
				<li><a href="/about">About</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="/pay">$ Pay</a></li>
				<li><a href="/privacy">Privacy</a></li>
				<?php /*?><li><a href="/blog">Blog</a></li><?php */?>
			</ul>
		</div>
		
		<div class="columns copyright">
			<p>COPYRIGHT &copy; UPHEAVAL DESIGN <?php echo auto_copyright(2001) ?>.  Portland, OR, USA.</p>
		</div>
		</div>
	</section>
	</div>
</footer>
<script type="text/javascript" src="/assets/js/scripts.js"></script>
<?php if($dev){?>
<script type="text/javascript">
<!--// live reload
$(function() { 
	setTimeout( function() { $('body').append('<script src="http://'+location.hostname+':35729/livereload.js"></script>'); }, 1000 );
});
//--> 
</script>
<?php } else { ?>
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