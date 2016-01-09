<?php 
	$ext = pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION);
	$dev = ($ext == 'local') ? true : false;
	$parent = basename(dirname($_SERVER['PHP_SELF']));
	$cur_url = basename($_SERVER['PHP_SELF']);
	$cur_class = 'current';
	$uri = htmlspecialchars("$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", ENT_QUOTES, 'UTF-8');
	
	function auto_copyright($year = 'auto'){
		if(intval($year) == 'auto'){ $year = date('Y'); }
		if(intval($year) == date('Y')){ echo intval($year); } 
		if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } 
		if(intval($year) > date('Y')){ echo date('Y'); }
	}
?>
<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, minimum-scale=1, minimal-ui"/>
<meta name="author" content="UPHEAVAL, http://upheavaldesign.com" />
<link type="text/plain" rel="author" href="/humans.txt">
<?php $css = ($dev) ? '/assets/css/style.css' : '/assets/css/style.min.css'; ?>
<link rel="stylesheet" type="text/css"  href="<?php echo $css; ?>"/>
<?php include_once( $root."/templates/meta.php"); ?>
</head>
<body>
<?php include_once( $root."/templates/nav.php"); ?>