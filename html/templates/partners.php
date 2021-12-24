<section class="grid-container partners">
	<div class="statement">
		<div class="cell">
			<h3>Esteemed Partnerships</h3>
			<p>Design and photography have allowed me to collaborate with some great folks<br class="hide-for-large"> throughout the years.</p>
		</div>
	</div>

	<?php $partners = array(		
		'istock' => array('name' => 'iStock Photo', 'url' => 'https://istockphoto.com'),
		'adidas' => array('name' => 'Adidas', 'url' => 'http://adidas.com/us/'),		
		'amazon' => array('name' => 'Amazon', 'url' => 'https://smile.amazon.com'),
		'microsoft' => array('name' => 'Microsoft', 'url' => 'https://www.microsoft.com/en-us/'),
		'rhymesayers' => array('name' => 'Rhyme Sayers', 'url' => 'https://rhymesayers.com/releases/bloody-radio'),
		'thedoors' => array('name' => 'The Doors', 'url' => 'http://thedoors.com/'),
		'e40' => array('name' => 'E-40', 'url' => 'https://twitter.com/E40'),
		'diesel' => array('name' => 'Diesel', 'url' => 'https://shop.diesel.com/'),		
		'thesource' => array('name' => 'The Source Magazine', 'url' => 'http://thesource.com/'),
		'drx_romanelli' => array('name' => 'Drx Romanelli', 'url' => 'https://drromanelli.com/', 'classes' => 'show-for-large'),
		'hartwagner' => array('name' => 'Hart Wagner, Trial Attorneys', 'url' => 'https://www.hartwagner.com'),	
		'amalfis' => array('name' => 'Amalfi\'s Restaurant', 'url' => 'https://www.amalfisrestaurant.com/'),		
		'benish' => array('name' => 'Benish Design', 'url' => 'https://benishdesign.com/'),
		'sandin' => array('name' => 'Sandin Insurance', 'url' => 'https://www.sandininsurance.com/'),
		'rivercitymedia' => array('name' => 'River City Media', 'url' => 'https://www.rivcitymedia.com/'),	
		'goldentongue' => array('name' => 'Golden Tongue', 'url' => 'https://www.goldentongue.com')
	); ?>

	<div class="grid-x grid-padding-x small-up-3 large-up-4">
		<?php foreach($partners as $k => $partner): ?>
		<figure class="cell partner <?php if(isset($partner['classes'])) echo $partner['classes']; ?>"> <a href="<?php echo $partner['url']; ?>" target="_blank"  rel="noopener">
				<img alt="<?php echo $partner['name']; ?>" src="/assets/img/partners/<?php echo $k; ?>.jpg"></a>
		</figure>
		<?php endforeach; ?>
	</div>

</section>