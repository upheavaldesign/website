<?php
$page_title = ($parent == '') ?
'UPHEAVAL | Design &amp; Photo'
: ucwords(str_replace("-"," ",$parent)).' // UPHEAVAL' ;

$description = "We love to create stuff, and problem solve. Let's collaborate, or conspire.";
$img = '/assets/ui/OpenGraph.jpg';  /* default image */

if($parent == 'photo'){ 
	$description = "Photographing professional portraits, creative musicians, and occasional weddings near Portland, Oregon.";
}elseif($parent == 'about'){
	if($cur_dir == 'jeremiah'){
		$page_title ='Jeremiah Deasey // UPHEAVAL';
		$description = "Jeremiah Deasey is a web artisan, and photographer in Portland, Oregon";
	} else if($cur_dir == 'adam'){
		$page_title ='Adam Keys // UPHEAVAL';
		$description = "Adam Keys focuses his craft within the boundaries of visual design, specializing in photo touchup and digital effects where he blends illusion with realism.";		
	} else {
		$description = "Jeremiah & Adam are creative comrades with a cultivated history of digital craft. Longtime friends and conspirators, they share a passion to inspire change through distinguished creativity.";
	}
} elseif($parent == 'web'){ 
	$description = "Jeremiah Deasey is a web artisan, with a devotion to hand crafting web experiences in Portland, Oregon"; 
} elseif($parent == 'artwork'){ 
	$description = "Graphic Design: Focusing his craft in photo retouching and digital effects, Adam Keys blends illusion with realism."; 
}
?>
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="<?php echo 'http://'.$uri; ?>">

<link rel="Shortcut Icon" type="image/x-icon" href="/favicon.png" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<link rel="apple-touch-icon-precomposed" href="/assets/ui/favicon-152.png">
<meta name="msapplication-TileColor" content="#39f">
<meta name="msapplication-TileImage" content="/assets/ui/favicon-144.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ui/favicon-144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ui/favicon-114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ui/favicon-72.png">
<link rel="apple-touch-icon-precomposed" href="/assets/ui/favicon-57.png">

<meta property="og:description" content="<?php echo $description; ?>"/>
<meta property="og:image" content="<?php echo 'http://'.$_SERVER['HTTP_HOST'].$img; ?>"/>
<meta property="og:url" content="<?php echo 'http://'.$uri; ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:site_name" content="UPHEAVAL | Design &amp; Photo"/>
<meta property="og:title" content="<?php echo $page_title; ?>"/>