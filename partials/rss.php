<div class="rss-box">
	<?php 
		$feed  = "http://feeds.feedburner.com/tweakers/mixed";
		$xml = simplexml_load_file($feed);
		$xml2 = simplexml_load_file($feed);
		foreach ($xml->channel->item as $item2){
			echo "<div class='filler'>"; // volledige blok

			echo "<div class='kleur-fontSize'>" .$item2->title . "</div><br>";
                      
			echo  "<div class='color'>" . $item2->description . "</div><br>";
				
			echo  "<div class='color2'>" . $item2->pubDate . "</div><br><br>";

			echo "</div>"; //einde volledige blok
		}               
	?>
</div>