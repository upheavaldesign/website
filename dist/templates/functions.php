<?php
$uri = htmlspecialchars("$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", ENT_QUOTES, 'UTF-8');
/*if domain is local, $dev is true*/
$dev = (strrpos($uri, ".local") !== false) ? true : false;
/*get parent directory*/
$parent = explode('/', $_SERVER['REQUEST_URI']); $parent = $parent[1];
/*get directory*/
$cur_dir =
( basename(dirname($_SERVER['PHP_SELF'])) == '' ? 'home' : basename(dirname($_SERVER['PHP_SELF'])) );
$data;

//is the domain secure?
$isSecure = false;
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $isSecure = true;
}
elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
    $isSecure = true;
}
$REQUEST_PROTOCOL = $isSecure ? 'https' : 'http';


function auto_copyright($year = 'auto'){
	if(intval($year) == 'auto'){ $year = date('Y'); }
	if(intval($year) == date('Y')){ echo intval($year); }
	if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
	if(intval($year) > date('Y')){ echo date('Y'); }
}

function encrypt_email($class, $email, $subject, $title, $child = ''){
  if($subject){ $subject = "?subject=".$subject; }
  $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';
  $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999);
  for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])];
  $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";';
  $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';
  $script.= 'document.getElementById("'.$id.'").innerHTML="<a class=\"'.$class.'\" target=\"_blank\" href=\\"mailto:"+d+"'.$subject.'\\" title=\"'.$title.'\"><span>'.$title.'</span>'.$child.'</a>"';
  $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")";
  $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>';
  return '<span id="'.$id.'">[javascript protected email address]</span>'.$script;
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