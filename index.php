<!DOCTYPE html>
<html>
  <head>
    <title> CS 495 Engineer's Notebook</title>
    <style>
       table {
   	  border: 1px solid #000;
   	  border-collapse: collapse;
       }

       table th, td {
          margin: 0px;
   	  padding: 5px 10px 5px 10px;
   	  border: 1px solid #100;
   	  text-align: center;
       }
    </style>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="w3-light-grey">
    <div class="w3-content w3-margin-top" style="max-width:1400px;">
      <div id="header">
      </div>

      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <div class="w3-container">
            <h2 class="w3-text-teal"> 
              <span class="w3-tag w3-teal w3-round">
                Project Title
              </span> 
              ???
            </h2>
            <h3 class="w3-text-teal"> 
              <span class="w3-tag w3-teal w3-round">
                Project Engineer 
              </span> 
              Your name here
            </h3>
            <h3 class="w3-text-teal"> 
              <span class="w3-tag w3-teal w3-round">
                Project Sponsor 
              </span> 
              ???
            </h3>
            <h3 class="w3-text-teal"> 
              <span class="w3-tag w3-teal w3-round">
                Project Advisor 
              </span> 
              Advisor
            </h3>
            <h3><a href="#">Link to your document</a></h3> 
          </div>
        </div>
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <div>
            <div>
              <h3 class="w3-xxxlarge">Project Time Log </h3>
              <hr>
            </div>
            <table class="table table-striped">
              <tr>
                <th>Date</th>
                <th>Hours worked</th>
                <th>Description of activity</th>
              </tr>
              <?php
                $totalHours = 0;
                $inFile = fopen("designlogfile.txt", "r");
                while(!feof($inFile))
                {
                    $line = fgets($inFile);
                    if ($line != "" && $line[0] != '#')
                    {
                        $parts = explode ("|", $line);
                        echo "<tr><td>$parts[0]</td>";
                        echo "<td>$parts[1]</td>";
                        echo "<td>$parts[2]</td></tr>";
                        $numHours = (double) $parts[1];
                        $totalHours += $numHours;
                          }
                }
              ?>
            </table>
          </div>
          <hr>
          <div id="total">
            <?php
              echo "<h3> <span class=\"w3-tag w3-teal w3-round\"> Total Hours </span> $totalHours </h3>"
            ?>
          </div>
        </div>
      </div> 
    </div>   
  </body>
</html>