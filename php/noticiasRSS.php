<?php
if(isset($_GET["q"])){
	$q = $_GET["q"];

	if ($q=="portada") {
		$xml = "https://www.reforma.com/rss/portada.xml";
	} elseif ($q=="negocios") {
		$xml = "https://www.reforma.com/rss/negocios.xml";
	} elseif ($q=="ciudad") {
		$xml = "https://www.reforma.com/rss/ciudad.xml";
	} elseif ($q=="cultura") {
		$xml = "https://www.reforma.com/rss/cultura.xml";
	} elseif ($q=="gadgets") {
		$xml = "https://www.reforma.com/rss/gadgets.xml";
	}
	print "<h2>".$q."</h2>";
	$xmlDoc = new DOMDocument();
	$xmlDoc->load($xml);

	//contenido en <channel>
	$channel = $xmlDoc->getElementsByTagName("channel")->item(0);
	$channel_title = $channel->getElementsByTagName("title")->item(0)->childNodes->item(0)->nodeValue;
	$channel_link = $channel->getElementsByTagName("link")->item(0)->childNodes->item(0)->nodeValue;
	$channel_desc = $channel->getElementsByTagName("description")->item(0)->childNodes->item(0)->nodeValue;

	//desplegamos los elementos
	print "<p><a href='".$channel_link."'>".$channel_title."</a>";
	print "<br>";
	print $channel_desc."</p>";

	//difentes noticias o items
	$x=$xmlDoc->getElementsByTagName("item");
	for ($i=0; $i < $x->length ; $i++) {
		$item_title = $x->item($i)->getElementsByTagName("title")->item(0)->childNodes->item(0)->nodeValue;
		$item_link = $x->item($i)->getElementsByTagName("link")->item(0)->childNodes->item(0)->nodeValue;
		$item_desc = $x->item($i)->getElementsByTagName("description")->item(0)->childNodes->item(0)->nodeValue;
		//
		print "<p><a href='".$item_link."'>".$item_title."</a>";
		print "<br>";
		print $item_desc."</p>";
	}
}
?>