<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php"); ?>

<section class="page-heading">
  <div class="grid-container">
    <div class="cell">
      <h1 class="title">I work &amp; play in Portland, Oregon.<br class="show-for-large"> Join me.</h1>
    </div>
  </div>
</section>

<article class="page">
  <section class="grid-container">
    <div class="cell info text-center">
      <h2>Jeremiah Deasey<span>Photographer &amp; Designer</span></h2>
      <hr class="space show-for-large" />
      <div class="grid-container">
        <ul class="skills">
          <li>
            <h5>Front-End & Back-End Development<span>HTML5, JS, Sass, Grunt, Git, Wordpress</span></h5>
          </li>
          <li>
            <h5>Photography<span>Commercial Portraits, Stock Contributor</span></h5>
          </li>
          <li>
            <h5>Branding, Graphic Design<span>Photoshop, Illustrator, Figma</span></h5>
          </li>
          <li>
            <h5>Print, Publishing<span>Layout, Templating, Packaging</span></h5>
          </li>
        </ul>
      </div>
      <hr class="space" />      
      <?php echo encrypt_email('btn', 'sales@upheavaldesign.com', 'Hello!', 'Email Jeremiah'); ?>
    </div>
  </section>
</article>
<?php include_once($root."/templates/footer.php"); ?>