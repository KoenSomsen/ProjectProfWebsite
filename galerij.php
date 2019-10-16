<?php $title = "Galerij"; ?>
<?php include 'partials/header.php'; ?>

  <!-- main page row -->
  <div class="row mainpage">
    <div class="col-2 sidebar">
      RSS-FEED
    </div>
    <div class="col-10 content">
        <!-- CONTENT HIER !!  -->
        <div class="row">
          
        <?php

            $dir = "images/galerij";
            $images = glob("$dir/*.{jpg,png,bmp}", GLOB_BRACE);

            foreach($images as $image)
            {
                //echo $image;
                $spl =  explode('/', $image);
                $fin = explode('.', $spl[count($spl)-1]);
                $alt = $fin[0];
                echo "<div class='col-3 galery_image'>";
                //echo "<img height='150' src='{$image}'/>";
                echo "<div class='img_container' alt='{$alt}' style='background-image: url({$image});'></div>";
                echo "</div>";

                
            }
        ?>
         </div>
        
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