<?php $title = "Galerij"; ?>
<?php include 'partials/header.php'; ?>

  <!-- main page row -->
  <div class="row mainpage">
    <div class="col-2 sidebar">
      RSS-FEED
    </div>
    <div class="col-10 content">

        <div class="row">
          <div class="col-12">
            <form id="upload_form" action="upload.php" method="post" enctype="multipart/form-data">
              Upload hier zelf een foto
              <input type="file" name="fileToUpload" id="fileToUpload">
              <input type="submit" value="Upload Image" name="submit">
            </form>
          </div>
        </div>
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