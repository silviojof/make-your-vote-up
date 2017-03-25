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

  <div class="expanded row small-collapse">
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

    <div class="medium-12 large-6 column">
      <div class="whos-topic">
        <h2>Alberta</h2>
      </div>
    </div>

  </div>



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
