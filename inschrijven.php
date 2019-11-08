<?php $title = "Homepagina"; ?>
<?php include 'partials/header.php'; ?>

  <!-- main page row -->
  <div class="row mainpage">
    <div class="col-2 sidebar">
		<?php include "partials/rss.php"; ?>
    </div>
    <div class="col-10 content">
      <!-- CONTENT HIER !!  -->
      <div class="row">
        <div class="col-6 card">
          <?php
    if (isset($_POST["submit"]))
    {
      $uploadOk = true;
      if (empty($_POST["vNaam"]))
      {
        echo "<style type='text/css'> input[name=vNaam]{border: solid 1px red;}</style>";
        $uploadOk = false;
      }
      if (empty($_POST["aNaam"]))
      {
        echo "<style type='text/css'> input[name=aNaam]{border: solid 1px red;}</style>";
        $uploadOk = false;
      }
      if (empty($_POST["vNaam"]))
      {
        echo "<style type='text/css'> input[name=vNaam]{border: solid 1px red;}</style>";
        $uploadOk = false;
      }
      if (empty($_POST["mail"]))
      {
        echo "<style type='text/css'> input[name=mail]{border: solid 1px red;}</style>";
        $uploadOk = false;
      }
      if (empty($_POST["landCode"]))
      {
        echo "<style type='text/css'> input[name=landCode]{border: solid 1px red;}</style>";
        $uploadOk = false;
      }
      if (empty($_POST["telefoon"]))
      {
        echo "<style type='text/css'> input[name=telefoon]{border: solid 1px red;}</style>";
        $uploadOk = false;
      }
      if ($uploadOk == true)
      {
        $vNaam = $_POST['vNaam'];
        $tVoegsel = $_POST['tVoegsel'];
        $aNaam = $_POST['aNaam'];
        if ($geslacht = "X" && !empty($_POST['geslachtAnders']))
        {
          $geslacht = $_POST['geslachtAnders'];
        }
        else
        {
          $geslacht = $_POST['geslacht'];
        }
        $opleiding = $_POST['opleiding'];
        $waarom = $_POST['waarom'];
        if (isset($_POST['bevestiging']))
        {
          $bevestiging = "Y";
        }
        else
        {
          $bevestiging = "N";
        }
        $mail = $_POST['mail'];
        $telefoon = $_POST['landCode'] . $_POST['telefoon'];
        $land = $_POST['land'];

        $schrijven = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<naam>\n\t<voornaam>" . $vNaam . "</voornaam>\n\t<tussenvoegsel>" . $tVoegsel . "</tussenvoegsel>\n\t<achternaam>" . $aNaam . "</achternaam>\n</naam>\n<geslacht>" . $geslacht . "</geslacht>\n<opleiding>" . $opleiding . "</opleiding>\n<waarom>" . $waarom . "</waarom>\n<bevestiging>" . $bevestiging . "</bevestiging>\n<gegevens>\n\t<mail>" . $mail . "</mail>\n\t<telefoon>" . $telefoon . "</telefoon>\n\t<land>" . $land . "</land>\n</gegevens>";
        $bestand = fopen("inschrijvingen/$mail.xml", 'w');
        fwrite($bestand, $schrijven . "\n");
        fclose($bestand);
      }
    }
  ?>
  




  <h1>Inschrijven<h2>
  <FORM action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <p>
      Naam:
      <input type="text" name="vNaam" placeholder="Voornaam" value="<?php if (!empty($_POST['vNaam'])) echo ($_POST['vNaam']) ?>">
      <input type="text" name="tVoegsel" placeholder="Tussenvoegsel" value="<?php if (!empty($_POST['tVoegsel'])) echo ($_POST['tVoegsel']) ?>">
      <input type="text" name="aNaam" placeholder="Achternaam" value="<?php if (!empty($_POST['aNaam'])) echo ($_POST['aNaam']) ?>">
    </p>
    <p>
      Geslacht:
      <br>
      <input type="radio" name="geslacht" value="M"
      <?php if (!empty($_POST['geslacht']))
      {
        if ($_POST['geslacht'] == "M")
        {
          echo "checked";
        }
      }
      else
      {
        echo "checked";
      } ?>> Man
      <br>
      <input type="radio" name="geslacht" value="V"
      <?php if (!empty($_POST['geslacht']))
      {
        if ($_POST['geslacht'] == "V")
        {
          echo "checked";
        }
      } ?>> Vrouw
      <br>
      <input type="radio" name="geslacht" value="X"
      <?php if (!empty($_POST['geslacht']))
      {
        if (($_POST['geslacht'] !== "M") AND ($_POST['geslacht'] !== "V"))
        {
          echo "checked";
        }
      } ?>>
      <input type="text" name="geslachtAnders" placeholder="Anders" value="<?php if (!empty($_POST['geslachtAnders'])) echo ($_POST['geslachtAnders']) ?>">
    </p>
    <p>
      Opleiding:
      <br>
      <input type="radio" name="opleiding" value="1"
      <?php if (!empty($_POST['opleiding']))
      {
        if ($_POST['opleiding'] == "1")
        {
          echo "checked";
        }
      }
      else
      {
        echo "checked";
      }?>>
      Game Design
      <br>
      <input type="radio" name="opleiding" value="2"
      <?php if (!empty($_POST['opleiding']))
      {
        if ($_POST['opleiding'] == "2")
        {
          echo "checked";
        }
      } ?>>
      Systeembeheer
      <br>
      <input type="radio" name="opleiding" value="3"
      <?php if (!empty($_POST['opleiding']))
      {
        if ($_POST['opleiding'] == "3")
        {
          echo "checked";
        }
      } ?>>
      Softwareengineer
      <br>
      <input type="radio" name="opleiding" value="4"
      <?php if (!empty($_POST['opleiding']))
      {
        if ($_POST['opleiding'] == "4")
        {
          echo "checked";
        }
      } ?>>
      Security
    </p>
    <p>
      Vertel iets over jezelf:
      <br>
      <textarea name="waarom" placeholder="Waarom heb je deze opleiding gekozen?" style="max-width: 80%"><?php if (!empty($_POST['waarom'])) echo ($_POST['waarom']) ?></textarea>
    </p>
    <p>
      Stuur een bevestiging van deze inschrijving:
      <br>
      <input type="checkbox" name="bevestiging">
      ja
    </p>
    <p>
      Gegevens:
      <br>
      eMail:
      <input type="email" name="mail" placeholder="iemand@voorbeeld.nl" size="20" value="<?php if (!empty($_POST['mail'])) echo ($_POST['mail']) ?>">
      <br>
      Telefoonnummer:
      <input type="text" name="landCode" size="2" value="<?php if (!empty($_POST['landCode'])) {echo ($_POST['landCode']);} else {echo '0031';}?>">
      <input type="text" name="telefoon" placeholder="612345678" value="<?php if (!empty($_POST['telefoon'])) echo ($_POST['telefoon']) ?>">
      <br>
      Land:
      <select name="land">
        <option value="AF">Afghanistan</option>
        <option value="AX">Åland Islands</option>
        <option value="AL">Albania</option>
        <option value="DZ">Algeria</option>
        <option value="AS">American Samoa</option>
        <option value="AD">Andorra</option>
        <option value="AO">Angola</option>
        <option value="AI">Anguilla</option>
        <option value="AQ">Antarctica</option>
        <option value="AG">Antigua and Barbuda</option>
        <option value="AR">Argentina</option>
        <option value="AM">Armenia</option>
        <option value="AW">Aruba</option>
        <option value="AU">Australia</option>
        <option value="AT">Austria</option>
        <option value="AZ">Azerbaijan</option>
        <option value="BS">Bahamas</option>
        <option value="BH">Bahrain</option>
        <option value="BD">Bangladesh</option>
        <option value="BB">Barbados</option>
        <option value="BY">Belarus</option>
        <option value="BE">Belgium</option>
        <option value="BZ">Belize</option>
        <option value="BJ">Benin</option>
        <option value="BM">Bermuda</option>
        <option value="BT">Bhutan</option>
        <option value="BO">Bolivia, Plurinational State of</option>
        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
        <option value="BA">Bosnia and Herzegovina</option>
        <option value="BW">Botswana</option>
        <option value="BV">Bouvet Island</option>
        <option value="BR">Brazil</option>
        <option value="IO">British Indian Ocean Territory</option>
        <option value="BN">Brunei Darussalam</option>
        <option value="BG">Bulgaria</option>
        <option value="BF">Burkina Faso</option>
        <option value="BI">Burundi</option>
        <option value="KH">Cambodia</option>
        <option value="CM">Cameroon</option>
        <option value="CA">Canada</option>
        <option value="CV">Cape Verde</option>
        <option value="KY">Cayman Islands</option>
        <option value="CF">Central African Republic</option>
        <option value="TD">Chad</option>
        <option value="CL">Chile</option>
        <option value="CN">China</option>
        <option value="CX">Christmas Island</option>
        <option value="CC">Cocos (Keeling) Islands</option>
        <option value="CO">Colombia</option>
        <option value="KM">Comoros</option>
        <option value="CG">Congo</option>
        <option value="CD">Congo, the Democratic Republic of the</option>
        <option value="CK">Cook Islands</option>
        <option value="CR">Costa Rica</option>
        <option value="CI">Côte d'Ivoire</option>
        <option value="HR">Croatia</option>
        <option value="CU">Cuba</option>
        <option value="CW">Curaçao</option>
        <option value="CY">Cyprus</option>
        <option value="CZ">Czech Republic</option>
        <option value="DK">Denmark</option>
        <option value="DJ">Djibouti</option>
        <option value="DM">Dominica</option>
        <option value="DO">Dominican Republic</option>
        <option value="EC">Ecuador</option>
        <option value="EG">Egypt</option>
        <option value="SV">El Salvador</option>
        <option value="GQ">Equatorial Guinea</option>
        <option value="ER">Eritrea</option>
        <option value="EE">Estonia</option>
        <option value="ET">Ethiopia</option>
        <option value="FK">Falkland Islands (Malvinas)</option>
        <option value="FO">Faroe Islands</option>
        <option value="FJ">Fiji</option>
        <option value="FI">Finland</option>
        <option value="FR">France</option>
        <option value="GF">French Guiana</option>
        <option value="PF">French Polynesia</option>
        <option value="TF">French Southern Territories</option>
        <option value="GA">Gabon</option>
        <option value="GM">Gambia</option>
        <option value="GE">Georgia</option>
        <option value="DE">Germany</option>
        <option value="GH">Ghana</option>
        <option value="GI">Gibraltar</option>
        <option value="GR">Greece</option>
        <option value="GL">Greenland</option>
        <option value="GD">Grenada</option>
        <option value="GP">Guadeloupe</option>
        <option value="GU">Guam</option>
        <option value="GT">Guatemala</option>
        <option value="GG">Guernsey</option>
        <option value="GN">Guinea</option>
        <option value="GW">Guinea-Bissau</option>
        <option value="GY">Guyana</option>
        <option value="HT">Haiti</option>
        <option value="HM">Heard Island and McDonald Islands</option>
        <option value="VA">Holy See (Vatican City State)</option>
        <option value="HN">Honduras</option>
        <option value="HK">Hong Kong</option>
        <option value="HU">Hungary</option>
        <option value="IS">Iceland</option>
        <option value="IN">India</option>
        <option value="ID">Indonesia</option>
        <option value="IR">Iran, Islamic Republic of</option>
        <option value="IQ">Iraq</option>
        <option value="IE">Ireland</option>
        <option value="IM">Isle of Man</option>
        <option value="IL">Israel</option>
        <option value="IT">Italy</option>
        <option value="JM">Jamaica</option>
        <option value="JP">Japan</option>
        <option value="JE">Jersey</option>
        <option value="JO">Jordan</option>
        <option value="KZ">Kazakhstan</option>
        <option value="KE">Kenya</option>
        <option value="KI">Kiribati</option>
        <option value="KP">Korea, Democratic People's Republic of</option>
        <option value="KR">Korea, Republic of</option>
        <option value="KW">Kuwait</option>
        <option value="KG">Kyrgyzstan</option>
        <option value="LA">Lao People's Democratic Republic</option>
        <option value="LV">Latvia</option>
        <option value="LB">Lebanon</option>
        <option value="LS">Lesotho</option>
        <option value="LR">Liberia</option>
        <option value="LY">Libya</option>
        <option value="LI">Liechtenstein</option>
        <option value="LT">Lithuania</option>
        <option value="LU">Luxembourg</option>
        <option value="MO">Macao</option>
        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
        <option value="MG">Madagascar</option>
        <option value="MW">Malawi</option>
        <option value="MY">Malaysia</option>
        <option value="MV">Maldives</option>
        <option value="ML">Mali</option>
        <option value="MT">Malta</option>
        <option value="MH">Marshall Islands</option>
        <option value="MQ">Martinique</option>
        <option value="MR">Mauritania</option>
        <option value="MU">Mauritius</option>
        <option value="YT">Mayotte</option>
        <option value="MX">Mexico</option>
        <option value="FM">Micronesia, Federated States of</option>
        <option value="MD">Moldova, Republic of</option>
        <option value="MC">Monaco</option>
        <option value="MN">Mongolia</option>
        <option value="ME">Montenegro</option>
        <option value="MS">Montserrat</option>
        <option value="MA">Morocco</option>
        <option value="MZ">Mozambique</option>
        <option value="MM">Myanmar</option>
        <option value="NA">Namibia</option>
        <option value="NR">Nauru</option>
        <option value="NP">Nepal</option>
        <option value="NL" selected="selected">Netherlands</option>
        <option value="NC">New Caledonia</option>
        <option value="NZ">New Zealand</option>
        <option value="NI">Nicaragua</option>
        <option value="NE">Niger</option>
        <option value="NG">Nigeria</option>
        <option value="NU">Niue</option>
        <option value="NF">Norfolk Island</option>
        <option value="MP">Northern Mariana Islands</option>
        <option value="NO">Norway</option>
        <option value="OM">Oman</option>
        <option value="PK">Pakistan</option>
        <option value="PW">Palau</option>
        <option value="PS">Palestinian Territory, Occupied</option>
        <option value="PA">Panama</option>
        <option value="PG">Papua New Guinea</option>
        <option value="PY">Paraguay</option>
        <option value="PE">Peru</option>
        <option value="PH">Philippines</option>
        <option value="PN">Pitcairn</option>
        <option value="PL">Poland</option>
        <option value="PT">Portugal</option>
        <option value="PR">Puerto Rico</option>
        <option value="QA">Qatar</option>
        <option value="RE">Réunion</option>
        <option value="RO">Romania</option>
        <option value="RU">Russian Federation</option>
        <option value="RW">Rwanda</option>
        <option value="BL">Saint Barthélemy</option>
        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
        <option value="KN">Saint Kitts and Nevis</option>
        <option value="LC">Saint Lucia</option>
        <option value="MF">Saint Martin (French part)</option>
        <option value="PM">Saint Pierre and Miquelon</option>
        <option value="VC">Saint Vincent and the Grenadines</option>
        <option value="WS">Samoa</option>
        <option value="SM">San Marino</option>
        <option value="ST">Sao Tome and Principe</option>
        <option value="SA">Saudi Arabia</option>
        <option value="SN">Senegal</option>
        <option value="RS">Serbia</option>
        <option value="SC">Seychelles</option>
        <option value="SL">Sierra Leone</option>
        <option value="SG">Singapore</option>
        <option value="SX">Sint Maarten (Dutch part)</option>
        <option value="SK">Slovakia</option>
        <option value="SI">Slovenia</option>
        <option value="SB">Solomon Islands</option>
        <option value="SO">Somalia</option>
        <option value="ZA">South Africa</option>
        <option value="GS">South Georgia and the South Sandwich Islands</option>
        <option value="SS">South Sudan</option>
        <option value="ES">Spain</option>
        <option value="LK">Sri Lanka</option>
        <option value="SD">Sudan</option>
        <option value="SR">Suriname</option>
        <option value="SJ">Svalbard and Jan Mayen</option>
        <option value="SZ">Swaziland</option>
        <option value="SE">Sweden</option>
        <option value="CH">Switzerland</option>
        <option value="SY">Syrian Arab Republic</option>
        <option value="TW">Taiwan, Province of China</option>
        <option value="TJ">Tajikistan</option>
        <option value="TZ">Tanzania, United Republic of</option>
        <option value="TH">Thailand</option>
        <option value="TL">Timor-Leste</option>
        <option value="TG">Togo</option>
        <option value="TK">Tokelau</option>
        <option value="TO">Tonga</option>
        <option value="TT">Trinidad and Tobago</option>
        <option value="TN">Tunisia</option>
        <option value="TR">Turkey</option>
        <option value="TM">Turkmenistan</option>
        <option value="TC">Turks and Caicos Islands</option>
        <option value="TV">Tuvalu</option>
        <option value="UG">Uganda</option>
        <option value="UA">Ukraine</option>
        <option value="AE">United Arab Emirates</option>
        <option value="GB">United Kingdom</option>
        <option value="US">United States</option>
        <option value="UM">United States Minor Outlying Islands</option>
        <option value="UY">Uruguay</option>
        <option value="UZ">Uzbekistan</option>
        <option value="VU">Vanuatu</option>
        <option value="VE">Venezuela, Bolivarian Republic of</option>
        <option value="VN">Viet Nam</option>
        <option value="VG">Virgin Islands, British</option>
        <option value="VI">Virgin Islands, U.S.</option>
        <option value="WF">Wallis and Futuna</option>
        <option value="EH">Western Sahara</option>
        <option value="YE">Yemen</option>
        <option value="ZM">Zambia</option>
        <option value="ZW">Zimbabwe</option>
      </select>
      <br>
      <input type="submit" name="submit" value="Verstuur">
    </p>
  </FORM>
        </div>
      </div>
    </div>
  </div>
  <!-- end main page row -->
  <?php include 'partials/footer.php'; ?>
  <script src="scripts/index.js"></script>
</body>
</html>