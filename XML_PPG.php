<?php 

	function emituj($url) {
		
		$rss = simplexml_load_file($url);
		echo '<h1>'. $rss->channel->title . '</h1>';

			foreach ($rss->channel->item as $item) {
			   echo '<h2><a href="'. $item->link .'">' . $item->title . "</a></h2>";
			   echo "<p>" . $item->pubDate . "</p>";
			   echo "<p>" . $item->description . "</p>";
			   echo "<br /><br /><br /><br /><hr />";
			} 
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>RSS Assignment_PPG</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>

	<body>
		<div>
			<h1>Vesti - Muzika RSS</h1>
			<?php  
 				$xmlDom = new DOMDocument();
				$xmlDom->load("XML_PPG.xml");
				$option = $xmlDom->getElementsByTagName("item");
				

				echo "<form method=\"post\"><select name=\"izborlista\">
				<option>Izaberi sajt</option>";
				foreach ($option as $key) {
					echo "<option value={$key->getElementsByTagName('url')->item(0)->nodeValue}>{$key->getElementsByTagName('name')->item(0)->nodeValue}</option>";
				}
				echo "</select>";
				echo '<input type="submit" name="submit" value="Pokreni" />';
				echo "</form>";

				if (isset($_POST['submit'])) { 
					if (isset($_POST['izborlista']) && $_POST['izborlista'] != "Izaberi sajt") {
						emituj($_POST['izborlista']);
					} else {
						header('Location: XML_PPG.php');
				    	exit;
					}
				}
			?>
		</div>
	</body>
</html>