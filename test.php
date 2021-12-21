<?php
$username = 'root';
$password = '';
$database = 'db';
$mysqli = new mysqli('localhost', $username, $password, $database);

$query = "SELECT * FROM classroom";
echo "<b> <center>Database Output</center> </b> <br> <br>";

$result = $mysqli->query($query);

/*freeresultset*/
#$result->free();

?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Room No', 'Room Capacity'],
          

          <?php
			while ($row = $result->fetch_assoc()) {
			    $field1name = $row["roomNo"];
			    $field2name = $row["roomCapacity"];
			    

			    echo "['".$field1name."',".$field2name."],";
			    
			}
			?>
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
