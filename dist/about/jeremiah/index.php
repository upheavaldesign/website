<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php"); ?>

<article class="page <?php echo $parent; ?>">
	<hr class="space show-for-large-up"/>
  <div class="row">
    <article class="columns large-8">
      <h1>Jeremiah Deasey<span>Photographer &amp; Designer</span></h1>      
      <hr class="space show-for-large-up"/>
      <p>I believe in quality craftsmanship. Each of my projects are unique. My approach is objective, diligent, meticulous, and driven. Developing functional solutions that meet/exceed modern standards in design, I take pride in all projects, and will work hard to make certain that you do as well.</p>
			<p>Typically, I create for small and medium businesses, and I also collaborate with various design agencies. I enjoy jumping into a team effort, lending support as a motivated freelancer.</p>
			<p>Just as you choose a designer, I select my clients, and accept projects that are exciting. Expect a high standard of work, and glowing enthusiasm to create something great. <?php echo encrypt_email('', 'sales@upheavaldesign.com', 'Hello!', 'Give me a shout!'); ?></p>
      <hr class="space show-for-large-up"/>
      <div class="row skills">
        <div class="columns large-6">
          <h5>Front-End Development<span>HTML5, CSS, JS, Responsive, Grunt</span></h5>
          <h5>Server-Side Programming<span>MVC, PHP, WordPress</span></h5>
          <h5>Visual Design &amp; UI<span>Styling, Interactive, Components</span></h5>
        </div>
        <div class="columns large-6">
          <h5>Branding, Graphic Design<span>Photoshop, Illustrator</span></h5>
          <h5>Photography<span>Studio Portraits, Stock Contributor</span></h5>
          <h5>Print<span>Layout, Templating, Preflight</span></h5>
        </div>
      </div>
    </article>
    <aside class="columns large-4 sidebar">
      <hr class="space show-for-large-up"/>
      <figure class="photo"> <img src="/assets/img/JeremiahDeasey.jpg" alt="Jeremiah Deasey Portrait"/> </figure>
      <blockquote class="hanger">
        <h5>Every day is a fresh chance to strike mediocrity, and craft a change in tomorrow.</h5>
      </blockquote>
    </aside>
  </div>
  
  <section class="partners">
    <hr class="xl">
    <div class="row">
      <div class="columns small-11 large-10 small-centered desc">
        <h3>Esteemed Partnerships</h3>
        <p>Past efforts, across industries, have allowed me to collaborate with some great folks through the years.</p>
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
  </section>
</article>
<section class="block">
<div class="row">
  <div class="columns xxlarge-8 xlarge-10  large-9 large-centered desc">
    <h3>A diverse skillset has been one of my greatest assets, an expanding range of creativity, capable of delivering concept to production.</h3>
    <hr>
    <h2><?php echo encrypt_email('line', 'sales@upheavaldesign.com', 'Hello!', 'Email Jeremiah', '<i></i>'); ?></h2>
  </div>
</div>
</section>
<?php include_once($root."/templates/footer.php"); ?>