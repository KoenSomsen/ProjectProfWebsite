<?php $title = "Galerij"; ?>
<?php include 'partials/header.php'; ?>

  <!-- main page row -->
  <div class="row mainpage">
    <div class="col-2 sidebar">
      <?php include "partials/rss.php"; ?>
    </div>
    <div class="col-10 content">
        <?php
        if(isset($_GET["error"])) {
          //Error is set.
          $error = "";
          switch($_GET["error"]) {
            case "noimg":
              $error = "Er is geen image gevonden";
              break;
            case "fileexists":
              $error = "Er is al een bestand met het zelfde naam";
              break;
            case "filesize":
              $error = "Het bestand mag niet groter zijn dan 2.5mb";
              break;
            case "filetype":
              $error = "Het bestand is geen .png, .jpeg, .jpg of .gif";
              break;
          }
            echo "
            <div class='row'>
              <div class='col-12'>
                <div class='error'>".$error."</div>
              </div>
            </div>
            ";

        }

        if(isset($_GET["success"])) {
          echo 
          "
          <div class='row'>
            <div class='col-12'>
              <div class='success'>Het bestand is toegevoegd aan de galerij.</div>
            </div>
          </div>
          ";
        }

        ?>
        <div class="row">
          <div class="col-2">
            <form action="php/uploadimage.php" method="POST" enctype="multipart/form-data">
              <input type="file" name="image" />
              <input type="submit" name="submit"/>
            </form>
          </div>
        </div>

        
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
              echo "<div class='img_container' title='{$alt}' alt='{$alt}' style='background-image: url({$image});'></div>";
              echo "</div>";
          }
        ?>
        </div>
        <!-- END CONTENT -->
    </div>
  </div>
  <!-- end main page row -->
 <?php include 'partials/footer.php'; ?>

  <script src="scripts/index.js"></script>
</body>

</html>