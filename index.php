<!DOCTYPE html>
<!-- Assign-05-PHP-StarTriangleFlipped -->
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Flipped, right triangle of stars">
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
    <title>Flipped, right triangle of stars</title>
  </head>
  <body>
    <!-- Google's MDL -->
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <div class = "mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <!--Header and Text-->
    <center>
      <?php echo "<h1>Flipped, right triangle of stars</h1>" ?>
      <?php echo "<h4>By: Julien Lamoureux</h4>" ?>
      <?php echo "<h4>Course: ICS20 Programming</h4>" ?>
      <br>
      <!--User Input-->
      <?php echo "<h3>Please enter the following:</h3>" ?>
      <form action="./results.php" method="post" target="result">
        <label for="height">Enter a height for your triangle</label>
          <input type="number" id="height" step="1" placeholder="Eg. 4" name="height">
           <br><br>
        <input type="submit" value="Show Triangle"><br><br>	
      </form>
      <div style="text-align:center"> 
      <!--Display Statement for Museum Admission-->
      <iframe id="result" name="result">
    </iframe>
      </div>
      <!-- MDL Progress Bar with Indeterminate Progress -->
      <div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate"></div>
      <img src="./images/starImage.jfif" alt="Star Image PHP">
    </center>
  </body>
</html>