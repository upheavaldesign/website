<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php"); ?>

<article class="page <?php echo $parent; ?>">
<hr class="space show-for-large-up"/>
  <div class="row">
    <article class="columns large-8">
      <h1>Adam Keys<span>Graphic Design Wizard</span></h1>
			<hr class="space show-for-large-up"/>
			<p>Considered a graphical wizard by his peers, dual wielding magic and camera simultaneously, with an imagination of beastly proportions.
Adam focuses his craft within the boundaries of visual design, specializing in photo touchup and digital effects where he blends illusion with realism. He authors most of our music packaging and event promotion graphics. <?php echo encrypt_email('', 'adam@upheavaldesign.com', 'Arwork', 'Email Adam'); ?></p>
			<hr class="space show-for-large-up"/>
			<div class="row skills">				
				<div class="columns large-6">
					<h5>Graphic Design<span>Photoshop, 3D Rendering</span></h5>					
                    <h5>Print<span>Layout, Templating</span></h5>
				</div>
                <div class="columns large-6">
                	<h5>Photo Retouching<span>Editing, Color Profiling, Compositing</h5>
                    <h5>Photography<span>Portrait, Weddings</span></h5>
					
				</div>
			</div>
		</article>
		<aside class="columns large-4 sidebar">
			<hr class="space show-for-large-up"/>
			<figure class="photo"> <img src="/assets/img/AdamKeys.jpg" alt="Adam Keys Portrait"/> </figure>
			<!--<blockquote class="hanger">
				<h5>Personal Quote</h5>
			</blockquote>-->
		</aside>
  </div>
  
  <?php /*?><section class="partners">
    <hr class="xl">
    <div class="row">
      <div class="columns small-11 large-10 small-centered desc">
        <h3>Notable Collaborations</h3>
        <p>Enthusiastic partnerships produce masterful creativity.</p>
      </div>
      <hr class="space-xl show-for-large-up">
      <div class="columns">
        <figure class="columns xlarge-3 small-6"> <a href="http://adidas.com/us/" target="_blank">
          <h6>Adidas</h6>
          <img alt="Adidas" src="/assets/ui/client-adidas.jpg" > </a> </figure>
        <figure class="columns xlarge-3 small-6"> <a href="https://thedoors.com/" target="_blank">
          <h6>The Doors</h6>
          <img alt="ABA" src="/assets/ui/client-thedoors.jpg" > </a> </figure>
        <figure class="columns xlarge-3 small-6"> <a href="http://rhymesayers.com/" target="_blank">
          <h6>Rhyme Sayers</h6>
          <img alt="Rhyme Sayers" src="/assets/ui/client-rhymesayers.jpg" > </a> </figure>
        <figure class="columns xlarge-3 small-6"> <a href="http://amazon.com" target="_blank">
          <h6>Amazon</h6>
          <img alt="Amazon" src="/assets/ui/client-amazon.jpg" > </a> </figure>
      </div>
      <div class="columns">
        <figure class="columns xlarge-3 small-6"> <a href="http://hartwagner.com" target="_blank">
          <h6>Hart Wagner</h6>
          <img alt="Hart Wagner" src="/assets/ui/client-hartwagner.jpg" > </a> </figure>
        <figure class="columns xlarge-3 small-6"> <a href="https://twitter.com/E40" target="_blank">
          <h6>E-40</h6>
          <img alt="E-40" src="/assets/ui/client-E40.jpg" > </a> </figure>
        <figure class="columns xlarge-3 small-6"> <a href="https://amalfisrestaurant.com/" target="_blank">
          <h6>Amalfi's Restaurant</h6>
          <img alt="ABA" src="/assets/ui/client-amalfis.jpg" > </a> </figure>
        <figure class="columns xlarge-3 small-6"> <a href="http://sandininsurance.com/" target="_blank">
          <h6>Sandin Insurance</h6>
          <img alt="Sandin Insurance" src="/assets/ui/client-sandin.jpg" > </a> </figure>
      </div>
    </div>
    <hr class="space-xl">
  </section><?php */?>
  <hr class="space-xl">
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
<?php include_once($root."/templates/footer.php"); ?>