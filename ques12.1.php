<?php
// Set the target date for the birthday using mktime() function: December 31, 2013
$target_days = mktime(0,0,0,26,07,2002);

// Get the current timestamp
$today = time();

// Calculate the difference in seconds between the target date and today's date
$diff_days = ($target_days - $today);

// Convert the difference in seconds to days
$days = (int)($diff_days/86400);

// Print the number of days until the next birthday
print "Days till next birthday: $days days!"."\n";
?>
