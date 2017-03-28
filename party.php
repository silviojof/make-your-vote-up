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

   <?php
     require('connection2.php');

     function getMyParty($party) {
       $query = "SELECT * FROM comparison_tb WHERE name=" . "'" . $party . "'";
       $queryResult = mysqli_query(connect_db(), $query);
       $numOfRows = mysqli_num_rows($queryResult);
       if($numOfRows > 0) {
         while($row = mysqli_fetch_assoc($queryResult)) {

   echo "<div class='row expanded small-collapse margin-correction margin-correction-bottom'>
             <div class='party-page medium-12 large-6 column left-column-height'>
               <div class='representative'>
                  " . $row['party-logo'] . "
               </div>
               <div class='row expanded small-collapse'>
                 <div class='small-12 medium-6 large-6 column representative-party'>
                     " . $row['party-image'] . "
                 </div>
                 <div class='small-12 medium-6 large-6 column representative-info'>
                   " . $row['party-bio'] . "
                 </div>
               </div>
               <div class='party-info'>
                 " . $row['party-info'] . "
               </div>
               <div class='party-mps'>
                 <h2 style='color: " . $row['party-colour'] . "'>MEMBERS OF PARLIAMENT</h2>
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
                   <div class='hide-for-small-only " . $row['bg-opacity-colour'] . "'></div>
                   <div class='hide-for-medium'>
                     <h1 style='color: " . $row['party-colour'] . "'>PROPOSALS</h1>
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
                   </div>
                   <div class='hide-for-small-only column proposal-large'>
                    <h1 style='color: " . $row['party-colour'] . "'>PROPOSALS</h1>
                     <div class='hide-for-small-only proposal-list-height column'>
                       <span class='show-and-hide proposal-list' data-value='0'>Public Finance |</span>
                       <span class='show-and-hide proposal-list' data-value='1'>Taxation and Economy | </span>
                       <span class='show-and-hide proposal-list' data-value='2'>Infra-structure | </span>
                       <span class='show-and-hide proposal-list' data-value='3'>Jobs | </span>
                       <span class='show-and-hide proposal-list' data-value='4'>Families | </span>
                       <span class='show-and-hide proposal-list' data-value='5'>Foreign Policy | </span>
                       <span class='show-and-hide proposal-list' data-value='6'>Health | </span>
                       <span class='show-and-hide proposal-list' data-value='7'>Marijuana Legalisation | </span>
                       <span class='show-and-hide proposal-list' data-value='8'>Energy</span>
                     </div>
                   </div>
                 </div>
                    <div class='show proposal-info'>
                       <ul data-proposal='finance'>" .
                       $row['finance']. "
                       </ul>
                       <ul data-proposal='taxes'> " .
                       $row['taxes'] . "
                       </ul>
                       <ul data-proposal='infrastructure'> " .
                       $row['infrastructure'] . "
                       </ul>
                       <ul data-proposal='jobs'> " .
                       $row['jobs'] . "
                       </ul>
                       <ul data-proposal='family'> " .
                       $row['family'] . "
                       </ul>
                       <ul data-proposal='foreign'> " .
                       $row['foreign'] . "
                       </ul>
                       <ul data-proposal='health'> " .
                       $row['health'] . "
                       </ul>
                       <ul data-proposal='marijuana'> " .
                       $row['marijuana'] . "
                       </ul>
                       <ul data-proposal='energy'> " .
                       $row['energy'] . "
                       </ul>
                    </div>
               </div>
           </div>";

         }
       } else {
         // If there is no data on table
         echo "<p>There is no data to display</p>";
       }

     }

     if(connect_db()) {
       if(isset($_GET['party'])) {
         $party = $_GET['party'];
         getMyParty($party);

       }


     } else {
       die( connect_db() );
     }
   ?>

  <?php
    include('partials/footer.php');
   ?>




</body>
</html>
