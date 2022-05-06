<?php 
 //This function displays the discount depending on age and day of the week.
  	// initialize variables
	$message = "Please make a selection above.";
	
	// get age and day of the week
	$age = $_POST['age'];
	$day = $_POST['day'];

  // define constants
  define ("CHILD_FREE", 5);
  define ("ADULT_FREE", 95);
  define ("STUDENT_YOUNG", 12);
  define ("STUDENT_OLD", 21);

  // If the age is below 5 or above 95, display "The cost is free for you."	
	if (($age < CHILD_FREE) || ($age > ADULT_FREE)) {
		$cost = "The cost is free for you.";
	}
    // If the day is Tuesday or Thursday, or the age is between 12 and 21, display, "You get a student discount."
	else if ((($day == "Tuesday") || ($day == "Thursday")) || (($age >= STUDENT_YOUNG) && ($age <= STUDENT_OLD))) {
		$cost = "You get a student discount.";
	}
    // If none of the above are true, display, "You have to pay regular price."
	else if (($age > 0) || ($day != "")) {		
		$cost = "You have to pay regular price.";
	}
  else {
   // display the message
  	echo $message; 
  }
  echo $cost;
?>