<!DOCTYPE html>
<!-- Unit5-03-PHP-Factorial -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="The factorial of a positive integer">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Julien L.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index_php1/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index_php1/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index_php1/favicon-16x16.png">
    <link rel="manifest" href="./fav_index_php1/site.webmanifest">
    <!--Link to MDL-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.purple-deep_purple.min.css"/>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>The factorial of a positive integer</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!--Header and Text-->
    <center>
      <?php echo "<h1>The factorial of a positive integer</h1>" ?>
      <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
      <?php echo "<h4>Course: ICS20 Programming</h4>" ?>
      <br>
      <!--User Input-->
      <?php echo "<h3>Please enter the following:</h3>" ?>
      <form action="./results.php" method="post" target="result">
        <label for="first-int">Enter a postive integer:</label>
          <input type="number" id="first-int" step="1" placeholder="Eg. 4" name="first-int">
           <br><br>
        <input type="submit" value="Calculate Product"><br><br>	
      </form>
      <!--Display Statement for Museum Admission-->
      <iframe id="result" name="result">
 <?php
   // initialize results to an empty string
  $results = "";

  // initialize counter to 1
  $counter = 1;

  // initialize star to empty string
  $star = "";

  // get userInteger from user input
  $userInteger = $_POST["first-int"];


  // initialize resultsUpsideDown to an empty string
  $resultsUpsideDown= "";

  // initialize counterUpsideDown to an empty string
  $starUpsideDown = "";

// if userInteger is an empty string or is less than or equal to 0, then tell the user to input a postive integer 
if(($userInteger=="") || ($userInteger <= 0)) {
  $results = "Please enter a positive integer greater than 0.";
}

//otherwise, use a do...while loop to display an upright, right, and flipped triangle, and use a for...loop to display an inverted, right, flipped triangle
else {
  do {
       if ($counter % 5 == 0) {

         //every 5 lines, repeat the planet symbol "o" the number of times that the counter is equal to.
         $star= str_repeat("o",$counter);

         // add a line break
          $results= $results.$star."<br>";

         //increment the counter
          $counter++;
       }


       //otherwise, if the counter is not a multiple of 5, reapt the star symbol the number of times that the counter is equal to.
       else if ($counter % 5 != 0) {
         //every 5 lines, repeat the star symbol the number of times that the counter is equal to.
          $star = str_repeat("*",$counter);

          // add a line break
          $results = $results.$star."<br>";

         //increment the counter
          $counter++;
        }
     } while ($counter <= $userInteger);

     for ($counterUpsideDown=$userInteger;$counterUpsideDown >= 0; $counterUpsideDown--) {

       
       if ($counterUpsideDown % 5 == 0) {

          //every 5 lines, repeat the planet symbol "o" the number of times that the counter is equal to.
        $starUpsideDown= str_repeat("o",$counterUpsideDown);

        // add a line break
        $resultsUpsideDown= $resultsUpsideDown.$starUpsideDown."<br>";
       }
        else if ($counterUpsideDown % 5 != 0) {

          //every 5 lines, repeat the star symbol the number of times that the counter is equal to.
          $starUpsideDown = str_repeat("*",$counterUpsideDown);

         // add a line break
      $resultsUpsideDown= $resultsUpsideDown.$starUpsideDown."<br>";
      }
     }
  
}

  //display results
  echo $results.$resultsUpsideDown;
    // define the resultsUpsideDown statement
  
?>
    </iframe>
      <!-- MDL Progress Bar with Indeterminate Progress -->
      <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
    </center>
  </body>
</html>