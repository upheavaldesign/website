<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
$JSON = 'http://'.$_SERVER['HTTP_HOST'].'/assets/data/web.json';
$web = getJSON($JSON);
$route = getProjectUri(); //check for slug'
$route404 = false;
if($route != '') {	
	/*check if slug exists*/
	if ( !searchArray($route, $web) ){		
		/*if project does not exist, close modal*/
		$route404 = true;
	}	
}
?>

<section class="statement">
	<div class="row">
		<div class="columns xlarge-10 large-9 large-centered desc">
			<h1>I love to build stuff, and problem solve. <br class="show-for-large-up">
				We should collaborate, or <a href="/about/"><em>conspire</em><i></i></a>.</h1>
		</div>
	</div>
</section>
<section class="page">
	<div class="grid">
		<div class="row">
			<?php 
		$dir = '/assets/web/';		
		foreach ($web as $k => $client){
			$client = $client[0];	
			$slug = $k;	
			?>
			<article class="columns <?php echo $client['grid']; ?> thumb"> <a class="<?php echo $slug; ?>" href="/web/<?php echo $slug; ?>"
					data-slug="<?php echo $slug; ?>"
					data-count="<?php echo $i; ?>"
				>
				<figure class="frame" style="background-size: cover;
    background-position: center; background-image:url(<?php print $dir.$slug.'_thumb.jpg'; ?>);">
				<?php /*?><img class="lazyload"					
				data-src="<?php print $dir.$slug.'_thumb.jpg'; ?>"
				src="/assets/ui/pixel.png"
				alt="<?php echo $client['client']; ?>"><?php */?>
					<figcaption>
						<h5><?php echo $client['client']; ?></h5>
					</figcaption>
				</figure>
				</a> </article>
			<?php } ?>
			<!--End of Grid--> 
		</div>
	</div>
</section>
<?php include_once( $root."/templates/footer.php"); ?>
