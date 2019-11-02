<?php
require_once('header.php');

if($section=='homepage')
{
	require_once('pages/index.php');
}
elseif($section=='about')
{
	require_once('pages/about.php');
}
elseif($section=='why')
{
	require_once('pages/why.php');
}
elseif($section=='customise')
{
	require_once('pages/customise.php');
}
elseif($section=='links')
{
	require_once('pages/links.php');
}
else
{
	echo '<p>Oops, 404!</p>';
}

require_once('footer.php');
?>