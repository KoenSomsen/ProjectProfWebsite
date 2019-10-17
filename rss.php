<?php $title = "homepage"; ?>
<?php include 'partials/header.php'; ?>

  <!-- main page row -->
  <div class="row mainpage">
    <div class="col-2 sidebar">
		<?php 
			$feed  = "http://feeds.feedburner.com/tweakers/mixed";
			$xml = simplexml_load_file($feed);
			$xml2 = simplexml_load_file($feed);
			foreach ($xml->channel->item as $item2){
				echo "<div class='filler'>"; // volledige blok

				echo "<div class='kleur fontSize'>" .$item2->title . "</div><br>";
                      
				echo  "<div class='color'>" . $item2->description . "</div><br>";
				
				echo  "<div class='color'>" . $item2->pubDate . "</div><br><br>";

				echo "</div>"; //einde volledige blok
			}               
		?>
    </div>
    <div class="col-10 content">
      <!-- CONTENT HIER !!  -->
      <div class="row">

        <div class="col-3 card">
          <div class="card_title">Vind jouw opleiding</div>
          <p>Maak een keuze uit één of meer van onze opleidingen</p>
        </div>
        <div class="col-3 card">
          <div class="card_title">Inschrijven: hoe doe je dat?</div>
          <p>Met een inschrijving zet je de eerste stap richting jouw studie bij Amazon Hogeschool.</p>
        </div>
        <div class="col-3 card">
          <div class="card_title">Informatie avonden</div>
          <p>Kom naar onze Informatie avond over de opleidingen van Amazon Hogeschool op dinsdag 26 november.</p>
        </div>
        <div class="col-3 card">
          <div class="card_title">Hulp bij opleiding kiezen</div>
          <p>Wij helpen je graag om de opleiding te vinden die jou op het lijf geschreven is.</p>
        </div>

      </div>
      <div class="row">
        <div class="col-5 card">
          <h1>Amazon hogeschool. Grensverleggend!</h1>
          <p>Door je grenzen te verleggen bereik je meer. Daarom dagen onze docenten je iedere dag uit je talenten te ontdekken en te ontwikkelen. Deze ontdekkingsreis overstijgt de grenzen van je opleiding. Je doet namelijk ook kennis op bij andere opleidingen en zelfs buiten de muren van onze hogeschool. Onze campussen vind je in Noord-Nederland en in het buitenland. Van Leeuwarden tot Zuid-Afrika; de wereld ligt aan je voeten.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end main page row -->
  <?php include 'partials/footer.php'; ?>
  <script src="scripts/index.js"></script>
</body>
</html>