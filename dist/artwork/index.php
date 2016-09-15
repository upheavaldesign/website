<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
$JSON = $REQUEST_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].'/assets/data/artwork.json';
$artwork = getJSON($JSON);
$route = getProjectUri(); //check for slug'
$route404 = false;
if($route != '') {
	/*check if slug exists*/
	if ( !searchArray($route, $artwork) ){
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
<section class="statement">
    <div class="row">
        <div class="columns xlarge-10 large-11 large-centered desc">
			<h1>Focusing his craft in <br>photo retouching and digital effects, <br class="show-for-large-up"><a class="line" href="/about/adam">Adam<i></i></a> blends illusion <br class="show-for-small-only">with realism.</h1>
        </div>
    </div>
    <hr>
</section>

<article class="page">

	<div class="grid" data-error="<?php echo $route404; ?>">
		<div class="row">
			<?php
		$dir = '/assets/artwork/';
		$i = 0;

		foreach ($artwork as $k => $group){
			$group = $group['imgs'];
			$cat = $k;
			foreach ($group as $key => $img){
			$gridSize = calcGrid(count($group));
			?>
			<article id="<?php echo ++$i; ?>" class="columns <?php echo $gridSize; ?> large-3 small-6 thumb"> <a href="/artwork/<?php echo $img; ?>"
					data-slug="<?php echo $img; ?>"
					data-count="<?php echo $i; ?>"
				>
				<figure class="frame">
					<?php if($route == ''){ ?>
					<img class="lazyload"
						data-src="<?php print $dir.$img.'-thumb.jpg'; ?>"
						src="/assets/ui/pixel.png"
						alt="<?php echo $img; ?>"/>
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
			<?php } } ?>
			<!--End of Grid-->
		</div>
	</div>
    <section class="statement">
        <div class="row">
            <div class="columns xlarge-10 large-11 large-centered desc">
                <h4>Much of our artwork is more than graphic design. <br class="show-for-xlarge-up">We prefer to collaborate with clients early and guide the conceptual phase through the creative process. <br class="hide-for-xlarge-up"><br class="hide-for-xlarge-up">Our workflow includes concept, photography, graphic design, and delivery of digital &amp; print ready assets.</h4>
            </div>
        </div>
        <hr class="space hide-for-large-up">
    </section>
</article>
  <section class="block">
    <div class="row">
      <div class="columns xxlarge-8 xlarge-10  large-9 large-centered desc">
        <h3>Over a decade behind a monitor and an ear-full of hip-hop, Adam is quick to develop ideas, and he continues to produce illustrious artworks.</h3>
        <hr>
        <h2><?php echo encrypt_email('line', 'adam@upheavaldesign.com', 'Artwork', 'Email Adam', '<i></i>'); ?></h2>
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
