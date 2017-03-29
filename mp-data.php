<?php
  require('connection2.php');

  function getMp($province, $party) {
    $provinceArr = array("bc"=>"British Columbia","ab"=>"Alberta","mb"=>"Manitoba", "sk"=>"Saskatchewan","on"=>"Ontario","qb"=>"Quebec","ns"=>"Nova Scotia","nb"=>"New Brunswick","pi"=>"Prince Edward Island","nl"=>"Newfoundland and Labrador","nu"=>"Nunavut","yt"=>"Yukon","nt"=>"Northwest Territories");
    $query = "SELECT * FROM mp_list_tb WHERE province='" . $province . "' AND party= '" . $party . "'";
    $queryResult = mysqli_query(connect_db(), $query);
    $numOfRows = mysqli_num_rows($queryResult);
    if($numOfRows > 0) {
      echo"<h3>". $provinceArr[$province] . "</h3>";
      while($row = mysqli_fetch_assoc($queryResult)) {

      echo "<li>" . $row['mp'] . "</li>";

      }
    } else {
      // If there is no data on table
      echo "<h3>" .$party . " has no members of parliament in " . $provinceArr[$province] . " to display</h3>";
    }

  }

  if(connect_db()) {
    if(isset($_GET['province'])) {
      $province = $_GET['province'];
      $party = $_GET['party'];

      getMp($province, $party);

    }


  } else {
    die( connect_db() );
  }
?>
