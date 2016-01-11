<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
$JSON = 'http://'.$_SERVER['HTTP_HOST'].'/assets/data/photos.json';
$photos = getJSON($JSON);
$route = getProjectUri(); //check for slug'
$route404 = false;
if($route != '') {	
	/*check if slug exists*/
	if ( !searchArray($route, $photos) ){		
		/*if project does not exist, close modal*/
		$route404 = true;
	}	
}	


function calcGrid($count)
{
	if($count < 4){
		return 'xlarge-4';
	} else if($count == 4){
		return 'xlarge-3';
	} else if($count == 5){
		return 'unit-5';
	} else if($count == 6){
		return 'xlarge-2';
	} else if($count == 7){
		return 'unit-7';
	} else if($count == 8){
		return 'unit-8';
	} else if($count > 8){
		return 'xlarge-2';
	} 
}
?>

<section id="<?php echo $parent; ?>" class="page">
	<div class="grid" data-error="<?php echo $route404; ?>">
		<div class="row">
			<?php 
		$dir = '/assets/photo/';
		$i = 0; 
			
		foreach ($photos as $k => $group){
			$group = $group[0]['imgs'];	
			$cat = $k;			
			foreach ($group as $key => $img){ 
			$gridSize = calcGrid(count($group));
			?>
			<article id="<?php echo ++$i; ?>" class="columns <? echo $gridSize; ?> large-3 small-6 thumb"> <a href="/photo/<?php echo $img; ?>"
					data-slug="<?php echo $img; ?>"
					data-count="<?php echo $i; ?>"
				>
				<figure class="frame">
					<?php if($route == ''){ ?>
					<img class="lazyload"					
						data-src="<?php print $dir.$img.'_thumb.jpg'; ?>"
						src="/assets/ui/pixel.png"
						alt="<?php echo $img; ?>">
					<?php } ?>
					<?php /*?><img class="lazyload"
						data-srcset="<?php echo $dir.$photo['img'].'_thumb-s.jpg 200w, '
						.$dir.$photo['img'].'_thumb-m.jpg 400w, '
						.$dir.$photo['img'].'_thumb-l.jpg 600w'; ?>"
						data-src="<?php print $dir.$photo['img'].'_thumb-s.jpg'; ?>"
						src="/assets/ui/pixel.png"
						alt="<?php echo $photo['title']; ?>"><?php */?>
				</figure>
				</a> </article>
			<?php } ?>
			<?php } ?>
			<!--End of Grid--> 
		</div>
	</div>
</section>
<section class="modal">
	<div class="wrap">
		<div class="panel"> <a class="close"><span></span></a>
			<figure class="photo">
				<img alt="">
				<figcaption>
					<h5>Loading</h5>
				</figcaption>
			</figure>
			<nav data-count="1"> <a id="prev" href=""><span><i class="icon-left"></i></span></a> <a id="next" href=""><span><i class="icon-right"></i></span></a> </nav>
		</div>
	</div>
</section>
<?php include_once( $root."/templates/footer.php"); ?>
