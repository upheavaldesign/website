<?php
$site_name = 'UPHEAVAL // Design &amp; Photo';
$page_title =  ucwords(str_replace("-"," ",$parent)).' • '.$site_name;
$description = "Jeremiah Deasey works with enterprise companies and small businesses to build websites, design branding, and capture portraits.";
 /* default Open Graph image */
 $ogtag = array(
	"img" => '/assets/ui/OG-UPHEAVAL.jpg',
	"imgW" => '1200', 
	"imgH" => '630' 
);

if($parent == 'home'){
	$page_title = $site_name;
}
if($parent == 'web'){	
	$description = "Jeremiah Deasey is a web artisan with a devotion to hand-crafting web experiences in Portland, Oregon.";
} elseif($parent == 'photo'){
	$description = "Jeremiah Deasey photographs excellent commercial portraits with studio lighting.";
	$ogtag = array(
		"img" => '/assets/ui/OG-UPHEAVAL_Photo.jpg',
		"imgW" => '1088', 
		"imgH" => '710' 
	);
}elseif($parent == 'about'){
	$description = "Jeremiah Deasey is a designer and photographer who loves to create stuff, and problem solve.";
	$ogtag = array(
		"img" => '/assets/ui/OG-JeremiahDeasey.jpg',
		"imgW" => '1200', 
		"imgH" => '800' 
	);	 
} else if($parent == 'adam'){
	$page_title ='Adam Keys'.' • '.$site_name;
	$description = "Adam Keys focuses his craft within the boundaries of visual design, specializing in photo touchup and digital effects where he blends illusion with realism.";
	$ogtag = array(
		"img" => '/assets/ui/OG-AdamKeys.jpg',
		"imgW" => '1200', 
		"imgH" => '800' 
	);
} elseif($parent == 'artwork'){
	$description = "Jeremiah Deasey has 20 years of freelance with a lifetime of stories and an elastic portfolio.";
} 
?>
<title><?php echo $page_title; ?></title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, minimum-scale=1, minimal-ui"/>
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php echo $description; ?>" />
<meta name="theme-color" content="#39f">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="msapplication-TileColor" content="#39f">
<meta name="msapplication-TileImage" content="/assets/ui/favicon-144.png">
<meta name="format-detection" content="telephone=no">
<meta property="og:url" content="<?php echo $uri; ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?php echo $site_name; ?>" />
<meta property="og:title" content="<?php echo $page_title; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />
<meta property="og:image" itemprop="image" content="<?php echo $host_url.$ogtag['img']; ?>" />
<meta property="og:image:width" content="<?php echo $ogtag['imgW']; ?>" />
<meta property="og:image:height" content="<?php echo $ogtag['imgH']; ?>" />

<?php $css = ($local) ? '/assets/css/styles.css' : '/assets/css/styles-min.1560900987267.css'; ?>
<link rel="stylesheet" type="text/css"  href="<?php echo $css; ?>"/>
<link rel="Shortcut Icon" type="image/x-icon" href="/favicon.png" />
<link rel="apple-touch-icon-precomposed" href="/assets/ui/favicon-152.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ui/favicon-144.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ui/favicon-114.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ui/favicon-72.png">
<link rel="apple-touch-icon-precomposed" href="/assets/ui/favicon-57.png">
<link itemprop="thumbnailUrl" href="<?php echo $host_url.$ogtag['img']; ?>"> 
<link rel="canonical" href="<?php echo $uri; ?>">
<link type="text/plain" rel="author" href="/humans.txt">