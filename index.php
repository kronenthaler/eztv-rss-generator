<?php

include("simple_html_dom.php");

$html = file_get_html('https://eztv.io/shows/'.$_REQUEST['show']);

//header("content-type:text/xml");

echo '<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE torrent PUBLIC "-//bitTorrent//DTD torrent 0.1//EN" "http://xmlns.ezrss.io/0.1/dtd/">
<rss version="2.0">
	<channel>
		<title>ezRSS - Search Results</title>
		<description>Custom RSS feed based off search filters.</description>';

foreach($html->find('a') as $element) {
	if($element->class == 'magnet'){//download_1
		echo "<item>";
		echo '<title><![CDATA['.$element->parent()->prev_sibling()->first_child()->title.']]></title>
			<link><![CDATA['.$element->href.']]></link>';
		echo "</item>";
	}
}

echo '</channel>
</rss>';
