<?php
  require('connection.php');

  function getMyMp($province) {
    $query = "SELECT * FROM mp_list_tb WHERE province=" . "'" . $province . "'";
    $queryResult = mysqli_query(connect_db(), $query);
    $numOfRows = mysqli_num_rows($queryResult);
    $colors = array('liberal'=> 'rgb(135, 1, 15)', 'conservative'=> 'rgb(12, 86, 128)', 'green'=>'rgb(17, 94, 17)', 'new-democratic'=>'rgb(174, 70, 5)');
    if($numOfRows > 0) {
      while($row = mysqli_fetch_assoc($queryResult)) {

      echo "<li data-party-name='" . $row['party'] . "'>" . $row['mp'] . "<span><i style='color: " . $colors[$row['party']] . "' class='fa fa-square' aria-hidden='true'></i></span></li>";

      }
    } else {
      // If there is no data on table
      echo "<p>There is no data to display</p>";
    }

  }

  if(connect_db()) {
    if(isset($_GET['province'])) {
      $province = $_GET['province'];
      getMyMp($province);

    }


  } else {
    die( connect_db() );
  }
?>
