<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
$dir = '/assets/web/';	
//$JSON = 'http://'.$_SERVER['HTTP_HOST'].'/assets/data/web.json';
//$web = getJSON($JSON);
//$route = getProjectUri(); //check for slug'
//$route404 = false;
//if($route != '') {	
	/*check if slug exists*/
	//if ( !searchArray($route, $web) ){		
		/*if project does not exist, close modal*/
		//$route404 = true;
	//}	
//}
?>
<section class="statement">
    <div class="row">
        <div class="columns xlarge-10 large-11 large-centered desc">
            <h1>We love to create stuff, <br class="hide-for-large-up">and problem solve. <br class="show-for-xxlarge-up">Let's collaborate, or <a class="line" href="/about/"><em>conspire</em><i></i></a>.</h1>
        </div>
    </div>
    <hr>
</section>

<article class="page">
	<section class="row client"> <a class="" href="http://statedclearly.com" target="_blank">
		<div class="overlay statedclearly">
			<div class="info">
				<h5>Stated Clearly</h5>
				<h2>Explaining Complex Science <br class="show-for-xlarge-up">with Animations</h2>
				<div class="btn-hollow">Watch &amp; Learn<i class="icon-right"></i></div>	
			</div>		
			<figure class="client-logo">
				<img src="<?php print $dir.'logo_statedclearly-white.svg'; ?>"
						alt="Stated Clearly">
			</figure>
			<div class="bg"></div>	
		</div>
		<div class="mosaic">
			<figure class="columns large-3 small-6">					
				<img src="<?php print $dir.'statedclearly-2.jpg'; ?>" alt="Stated Clearly">
			</figure>		
			<figure class="columns xlarge-2 large-3 small-6 deux">
				<img src="<?php print $dir.'statedclearly-3.jpg'; ?>" alt="Stated Clearly">
				<img src="<?php print $dir.'statedclearly-4.jpg'; ?>" alt="Stated Clearly">
			</figure>			
			<figure class="columns xlarge-7 large-6 primary">
				<img src="<?php print $dir.'statedclearly-1.jpg'; ?>" alt="Stated Clearly">
			</figure>	
		</div>
		</a> 
	</section>
		
	<section class="row client"> <a class="" href="http://oregonruns.com" target="_blank">
		<div class="overlay oregonruns">
			<div class="info">
				<h5>Oregon Runs</h5>
				<h2>Finding adventure should be easy, enduring it is<br class="hide-for-xlarge-up"> the fun part</h2>
				<div class="btn-hollow">Find a Run<i class="icon-right"></i></div>	
			</div>		
			<figure class="client-logo">
				<img src="<?php print $dir.'logo_oregonruns-white.svg'; ?>"
						alt="Oregon Runs">
			</figure> 
			<div class="bg"></div>		
		</div>
		<div class="mosaic ">	
			<figure class="columns xlarge-1 small-6 tri show-for-xlarge-up">
				<img src="<?php print $dir.'oregonruns-6.jpg'; ?>" alt="Oregon Runs">
				<img src="<?php print $dir.'oregonruns-3.jpg'; ?>" alt="Oregon Runs">
				<img src="<?php print $dir.'oregonruns-5.jpg'; ?>" alt="Oregon Runs">
			</figure>
			<figure class="columns xlarge-3 large-3 small-6">
			<img src="<?php print $dir.'oregonruns-2.jpg'; ?>" alt="Oregon Runs">									
			</figure>
			
			<figure class="neighbor columns xlarge-2 large-3 small-6 deux">
			<img src="<?php print $dir.'oregonruns-7.jpg'; ?>" alt="Oregon Runs">
			<img src="<?php print $dir.'oregonruns-4.jpg'; ?>" alt="Oregon Runs">							
			</figure>
			
			<figure class="primary columns xlarge-6 large-6">
					<img src="<?php print $dir.'oregonruns-1.jpg'; ?>" alt="Oregon Runs">	
			</figure>
		</div>
		</a> 
	</section>	
	
	<section class="row client"> <a class="" href="http://jonmcmullenlaw.com" target="_blank">
		<div class="overlay mcmullen">
			<div class="info">
				<h5>Criminal Defense Attorney</h5>
				<h2><span class="show-for-xlarge-up">Trial Lawyer of the Year</span><span class="hide-for-xlarge-up">Jon J. McMullen is awarded Trial Lawyer of the Year</span></h2>
				<div class="btn-hollow">Choose Jon McMullen<i class="icon-right"></i></div>	
			</div>
			<figure class="client-logo">
				<img src="<?php print $dir.'logo_jon-mcmullen-white.svg'; ?>"
						alt="Jon McMullen">
			</figure>		
			
			<div class="bg"></div>
		</div>
		<div class="mosaic">	
			<figure class="columns xlarge-2 large-3 small-6 deux">
				<img src="<?php print $dir.'mcmullen-4.jpg'; ?>" alt="Jon McMullen">
				<img src="<?php print $dir.'mcmullen-3.jpg'; ?>" alt="Jon McMullen">	
			</figure>
			
			<figure class="neighbor columns xlarge-4 large-3 small-6">
				<img src="<?php print $dir.'mcmullen-2.jpg'; ?>" alt="Jon McMullen">					
			</figure>
			
			<figure class="primary columns xlarge-6 large-6">
				<img src="<?php print $dir.'mcmullen-1.jpg'; ?>" alt="Jon McMullen">
			</figure>	
		</div>
		</a> 
	</section>
</article>
<section class="statement">
        <div class="row">
            <div class="columns xlarge-10 large-11 large-centered desc">
                <h4><a class="line" href="/about/jeremiah">Jeremiah<i></i></a> is a <em>web artisan</em>, with a devotion to hand crafting unique solutions.<br class="hide-for-medium-up"> A brief sample of his web design portfolio is listed above.</h4>
            </div>
            <hr class="space">
        </div>
	</section>
<section class="block">
<div class="row">
  <div class="columns xxlarge-8 xlarge-10  large-9 large-centered desc">
    <h3>A diverse skillset has been one of my greatest assets, an expanding range of creativity, capable of delivering concept to production.</h3>
    <hr>
    <h2><?php echo encrypt_email('line', 'sales@upheavaldesign.com', 'Web', 'Email Jeremiah', '<i></i>'); ?></h2>
  </div>
</div>
</section>
<?php include_once( $root."/templates/footer.php"); ?>