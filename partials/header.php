<?php if($title != null) { $title = "Amazon"; }?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title><?php echo $title; ?></title>

  <!--  Styles  -->
  <link rel="stylesheet" href="styles/grid.css">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="stylesheet" href="styles/gamedesign.css">
  <link rel="stylesheet" href="styles/opleidingen.css">
  <link rel="stylesheet" href="styles/softwareengineer.css">
  <link rel="stylesheet" href="styles/systeembeheer.css">
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
				Verleg je eigen grenzen, niet de Amazone.
			</h1>
        </div>
        <div class="col-9"></div>
      </div>
    </div>
  </div>
 
  <!-- end big image -->