<?php $root = $_SERVER['DOCUMENT_ROOT'];
include_once( $root."/templates/header.php"); ?>

<section class="statement">
    <div class="row">
        <div class="columns xxlarge-12 xlarge-10 large-11 large-centered desc">
           <div class="show-for-xlarge-up">
                <h1>Internets Error</h1>
            </div>            
        </div>        
    </div>
    <hr>
</section>

<article class="page <?php echo $parent; ?>">

	<section class="row">
		<div class="columns large-9 large-centered">
			<h1>Bammer!</h1>
			<hr class="space show-for-large-up"/>
			<h4>Sometimes the internets has misinformation. Use the navigation above to learn more about us, and check out our work.</h4>
			<hr class="space show-for-large-up"/>
			
		</div>		
	</section>
    
</article>

<?php include_once($root."/templates/footer.php"); ?>