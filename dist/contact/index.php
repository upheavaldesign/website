<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php"); ?>

<section class="statement">
    <div class="row">
      <div class="columns xlarge-10 large-11 large-centered desc">
        <h1>We practice a division of labor, <br class="show-for-large-up">to focus our craft singularly.</h1>
      </div>
    </div>
    <hr>
</section>

<article class="page <?php echo $parent; ?>">    
  <section class="row">
  <hr class="space hide-for-large-up"/> 
    <div class="columns large-6 info text-center">
      <h1 class="text-center">Jeremiah Deasey<span>Photographer &amp; Web Artisan</span></h1>      
      <hr class="space show-for-large-up"/>    
      <div class="row skills">
        <div class="columns">
          <h5>Front-End Development<span>HTML5, CSS, JS, Responsive, Grunt</span></h5>          
          <h5>Photography<span>Studio Portraits, Stock Contributor</span></h5>          
          <h5>Branding, Graphic Design<span>Photoshop, Illustrator</span></h5>                   
          <h5>Print<span>Layout, Templating, Preflight</span></h5>
        </div>
      </div>      
      <hr class="space"/>
      <?php /*?><a class="btn" href="mailto:sales@upheavaldesign.com?subject=Hello!" target="_blank" title="Email Jeremiah">Email Jeremiah</a> <?php */?>  
      <?php echo encrypt_email('btn', 'sales@upheavaldesign.com', 'Hello!', 'Email Jeremiah'); ?>   
    </div>
    <hr class="space-xl hide-for-large-up"/> 
    <hr class="hide-for-large-up"/>
    <hr class="space-xl hide-for-large-up"/> 
    <div class="columns large-6 info text-center">
        <h1 class="text-center">Adam Keys<span>Graphic Design Wizard</span></h1>			
        <hr class="space show-for-large-up"/>
        <div class="row skills">				
            <div class="columns">
                <h5>Graphic Design<span>Photoshop, 3D Rendering</span></h5>	
                <h5>Photo Retouching<span>Editing, Color Profiling, Compositing</h5>
                <h5>Photography<span>Portrait, Weddings</span></h5>	
                <h5>Print<span>Layout, Templating</span></h5>
            </div>
        </div>
        <hr class="space"/>    
        <?php echo encrypt_email('btn', 'adam@upheavaldesign.com', 'Artwork', 'Email Adam'); ?>   
    </div>
    
  </section>
  <hr class="space-xl hide-for-large-up"/> 
  <hr class="hide-for-large-up"/>
</article>
<?php include_once($root."/templates/footer.php"); ?>