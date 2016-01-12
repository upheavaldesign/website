<?php 
$ext = pathinfo($_SERVER['SERVER_NAME'], PATHINFO_EXTENSION);
$dev = ($ext == 'local') ? true : false;
$parent = basename(dirname($_SERVER['PHP_SELF'])); /*get directory*/
$cur_url = basename($_SERVER['PHP_SELF']); /*is index page?*/
$cur_class = 'current';
$uri = htmlspecialchars("$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", ENT_QUOTES, 'UTF-8');
$data;

function auto_copyright($year = 'auto'){
	if(intval($year) == 'auto'){ $year = date('Y'); }
	if(intval($year) == date('Y')){ echo intval($year); } 
	if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } 
	if(intval($year) > date('Y')){ echo date('Y'); }
}

function getProjectUri()
{
	$basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';		
	$uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));  
	if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
	$route = trim($uri, '/');		
	return $route;
}	

function getJSON($JSON)
{
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, $JSON);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 20);
	curl_setopt ($ch, CURLOPT_TIMEOUT, 10);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	if (curl_errno($ch)) {
		echo curl_error($ch);
		echo "\n<br />";
		$data = '';
	} else {
		curl_close($ch);
		return json_decode($data, true);
	}
}	

function searchArray($needle, $haystack, $strict = false) {
	foreach ($haystack as $item) {
		if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && searchArray($needle, $item, $strict))) {
				return true;
		}
	}
	return false;
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
<body id="<?php echo $parent; ?>">
<?php include_once( $root."/templates/nav.php"); ?>
