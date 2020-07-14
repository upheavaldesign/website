<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
$photos = json_decode(file_get_contents('../assets/data/photos.json'), true);
?>

<section class="page-heading">
	<div class="grid-container">
		<div class="cell">			
			<h1 class="title">I photograph excellent commercial portraits, <br class="">sometimes more.</h1>			
		</div>
	</div>
</section>

<article class="page">
	<div class="grid-container portfolio">
		<div class="grid-x">
			<?php $path = '/assets/photo/'; $i = 0;
		foreach ($photos as $k => $category){
			$group = $category['imgs'];
			foreach ($group as $key => $img):
			$gridSize = calcPhotoGrid(count($group));
			?>
			<div id="<?php echo ++$i; ?>" class="cell small-9 large-6 <?php echo $gridSize; ?> thumb">
				<div class="btn-thumb" data-path="<?php echo $path; ?>" data-slug="<?php echo $key; ?>"
					data-count="<?php echo $i; ?>">
					<figure class="frame">
						<img class="lazyload" data-src="<?php print $path.$key.'-thumb.jpg'; ?>"
							src="/assets/ui/pixel.png" alt="<?php echo $img['alt']; ?>" />
					</figure>
				</div>
			</div>
			<?php endforeach; ?>
			<?php } ?>
		</div>
	</div>
</article>

<section class="directive">
	<div class="grid-container">
		<div class="cell">
			<h4 class="call hide-for-large">Impressed?</h4>
			<h4 class="call show-for-large">Are you ready for an impressive portrait?</h4>
			<a class="line action" href="/contact/" title="Contact">
				Give me a Shout
			</a>
		</div>
	</div>
</section>

<?php include $root."/templates/modal.php"; ?>
<?php include_once( $root."/templates/footer.php"); ?>