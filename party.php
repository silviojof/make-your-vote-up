<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <script src="https://use.fontawesome.com/983b5cbe32.js"></script>
  <title>party page</title>
</head>

<body>
  <?php
    include('partials/main-nav.php');
   ?>
  <div class="">
    <div class="party-page small-12 medium-12 large-6 column">
      <div class="small-12 medium-12 large-6 column hang-left">
        <img class="party-logo" src="img/conservative_party.svg"/>
      <div class="large-6 column keep-bottom">
          <img class="representative-party show-for-large" src="img/party-leaders/ambrose.jpg"/>
      </div>
    </div>
      <div class="small-12 medium-12 large-6 column representative">
          <h2>REPRESENTATIVE</h2>
          <p class="uppercase"><strong>rona ambrose</strong><br/>
              BORN: APRIL 30, 1959<br/>
              RIDING: CALGARY HERITAGE<br/>
              EDUCATION: ECONOMICS,<br/>
              UNIVERSITY OF CALGARY</p>
              <p>Rona Ambrose is the current interim leader of the Conservative Party. She was born in March 15,1969 in Valleyview, Alberta. Ambrose has a Masters of Arts degree in political science and a Bachelor of Arts in women’s and gender studies. Ambrose, a proclaimed feminist  has been involved with various organization working to end violence against women before her political career. </p>
          <h2>MEMBERS OF PARLIAMENT</h2>
          <!-- Trigger/Open The Modal -->
          <div id="overlayDiv" >
      			<div id="modalDiv">
      				<button id="closeBtn">Close</button>
      			</div>
      		</div>

      		<button data-mp="qb" class="mp-btn">QB</button>
          <button data-mp="nl" class="mp-btn">NL</button>
          <button data-mp="on" class="mp-btn">ON</button>
          <button data-mp="bc" class="mp-btn">BC</button>
          <button data-mp="nu" class="mp-btn">NU</button>
          <button data-mp="qb" class="mp-btn">AL</button>
          <button data-mp="pi" class="mp-btn">PI</button>

      </div>
    </div>

    <div class="">
      <div class="small-12 medium-12 large-6 remove-padding column">
        <div class="small-12 medium-12 large-12 remove-padding column proposal" id="bg-image">
          <div class="over-lay show-for-large"></div>

          <div class="expanded row hide-for-large">
            <h1>PROPOSALS</h1>
            <div class="small-12 medium-6 column comp-selectbox">
              <div class='selectBox'>
                  <input type="hidden" value="1" class="price_values"/>
                  <span class='selected'></span>
                  <span class='selectArrow'>&#9660</span>
                  <ul class="selectOptions" >
                      <li class="selectOption" data-value="0">Public Finance</li>
                      <li class="selectOption" data-value="1">Taxation and Economy</li>
                      <li class="selectOption" data-value="2">Infra-structure</li>
                      <li class="selectOption" data-value="3">Jobs</li>
                      <li class="selectOption" data-value="4">Families</li>
                      <li class="selectOption" data-value="5">Foreign Policy</li>
                      <li class="selectOption" data-value="6">Health</li>
                      <li class="selectOption" data-value="7">Marijuana Legalisation</li>
                      <li class="selectOption" data-value="8">Energy</li>
                  </ul>
              </div>
            </div>
            <div class="small-12 medium-6 column comp-topic">
              <h2>Public Finance</h2>
            </div>
          </div>
          <div class="show-for-large column proposal-large">
            <h1>PROPOSALS</h1>
            <div class="show-for-large column">
              <span class="show-and-hide" data-value="0">Public Finance ||</span>
              <span class="show-and-hide" data-value="1">Taxation and Economy || </span>
              <span class="show-and-hide" data-value="2">Infra-structure || </span>
              <span class="show-and-hide" data-value="3">Jobs || </span>
              <span class="show-and-hide" data-value="4">Families || </span>
              <span class="show-and-hide" data-value="5">Foreign Policy || </span>
              <span class="show-and-hide" data-value="6">Health || </span>
              <span class="show-and-hide" data-value="7">Marijuana Legalisation || </span>
              <span class="show-and-hide" data-value="8">Energy</span>
          </div>
       </div>
     </div>
   </div>
 </div>
 <div class="">
   <div class="show">hello world</div>
 </div>
  <!-- </div> -->

  <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script
    src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
    integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
    crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/selectbox.js"></script>
  <script type="text/javascript" src="js/parties.js"></script>


</body>
</html>
