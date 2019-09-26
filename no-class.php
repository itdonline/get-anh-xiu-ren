<?php
if(isset($_GET['url']) && !empty($_GET['url']))
{
	$url = $_GET['url'];
	$content = file_get_contents($url);
	$a = explode( '<div class="post">' , $content );
	$b = explode("</div>" , $a[1] );
	$data = $b[0];
	if(preg_match_all('/<a\s+href=["\']([^"\']+)["\']/i', $data, $links, PREG_PATTERN_ORDER))
		$all_hrefs = array_unique($links[1]);
	foreach($all_hrefs as $href)
	{
		echo $href."\n";
	}
}
else
{
	die("WTF??");
}
