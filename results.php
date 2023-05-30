<?php

  // initialize star to an empty string
  $star = "";

  // initialize counter to 1
  $counter = 0;

    // get height from the user
    $height = $_POST["height"];

    // if userInteger is an empty string or is less than or equal to 0, then tell the user to input a positive integer
if (($height == "") || ($height <= 0)) {
    echo "Please enter a positive integer greater than 0.";
}

    //otherwise, display an upright, right, and flipped triangle
else {
      //use a for loop for the spacing while coutnerSpacing is less than the difference of the height and counterSpace
    for ($counterSpace = 0; $counterSpace < $height; $counterSpace++) {
        for ($counterSpacing = 1; $counterSpacing < $height - $counterSpace; $counterSpacing++) {
          // print spaces
            echo "&nbsp;&nbsp;";
        }

      //use a do...while loop for printing the stars, while the counter is less than or equal to counterSpace
        do {
           // calculate amount of stars to displau
           $star= str_repeat("*", $counter+1);

            // increment the counter
            $counter++;
        } while ($counter <= $counterSpace); 

      //display results
      echo $star;
      echo "<br>";        
    }
    }
?>
