<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
$artwork = json_decode(file_get_contents('../../assets/data/artwork-adam.json'), true);
?>

<section class="page-heading">
  <div class="grid-container">
    <div class="cell">
      <h1 class="title">Focusing his craft in <br>photo retouching and digital effects, <br class="show-for-large">Adam
        blends
        illusion <br class="show-for-small-only">with realism.</h1>
    </div>
  </div>
</section>

<article class="page">

  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell large-11 xlarge-12">
        <h2>Adam Keys<span>Graphic Design Wizard</span></h2>
        <hr class="space" />
        <p>Considered a graphical wizard by his peers, dual wielding magic and camera simultaneously, with an
          imagination of beastly proportions.
          Adam focuses his craft within the boundaries of visual design, specializing in photo touchup and digital
          effects where he blends illusion with realism. He authors most of our music packaging and event promotion
          graphics.
          <?php echo encrypt_email('', 'adam@upheavaldesign.com', 'Arwork', 'Email Adam'); ?></p>

        <div class="grid-x grid-margin-x">
          <div class="cell large-9">
            <ul class="skills">
              <li>
                <h5>Graphic Design<span>Photoshop, 3D Rendering</span></h5>
              </li>
              <li>
                <h5>Print<span>Layout, Templating</span></h5>
              </li>
            </ul>
          </div>
          <div class="cell large-9">
            <ul class="skills">
              <li>
                <h5>Photo Retouching<span>Editing, Color Profiling, Compositing</h5>
              </li>
              <li>
                <h5>Photography<span>Portrait, Weddings</span></h5>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <aside class="cell large-7 xlarge-6 sidebar">
        <figure class="photo"><img src="/assets/img/AdamKeys.jpg" alt="Adam Keys Portrait" /></figure>
      </aside>
    </div>
  </div>

  <hr class="space-xl">

  <section class="portfolio">
    <div class="grid-container">
      <div class="grid-x">
        <?php $path = '/assets/artwork/adam/'; $i = 0;
		foreach ($artwork as $k => $group){
			$group = $group['imgs'];
			foreach ($group as $key => $img){
			$gridSize = calcPhotoGrid(count($group));
			?>
        <div id="<?php echo ++$i; ?>" class="cell small-9 large-6 <?php echo $gridSize; ?> thumb">
          <div class="btn-thumb" data-path="<?php echo $path; ?>" data-slug="<?php echo $img; ?>"
            data-count="<?php echo $i; ?>">
            <figure class="frame">
              <img class="lazyload" data-src="<?php print $path.$img.'-thumb.jpg'; ?>" src="/assets/ui/pixel.png"
                alt="<?php echo $img; ?>" />
            </figure>
          </div>
        </div>
        <?php } } ?>
      </div>
    </div>
  </section>

</article>

<section class="directive">
  <div class="grid-container">
    <div class="cell">
      <h4 class="call">Over a decade behind<br class="hide-for-medium"> a monitor and an ear-full of hip-hop, <br
          class="show-for-large">Adam is quick to develop ideas, and he continues to <br
          class="show-for-large-only">produce illustrious artworks.</h4>
    </div>
  </div>
</section>

<?php include $root."/templates/modal.php"; ?>
<?php include_once( $root."/templates/footer.php"); ?>