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
  <div class="expanded row margin-correction">
    <div class="small-12 medium-6 column comp-title comp-light">
        <h2>read each topic</h2>
    </div>
    <div class="small-12 medium-6 column comp-title comp-dark">
      <h2>get yourself informed</h2>
    </div>
  </div>
  <div class="expanded row hide-for-large">
    <div class="small-12 medium-6 column comp-selectbox">
      <div class='selectBox'>
          <input type="hidden" value="1" class="price_values" id="comp-selectbox"/>
          <span class='selected'></span>
          <span class='selectArrow'>&#9660</span>
          <ul class="selectOptions" >
              <li class="selectOption" data-topic="finance" data-value="0">Public Finance</li>
              <li class="selectOption" data-topic="taxes" data-value="1">Taxation and Economy</li>
              <li class="selectOption" data-topic="infrastructure" data-value="2">Infra-structure</li>
              <li class="selectOption" data-topic="jobs" data-value="3">Jobs</li>
              <li class="selectOption" data-topic="family" data-value="4">Families</li>
              <li class="selectOption" data-topic="foreign" data-value="5">Foreign Policy</li>
              <li class="selectOption" data-topic="health" data-value="6">Health</li>
              <li class="selectOption" data-topic="marijuana" data-value="7">Marijuana Legalisation</li>
              <li class="selectOption" data-topic="energy" data-value="8">Energy</li>
          </ul>
      </div>
    </div>
    <div class="small-12 medium-6 column comp-topic">
      <h2>Public Finance</h2>
    </div>
  </div>
  <div class="expanded row show-for-large comp-img-box">
    <div class="comp-img" data-topic="finance">
      <h5>public finance</h5>
      <div></div>
    </div>
    <div class="comp-img" data-topic="taxes">
      <h5>taxation and economy</h5>
      <div></div>
    </div>
    <div class="comp-img" data-topic="infrastructure">
      <h5>manufacturing and infrastructure</h5>
      <div></div>
    </div>
    <div class="comp-img" data-topic="jobs">
      <h5>jobs</h5>
      <div></div>
    </div>
    <div class="comp-img" data-topic="family">
      <h5>families</h5>
      <div></div>
    </div>
    <div class="comp-img" data-topic="foreign">
      <h5>foreign policy</h5>
      <div></div>
    </div>
    <div class="comp-img" data-topic="health">
      <h5>health</h5>
      <div></div>
    </div>
    <div class="comp-img" data-topic="marijuana">
      <h5>marijuana legalisation</h5>
      <div></div>
    </div>
    <div class="comp-img" data-topic="energy">
      <h5>energy</h5>
      <div></div>
    </div>
  </div>
  <div class="expanded row collapse margin-correction-bottom" id="parties-topic">

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
