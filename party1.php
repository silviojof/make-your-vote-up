<!DOCTYPE html>
<html>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <link rel='stylesheet' type='text/css' href='css/styles.css' />
  <script src='https://use.fontawesome.com/983b5cbe32.js'></script>
  <title>party page</title>
</head>

<body>
  <?php
    include('partials/main-nav.php');
   ?>
  <div class="row expanded small-collapse margin-correction margin-correction-bottom">
    <div class='party-page medium-12 large-6 column'>
      <div class='representative'>
        <img class='party-logo' src='img/party-logo/conservative_party.svg'/>
        <h2>REPRESENTATIVE</h2>
      </div>
      <div class='row expanded small-collapse'>
        <div class='small-12 medium-6 large-6 column representative-party'>
            <img src='img/party-leaders/ronaAmbrose.jpg'/>
        </div>
        <div class='small-12 medium-6 large-6 column representative-info'>
            <p class='uppercase'><br/>
              <strong>rona ambrose</strong><br/>
              <strong>BORN: </strong>APRIL 30, 1959</strong><br/>
              <strong>RIDING:</strong> CALGARY HERITAGE<br/>
              <strong>EDUCATION:</strong> ECONOMICS, <br/>UNIVERSITY OF CALGARY
            </p>
        </div>
      </div>
      <div class='party-info'>
        <p>Rona Ambrose is the current interim leader of the Conservative Party. She was born in March 15,1969 in Valleyview, Alberta. Ambrose has a Masters of Arts degree in political science and a Bachelor of Arts in women’s and gender studies. Ambrose, a proclaimed feminist  has been involved with various organization working to end violence against women before her political career. </p>
      </div>
      <div class='party-mps'>
        <h2>MEMBERS OF PARLIAMENT</h2>
        <!-- Trigger/Open The Modal -->
        <div id='overlayDiv' >
          <div id='modalDiv'>
            <button id='closeBtn'>Close</button>
          </div>
        </div>
        <button data-mp='qb' class='mp-btn'>QB</button>
        <button data-mp='nl' class='mp-btn'>NL</button>
        <button data-mp='on' class='mp-btn'>ON</button>
        <button data-mp='bc' class='mp-btn'>BC</button>
        <button data-mp='nu' class='mp-btn'>NU</button>
        <button data-mp='qb' class='mp-btn'>AL</button>
        <button data-mp='pi' class='mp-btn'>PI</button>
      </div>
    </div>
    <div class='medium-12 large-6 column'>
        <div class='proposal' id='bg-image'>
          <div class='hide-for-small-only over-lay'></div>
          <div class='hide-for-medium'>
            <h1>PROPOSALS</h1>
            <div class='comp-selectbox'>
              <div class='selectBox'>
                  <input type='hidden' value='1' class='price_values'/>
                  <span class='selected'></span>
                  <span class='selectArrow'>&#9660</span>
                  <ul class='selectOptions' >
                      <li class='selectOption' data-value='0'>Public Finance</li>
                      <li class='selectOption' data-value='1'>Taxation and Economy</li>
                      <li class='selectOption' data-value='2'>Infra-structure</li>
                      <li class='selectOption' data-value='3'>Jobs</li>
                      <li class='selectOption' data-value='4'>Families</li>
                      <li class='selectOption' data-value='5'>Foreign Policy</li>
                      <li class='selectOption' data-value='6'>Health</li>
                      <li class='selectOption' data-value='7'>Marijuana Legalisation</li>
                      <li class='selectOption' data-value='8'>Energy</li>
                  </ul>
              </div>
            </div>
            <div class='comp-topic'>
              <h2>Public Finance</h2>
            </div>
          </div>
          <div class='hide-for-small-only column proposal-large'>
            <h1>PROPOSALS</h1>
            <div class='hide-for-small-only proposal-list-height column'>
              <span class='show-and-hide proposal-list' data-value='0'>Public Finance ||</span>
              <span class='show-and-hide proposal-list' data-value='1'>Taxation and Economy || </span>
              <span class='show-and-hide proposal-list' data-value='2'>Infra-structure || </span>
              <span class='show-and-hide proposal-list' data-value='3'>Jobs || </span>
              <span class='show-and-hide proposal-list' data-value='4'>Families || </span>
              <span class='show-and-hide proposal-list' data-value='5'>Foreign Policy || </span>
              <span class='show-and-hide proposal-list' data-value='6'>Health || </span>
              <span class='show-and-hide proposal-list' data-value='7'>Marijuana Legalisation || </span>
              <span class='show-and-hide proposal-list' data-value='8'>Energy</span>
            </div>
          </div>
        </div>
         <div>
           <div class='show'>hello world</div>
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/selectbox.js"></script>
  <script type="text/javascript" src="js/parties.js"></script>


</body>
</html>
