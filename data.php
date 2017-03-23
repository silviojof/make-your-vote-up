<?php
  require('connection.php');

  function comparisson($name, $topic) {
    $query = "SELECT * FROM conservative_tb WHERE name=" . "'" . $name . "'";
    $queryResult = mysqli_query(connect_db(), $query);
    $numOfRows = mysqli_num_rows($queryResult);
    if($numOfRows > 0) {
      $message;
      while($row = mysqli_fetch_assoc($queryResult)) {

      $message = "<div class='small-12 medium-6 large-3 column comp-party' id='comp-". $name . "'>
          <header class='comp-header'>
            <h2>" . $name . "<span class='comp-vote'>0</span></h2>
          </header>
          <div class='comp-body'>
            <div class='comp-text'>
              <ul>
                <li>" . $row[$topic] . "</li>
              </ul>
            </div>
            <div class='comp-icons'>
              <span><i class='fa fa-thumbs-o-up' aria-hidden='true'></i></span>
              <span class='hide-for-large'><i class='fa fa-long-arrow-up' aria-hidden='true'></i></span>
            </div>
          </div>
        </div>";

      }
      echo $message;
    } else {
      // If there is no data on table
      echo "<p>There is no data to display</p>";
    }

  }

  if(connect_db()) {
    if(isset($_GET['topic'])) {
      $topicShow = $_GET['topic'];
      comparisson("green", $topicShow);
      comparisson("conservative", $topicShow);
      comparisson("democratic", $topicShow);
      comparisson("liberal", $topicShow);
    }


  } else {
    die( connect_db() );
  }
?>
