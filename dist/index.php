<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php"); ?>

<section class="home">
	<figure class="hero courtroom">
	<figcaption>
		<div class="type">
			<h1>Exclusively <br class="hide-for-large-up">Criminal Defense
			<span>Licensed in <br class="hide-for-large-up">Washington &amp; Oregon</span>
			</h1>
			
		</div>
	</figcaption>
	<div id="slide" class="bg-img"><img src="/assets/img/slides/Courtroom_sm.jpg" alt="Exclusively Criminal Defense"/></div>
</figure>
	
<?php include_once( $root."/templates/awards.php"); ?>
	
<?php include_once( $root."/templates/choose.php"); ?>
	
<?php include_once( $root."/templates/practice.php"); ?>
	
</section>
<!--End of Content-->

<?php include_once( $root."/templates/footer.php"); ?>