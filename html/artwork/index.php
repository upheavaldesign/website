<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php");
$artwork = json_decode(file_get_contents('../assets/data/artwork.json'), true);
?>

<section class="page-heading">
  <div class="grid-container">
    <div class="cell">
      <h1 class="title">20 years of freelance<br class="hide-for-large"> has given me<br class="show-for-large"> a<br class="hide-for-medium">
        lifetime of stories and an elastic portfolio.</h1>
    </div>
  </div>
</section>

<article class="page">

  <section class="portfolio">
    <div class="grid-container">
      <div class="grid-x">
        <?php $i = 0; ?>
        <?php foreach ($artwork as $k => $collection){ ?>  
        <?php if(isset($collection['hide'])) continue; ?> 
        <?php $path = '/assets/artwork/'.$collection['path'].'/';	?>      
        <?php	foreach ($collection['imgs'] as $key => $img):?>
        <?php	$gridSize = calcPhotoGrid(count($collection['imgs']));?>
        <div id="<?php echo ++$i; ?>" class="cell small-6 large-four <?php echo $gridSize; ?> thumb <?php echo $collection['path']; ?>">
          <div class="btn-thumb" data-path="<?php echo $path; ?>" data-slug="<?php echo $key; ?>"
            data-count="<?php echo $i; ?>">
            <figure class="frame">
              <img class="lazyload" data-src="<?php print $path.$key.'-thumb.jpg'; ?>" src="/assets/ui/pixel.png"
                alt="<?php echo $img['alt']; ?>" />
            </figure>
          </div>
        </div>
        <?php endforeach; ?>
        <?php } ?>
      </div>
    </div>
  </section>

  <div class="statement">
    <div class="grid-container">
      <div class="cell">
        <p class="hide-for-large">Workflow includes concept, photography, graphic design, and delivery of digital
          &amp; print ready assets.</p>
        <h4 class="show-for-large">Workflow includes concept, photography, graphic design,<br class="show-for-large">
          and delivery of digital
          &amp; print ready assets.</h4>
      </div>
    </div>
  </div>

</article>

<section class="directive">
  <div class="grid-container">
    <div class="cell">
      <h4 class="call">Feeling creative?</h4>
      <a class="line action" href="/contact/" title="Contact">
        Give me a Shout
      </a>
    </div>
  </div>
</section>

<?php include $root."/templates/modal.php"; ?>
<?php include_once( $root."/templates/footer.php"); ?>