<!DOCTYPE html>
<html lang="en">

<head>

  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>School project template</title>

  <!--  Styles  -->
  <link rel="stylesheet" href="styles/grid.css">
  <link rel="stylesheet" href="styles/index.css">

</head>

<body>
  <!-- header row -->
  <div class="row">
    <div class="col-12 header bg-white">
      <div class="row">
        <div class="col-2 logo">
          <!-- <img src="https://s.s-bol.com/imgbase0/imagebase3/large/FC/3/9/8/0/9200000013300893.jpg" /> -->
          <p>AMAZON</p>
        </div>
        <div class="col-10 navbar">
          <ul>
            <li><a class="active fnt-black" href="#home">Home</a></li>
            <li><a href="#opleidingen" class="fnt-black">Opleidingen</a></li>
            <li><a href="#galerij" class="fnt-black">Galerij</a></li>
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
        <div class="col-1">
          <h1 class="white fnt-white">Innovative, blabla, more blabla</h1>
        </div>
        
      </div>
    </div>
  </div>
  <!-- end big image -->
  <!-- main page row -->
  <div class="row mainpage">
    <div class="col-2 sidebar">
      RSS-FEED
    </div>
    <div class="col-10 content">
        <!-- CONTENT HIER !!  -->
        
        <?php

            $dir = "images/galerij";
            $images = glob("$dir/*.{jpg,png,bmp}", GLOB_BRACE);

            foreach($images as $image)
            {
                //Image accessor.
                echo "<div class='row'>";

                echo $image;

                echo "</div>";
            }

        ?>
         
        <?php

        ?>
        
        
        <!-- END CONTENT -->
    </div>
  </div>
  <!-- end main page row -->
  <!-- Footer -->
  <div class="row footer bg-midgreen fnt-white">
    <div class="col-3">
      <!-- Lege placeholder -->
    </div>
    <div class="col-6">
      Copyright 2019 Amazon hogeschool
    </div>
    <div class="col-3">
      <!-- Lege placeholder -->
    </div>
  </div>
  <!-- end footer -->

  <script src="scripts/index.js"></script>
</body>

</html>