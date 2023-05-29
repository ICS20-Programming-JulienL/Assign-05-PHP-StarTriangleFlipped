
<?php
   // initialize numbers to an empty string
  $results = "";

  // initialize counter to 1
  $counter = 1;

  // initialize star to empty string
  $star = "";

  // get userInteger from user input
  $userInteger = $_POST["first-int"];


  // initialize resultsUpsideDown to an empty string
  $resultsUpsideDown = "";

  // initialize counterUpsideDown to an empty string
  $starUpsideDown = "";

// if userInteger is an empty string or is less than or equal to 0, then tell the user to input a postive integer
if (($userInteger == "") || ($userInteger <= 0)) {
    $results = "Please enter a positive integer greater than 0.";
}

else {
  //otherwise, use a do...while loop to display an upright, right, and flipped triangle
    do {
        if ($counter % 5 == 0) {
          
            //every 5 lines, repeat the planet symbol "o" the number of times that the counter is equal to.
            $star = str_repeat("o",$counter);

            // add a line break
            $results = $results . $star . "<br>";

            //increment the counter
            $counter++;
        }
       //otherwise, if the counter is not a multiple of 5, reapt the star symbol the number of times that the counter is equal to.
       else if ($counter % 5 != 0) {
         //every 5 lines, repeat the star symbol the number of times that the counter is equal to.
          $star = str_repeat("*",$counter);

          // add a line break
          $results = $results . $star . "<br>";

         //increment the counter
          $counter++;
        }
     } while ($counter <= $userInteger);

      //use a for...loop to display an inverted, right, flipped triangle
     for ($counterUpsideDown = $userInteger;$counterUpsideDown >= 0; $counterUpsideDown--) {

       
       if ($counterUpsideDown % 5 == 0) {

          //every 5 lines, repeat the planet symbol "o" the number of times that the counter is equal to.
        $starUpsideDown = str_repeat("o",$counterUpsideDown);

        // add a line break
        $resultsUpsideDown = $resultsUpsideDown . $starUpsideDown . "<br>";
       }
        else if ($counterUpsideDown % 5 != 0) {

          //every 5 lines, repeat the star symbol the number of times that the counter is equal to.
          $starUpsideDown = str_repeat("*",$counterUpsideDown);

         // add a line break
      $resultsUpsideDown = $resultsUpsideDown . $starUpsideDown . "<br>";
      }
     }
  
}

  //display results
  echo $results . $resultsUpsideDown;
    // define the resultsUpsideDown statement
  
?>

