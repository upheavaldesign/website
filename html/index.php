<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
$web = json_decode(file_get_contents('data/web.json'), true);
$artwork = json_decode(file_get_contents('data/artwork.json'), true);
?>

<section class="page-heading">
	<div class="grid-container">
		<div class="cell">
			<h1 class="title hide-for-large">Hire me to<br> build websites,<br> design branding,<br> and capture
				portraits.</h1>
			<h1 class="title show-for-large">Leading professionals hire me to<br class="show-for-xlarge"> build
				websites,<br class="show-for-large-only"> design branding, and capture portraits.</h1>
		</div>
	</div>
</section>

<article class="page">

	<section class="clients">
		<div class="grid-container">
			<div class="grid-x grid-margin-x mason-grid">
				<?php $path = '/assets/web/'; ?>
				<?php foreach ($web as $key => $client): ?>
				<?php if($client['homepage'] == 'true'): ?>
				<div class="cell large-9 xlarge-6 mason-item">
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
				<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<hr class="hide-for-large">

	<div class="grid-container statement">
		<div class="cell text-center">
			<h4>My work often includes branding such as logo design, print assets, and style guides.<br class="show-for-large"> I love crafting the entire presentation and user experience.</h4>
		</div>
	</div>

	<section class="portfolio">
		<div class="grid-container">
			<div class="grid-x">
				<?php $i = 0; ?>
				<?php $path = '/assets/artwork/'.$artwork['homepage']['path'].'/';	?>
				<?php foreach ($artwork['homepage']['imgs'] as $key => $img): ?>
				<?php $gridSize = 'xlarge-five';?>
				<?php if(!next($artwork['homepage']['imgs'])) { $gridSize .= ' show-for-xlarge'; } ?>
				<div id="<?php echo ++$i; ?>" class="cell small-9 large-four <?php echo $gridSize; ?> thumb">
					<div class="btn-thumb" data-path="<?php echo $path; ?>" data-slug="<?php echo $key; ?>"
						data-count="<?php echo $i; ?>">
						<figure class="frame">
							<img class="lazyload" data-src="<?php print $path.$key.'-thumb.jpg'; ?>"
								src="/assets/gfx/pixel.png" alt="<?php echo $img['alt']; ?>" />
						</figure>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php include $root."/templates/partners.php"; ?>

</article>

<section class="directive">
	<div class="grid-container ">
		<div class="cell">
			<h4 class="call hide-for-large">Ready?</h4>
			<h4 class="call show-for-large">Ready to discuss your project?</h4>
			<a class="line action" href="/contact/" title="Contact">
				Give me a Shout
			</a>
		</div>
	</div>
</section>

<?php include $root."/templates/modal.php"; ?>
<?php include_once($root."/templates/footer.php"); ?>