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
		<title>Rss_zadatak_Miroslav_Kalinov</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<div>
			<h1>Horoskop</h1>
			<?php  
 				$xmlDom = new DOMDocument();
				$xmlDom->load("horoskop.xml");
				$option = $xmlDom->getElementsByTagName("item");
		echo "<form method=\"post\"><select name=\"izborhoroskopa\">
				<option>Izaberi horoskop</option>";
				foreach ($option as $key) {
		echo "<option value={$key->getElementsByTagName('url')->item(0)->nodeValue}>{$key->getElementsByTagName('name')->item(0)->nodeValue}</option>";
				}
		echo "</select>";
		echo '<input type="submit" name="submit" value="Start" />';
		echo "</form>";
				if (isset($_POST['submit'])) { 
					if (isset($_POST['izborhoroskopa']) && $_POST['izborhoroskopa'] != "Izaberi horoskop") {
						emituj($_POST['izborhoroskopa']);
					} else {header('Location: Rss_zadatak_Miroslav_Kalinov.php');exit;
					}
				}
			?>
		</div>
	</body>
</html>