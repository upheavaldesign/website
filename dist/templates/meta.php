<?php
$page_title = ($parent == '') ?
'UPHEAVAL | Design &amp; Photo'
: ucwords(str_replace("-"," ",$parent)).' • UPHEAVAL | Design &amp; Photo' ;

$description = "Upheaval Design has been setting standards for over a decade in Portland, Oregon.";
$img = '/assets/img/UPHEAVAL.jpg';  /* default image */

if($parent == 'photo'){ 
	$description = "Photographing professional portraits, creative musicians, and occasional weddings near Portland, Oregon.";
	//$img = '/assets/img/treatment_01.png';
}elseif($parent == 'about'){ 
	$description = "";
	$img = '/assets/img/JeremiahDeasey.jpg'; 
} elseif($parent == 'web'){ 
	$description = "Crafting interactive web interfaces in Portland, Oregon";
	//$img = $root.'/assets/img/MediaPhoto.jpg'; 
}elseif($parent == 'contact'){ 
	$description = "";	
	$img = '/assets/img/Portland.jpg';
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