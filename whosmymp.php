<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <script src="https://use.fontawesome.com/983b5cbe32.js"></script>

  <title>wendibranch</title>
</head>
<body>
  <?php
    include('partials/main-nav.php');
   ?>

  <div class="expanded row small-collapse margin-correction margin-correction-bottom">
    <div class="medium-12 large-6 column">
      <div class="whos-selectbox hide-for-medium">
        <div class='selectBox'>
          <input type="hidden" value="1" class="price_values" id="whos-selectbox"/>
          <span class='selected'></span>
          <span class='selectArrow'>&#9660</span>
          <ul class="selectOptions" >
              <li class="selectOption" data-value="1" data-province="ab">Alberta</li>
              <li class="selectOption" data-value="2" data-province="bc">British Columbia</li>
              <li class="selectOption" data-value="3" data-province="mb">Manitoba</li>
              <li class="selectOption" data-value="4" data-province="nb">New Brunswick</li>
              <li class="selectOption" data-value="5" data-province="nl">Newfoundland and Labrador</li>
              <li class="selectOption" data-value="6" data-province="ns">Nova Scotia</li>
              <li class="selectOption" data-value="7" data-province="on">Ontario</li>
              <li class="selectOption" data-value="8" data-province="pe">P. Edward Island</li>
              <li class="selectOption" data-value="9" data-province="qc">Quebec</li>
              <li class="selectOption" data-value="10" data-province="sk">Saskatchewan</li>
              <li class="selectOption" data-value="11" data-province="nt">Northwest Territories</li>
              <li class="selectOption" data-value="12" data-province="yt">Yukon</li>
              <li class="selectOption" data-value="13" data-province="nu">Nunavut</li>
          </ul>
      </div>
      </div>
      <div class="whos-container show-for-medium">
        <h2>who's my mp</h2>
        <p>click on a province to see the mp's</p>
        <?php echo file_get_contents('img/canada.svg'); ?>
      </div>
    </div>

    <div class="medium-12 large-6 column whos-right-side">
      <div class="whos-topic">
        <h2>Alberta</h2>
        <ul>

        </ul>
      </div>
      <div class="whos-mps">
        <ul id="whos-mps">
          <li>Dan Albas <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Ziad Aboultaif <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Harold Albrecht <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>John Aldag <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Omar Alghabra <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Leona Allesley <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Dear Allison <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Hon. Rona Ambrose <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>William Amos <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Gary Anandasangaree <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>David Anderson <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Charlie Angus <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Mel Arnold <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>René Arseneault <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Chandra Arya <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Niki Ashton <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Robert Aubin <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Ramez Ayoub <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Vance Badaway <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Hon. Larry Bagnell <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Hon. Navdeep Bains <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>John Barlow <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Xavier Barslou-Duval <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Frank Baylis <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Mario Beaulieu <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Tery Beech <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Hon. Carolyn Bennett <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Sheri Benson <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Hon. Candice Bergen <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Hon. Maxime Bernier <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Luc Berthold <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>James Bezan <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Hon. Marie-Claude Bilbeau <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Chris Bittle <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Daniel Blaikie <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Bill Blair <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Rachel Blaney <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Kelly Block <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Randy Boissonnault <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Mike Bossio <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Sylvie Boucher <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Michel Bouldrias <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
          <li>Alexandre Boulerice <span><i class="fa fa-square" aria-hidden="true"></i></span></li>
        </ul>
      </div>
    </div>

  </div>

  <?php
    include('partials/footer.php');
   ?>


  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/selectbox.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>
