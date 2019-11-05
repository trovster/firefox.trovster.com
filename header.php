<?php
if(isset($_GET['section']))
{
	$section = rtrim($_GET['section'], '/');
	$section_output = ucwords(str_replace('-',' ',$section));
	$title = $section_output.' | ';
}
else
{
	$section = 'homepage';
	$title = '';
}
$title .= 'Firefox: Rediscover The Web';

$filler = '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec risus. Aliquam eleifend lorem ut turpis.
Nam diam. Sed rhoncus, tellus id fringilla porta, enim libero porttitor arcu, a laoreet massa magna luctus leo. Vestibulum
ipsum purus, gravida sit amet, pulvinar eget, ultrices vitae, sapien. Praesent semper elementum lacus. Ut pharetra cursus risus.
Nunc sodales, orci eget egestas semper, dolor neque semper nisl, ac dignissim ipsum tortor ac purus. Lorem ipsum dolor sit amet,
consectetuer adipiscing elit. Cras leo justo, tempor sit amet, euismod sodales, blandit nec, lorem. Nulla ac tellus
vitae diam pulvinar laoreet.</p>';

require_once('includes/mimetype.php');

echo "\n".'<head>'."\n\n";

echo '<title>'.$title.'</title>'."\n\n";

echo '<!-- meta http-equiv -->'."\n";
echo '<meta http-equiv="content-type" content="'.$mime.'; charset='.$charset.'" />'."\n";
echo '<meta http-equiv="content-language" content="en-uk" />'."\n\n";

echo '<!-- meta name -->'."\n";
echo '<meta name="author" content="Trovster [Trevor Morris]" />'."\n";
echo '<meta name="copyright" content="Trevor Morris '.date('Y',time('NOW')).'" />'."\n";
echo '<meta name="keywords" content="Firefox, extensions" />'."\n";
echo '<meta name="description" content="Firefox and other alternatives to Internet Explorer for more secure and efficient web browsing." />'."\n";
echo '<meta name="robots" content="index,follow" />'."\n";
?>

<!-- default relative link -->
<base href="/" />

<!-- link stylesheets-->
<link rel="stylesheet" type="text/css" href="/styles/white.css" media="screen" title="All White" />
<link rel="stylesheet" type="text/css" href="/styles/print.css" media="print" />
<link rel="stylesheet" type="text/css" href="/styles/handheld.css" media="handheld" />

<!-- alternative stylesheets -->
<link rel="alternate stylesheet" type="text/css" href="/styles/funky.css" media="screen" title="Funky Blue" />
<link rel="alternate stylesheet" type="text/css" href="/styles/left.css" media="screen" title="You've Left Me!" />
<link rel="alternate stylesheet" type="text/css" href="/styles/funky_left.css" media="screen" title="You've Left Me Funky Blue!" />

<!-- javascript, pesky javascript -->


<!-- icon! copyright Mozilla Organisation -->
<link rel="icon" href="/images/firefox_icon.png" type="image/png" />

</head>

<body>

<ul class="hidden">
<li><a href="#" title="Skip straight to the main content area on the current page" tabindex="1">Skip To Content</a></li>
<li><a href="#" title="Skip straight to the footer information on this page">Skip To Footer</a></li>
</ul>

<h1><a href="/" title="Lost? This'll take you back to the homepage!">Firefox</a></h1>

<p id="tagline">Rediscover The Web</p>

<!--[if IE]>
<p id="noie"><a href="http://www.getfirefox.com" title="Get Firefox NOW!">Stop using IE. Get FireFox!</a></p>
<![endif]-->

<ul id="navigation">
<li<?php if($section=='about'){echo ' id="active"';}?>><a href="/about/" title="Information about the Mozilla Firefox web browser." tabindex="2">About</a></li>
<li<?php if($section=='why'){echo ' id="active"';}?>><a href="/why/" title="Reasons why you should use the Firefox, especially instead of Microsoft Internet Explorer." tabindex="3">Why?</a></li>
<li<?php if($section=='customise'){echo ' id="active"';}?>><a href="/customise/" title="My recommendations of numerous different Firefox extensions that complement and extend the browser to personal requirements." tabindex="4">Customise</a></li>
<li<?php if($section=='links'){echo ' id="active"';}?>><a href="/links/" title="Explore the whole Firefox community." tabindex="5">Links</a></li>
</ul>

<div id="content">
