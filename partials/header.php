<?php 
if($title != null) { $title = "Amazon"; }

$quotes = ["Als je wilt leren, geef dan les","Leren zonder te denken is ijdel. Denken zonder te leren is gevaarlijk","Wie criticus wil worden, moet eerst naast de bal leren slaan","De beste manier om iets te leren is er les in te geven","Wat men moet leren doen, leert men door het te doen","Als je leert motiveren, zul je leren dat leren motiveert", "Het brein is als een parachute, het werkt alleen als het open staat", "Hoe meer ik leer, hoe meer ik weet", "Het is leuk om dingen niet te kunnen, want dan kun je iets nieuws leren"];
$quote = $quotes[array_rand($quotes)];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title><?php echo $title; ?></title>

  <!--  Styles  -->
  <link rel="stylesheet" href="styles/grid.css">
  <link rel="stylesheet" href="styles/<?php if (!empty($_GET['dark'])){echo 'indexdark.css';}else{echo'index.css';} ?>">
  <link rel="stylesheet" href="styles/gamedesign.css">
  <link rel="stylesheet" href="styles/opleidingen.css">
  <link rel="stylesheet" href="styles/softwareengineer.css">
  <link rel="stylesheet" href="styles/systeembeheer.css">
  <link rel="stylesheet" href="styles/galerij.css">
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/security.css">
	<?php include 'images/favicon/favicon.htm'; ?>
</head>

<body>
  <!-- header row -->
  <div class="row">
    <div class="col-12 header bg-white">
      <div class="row">
        <div class="col-2 logo">
          <img id="logo" src="images/logo.svg" alt="Logo Amazon Hogeschool"/>
        </div>
        <div class="col-10 navbar">
          <ul>
            <li><a class="active fnt-black" href="index.php">Home</a></li>
            <li><a href="opleidingen.php" class="fnt-black">Opleidingen</a></li>
            <li><a href="galerij.php" class="fnt-black">Galerij</a></li>
            <li><a href="#inschrijven" class="fnt-black">Inschrijven</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- end header -->
  <!-- Big image -->
  <div class="row">
    <div class="col-12 bigimage">
      <div class="row">
		<div class="col-1">
          <!-- Place holder -->
        </div>
        <div class="col-2">
			<h1 class="white fnt-white">
				<?php echo $quote; ?>
			</h1>
        </div>
        <div class="col-9"></div>
      </div>
    </div>
  </div>
 
  <!-- end big image -->