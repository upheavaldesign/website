<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
$web = json_decode(file_get_contents('../data/web.json'), true);
?>
<section class="page-heading">
	<div class="grid-container">
		<div class="cell">
			<!-- <h1>Front-end development and design<br class="show-for-xlarge-up"> is my specialty, mostly.</h1> -->
			<h1 class="title">As a freelance <em>web&nbsp;artisan</em><br class="show-for-medium-only"> I design the visuals<br
					class="show-for-large"> and hand&#8209;craft the programming.</h1>
		</div>
	</div>
</section>

<article class="page">
	<section class="clients">
		<div class="grid-container">
			<div class="grid-x grid-margin-x mason-grid">
				<?php $path = '/assets/web/'; ?>
				<?php foreach ($web as $key => $client): ?>
				<div class="cell large-9 mason-item">
					<a class="client slideup" href="<?php echo $client['url']; ?>" target="_blank" rel="noopener">
						<figure class="gfx">
							<figcaption><span class="client-title"><?php echo $client['title']; ?></span>
								<span class="client-year"><?php echo $client['year']; ?></span></figcaption>
							<div class="img-wrap fill"><img class="lazyload"
									data-src="<?php echo $path.$client['thumb']; ?>.jpg" src="/assets/gfx/pixel.png"
									alt="<?php echo $client['thumb-alt']; ?>"></div>
						</figure>
						<div class="summary">
							<h5 class="client-name"><?php echo $client['name']; ?><span
									class="client-scope"><?php echo $client['scope']; ?></span></h5>

						</div>
					</a>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<hr class="mt-5">

	<?php include $root."/web/tpl-agency.php"; ?>
</article>

<section class="directive">
	<div class="grid-container">
		<div class="cell hide-for-large">
			<h4 class="call">Ready?</h4>
			<a class="line action" href="/contact/" title="Contact">
				Give me a Shout
			</a>
		</div>
		<div class="cell show-for-large">
			<h4 class="call">I first became a <em>webmaster</em> in 1999, it's a bit more complicated nowadays.</h4>
			<h4 class="call">Today I design &amp; develop mobile-friendly websites using responsive best practices.</h4>			
			<a class="line action" href="/contact/" title="Contact">
				Let's Create Something Great
			</a>
		</div>
	</div>
</section>

<?php include_once( $root."/templates/footer.php"); ?>