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
			<!--<p>Exploring the internets and building stuff since ~1999.</p>--> 
		</div>
	</div>
</section>
<section class="page">
	<?php 
		$dir = '/assets/web/';		
		foreach ($web as $k => $client){
			$client = $client[0];	
			$slug = $k;	
			?>
	<article class="row client <?php echo $slug; ?>"> <a class="columns" href="/web/<?php echo $slug; ?>"
					data-slug="<?php echo $slug; ?>"
					data-count="<?php echo $i; ?>"
				>
		<div class="columns large-8 small-6">
			<h5><?php echo $client['client']; ?></h5>
			<h2><?php echo $client['title']; ?>
				<span><?php echo $client['scope']; ?></span>
			</h2>			
			<p>Take a look</p>
		</div>
		<div class="columns large-4 small-6">
			<figure class="client-logo">
				<?php if($route == ''){ ?>
				<img class="lazyload"					
						data-src="<?php print $dir.'logo_'.$slug.'.svg'; ?>"
						src="/assets/ui/pixel.png"
						alt="<?php echo $client['client']; ?>">
				<?php } ?>
			</figure>
		</div>
		</a> 
		</article>
	<?php } ?>
	<!--End of Grid--> 
</section>
<section class="modal">
	<div class="wrap">
		<div class="panel"> <a class="close"><span></span></a>
			<figure class="photo"> <img alt="">
				<figcaption>
					<h5>Loading</h5>
				</figcaption>
			</figure>
			<nav data-count="1"> <a id="prev" href=""><span><i class="icon-left"></i></span></a> <a id="next" href=""><span><i class="icon-right"></i></span></a> </nav>
		</div>
	</div>
</section>
<?php include_once( $root."/templates/footer.php"); ?>
