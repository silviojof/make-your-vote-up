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
  <div class="row">
    <div class="party-page small-12 medium-12 large-6 column">
      <div class="small-12 medium-12 large-6 column hang-left">
        <img class="party-logo" src="img/conservative_party.svg"/>
      <div class="large-6 column keep-bottom">
          <img class="representative-party show-for-large" src="img/party-leaders/ambrose.jpg"/>
      </div>
    </div>
      <div class="small-12 medium-12 large-8 column representative">
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

    <div class="small-12 medium-12 large-6 column party-background">
      <div class="small-12 medium-12 large-6 column proposal">
        <h1>PROPOSALS</h1>
        <div>
          <div class="show-and-hide">Energy & Enviroment
          </div>
          <div class="show">Hello World</div>
        </div>

     </div>
   </div>
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
  <script type="text/javascript" src="js/parties.js"></script>


</body>
</html>
