<?php 
include_once( $root.'/templates/functions.php' );
?>
<!DOCTYPE html>
<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1, minimum-scale=1, minimal-ui"/>
<meta name="author" content="UPHEAVAL" />
<link type="text/plain" rel="author" href="/humans.txt">
<?php $css = ($dev) ? '/assets/css/style.css' : '/assets/css/style-min.1465403434098.css'; ?>
<link rel="stylesheet" type="text/css"  href="<?php echo $css; ?>"/>
<?php include_once( $root."/templates/meta.php"); ?>
<script>
document.documentElement.className += 'wf-loading';
  (function(d) {
    var config = {
      kitId: 'frf6nji',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
</head>
<body id="<?php echo $parent; ?>">
<?php include_once( $root."/templates/nav.php"); ?>