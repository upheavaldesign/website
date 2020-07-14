<?php
function url_origin( $s, $use_forwarded_host = false )
{
    $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
    $sp       = strtolower( $s['SERVER_PROTOCOL'] );
    $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
    $port     = $s['SERVER_PORT'];
    $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
    $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
    $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
    return $protocol . '://' . $host;
}
function full_url( $s, $use_forwarded_host = false )
{
    return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
}

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

function getJSONData($JSON)
{
	if (isset($JSON)) {		
		/*get JSON data*/
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
		}
		/*format JSON data*/
		return json_decode($data, true);
	} else {
		/*if JSON does not exist, reload Home index*/
		return "Sorry, JSON could not be loaded";
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

function calcPhotoGrid($count)
{
    if ($count === 3) {
        return 'xlarge-third';
    } else if($count <= 4){
		return 'xlarge-four';
	} else if($count == 5){
		return 'xlarge-five';
	} else if($count >= 6){
		return 'xlarge-3';
	}
}

$domain = "//{$_SERVER['HTTP_HOST']}";
$uri = full_url( $_SERVER );
$local = (strrpos($uri, ".local") !== false) ? true : false;
$host_url = ($local !== false) ? $_SERVER['HTTP_HOST'] : 'https://'.$_SERVER['HTTP_HOST'];

/*get directory*/
$parent = ( basename(dirname($_SERVER['PHP_SELF'])) == '' ? 'home' : basename(dirname($_SERVER['PHP_SELF'])) );
$cur_url = basename($_SERVER['PHP_SELF']); /*is index page?*/

/* GA Tracking ID */
$GA_ID = 'UA-5764394-1';
?>