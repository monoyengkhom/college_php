<?php
function birthdayCountdown($birthday) {
    // Parse the birthday string into a DateTime object
    $birthdayDate = DateTime::createFromFormat('m-d', $birthday);
    
    // Get the current date
    $today = new DateTime();
    
    // Adjust the birthday year to the current year
    $currentYear = $today->format('Y');
    $nextBirthday = DateTime::createFromFormat('m-d-Y', $birthday . '-' . $currentYear);
    
    // If the birthday has already occurred this year, set it to next year
    if ($nextBirthday < $today) {
        $nextBirthday->modify('+1 year');
    }
    
    // Calculate the difference in days
    $interval = $today->diff($nextBirthday);
    $countdownDays = $interval->days;
    
    return $countdownDays;
}

// Example usage
$birthday = "07-26";  // Format: MM-DD
$daysUntilBirthday = birthdayCountdown($birthday);
echo "There are $daysUntilBirthday days until your birthday.";
?>
