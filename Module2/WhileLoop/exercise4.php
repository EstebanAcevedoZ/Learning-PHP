<?php
//Free exercise

// Number Guessing Game using While Loop

// Function to simulate the game
function number_guessing_game($max_attempts) {
    // Set a random number to guess between 1 and 100
    $random_number = rand(1, 100);
    
    // Initialize the number of attempts made
    $attempts = 0;
    
    // Initialize a score starting at 100, losing points for each incorrect guess
    $score = 100;
    
    // Greet the player
    echo "Welcome to the Number Guessing Game!\n";
    echo "Try to guess the number between 1 and 100.\n\n";
    
    // Start the game loop with the while statement
    while ($attempts < $max_attempts) {
        // Increment the number of attempts
        $attempts++;
        
        // Ask the player for their guess
        echo "Attempt $attempts/$max_attempts - Enter your guess: ";
        $guess = (int)readline();  // Use readline() instead of fgets(STDIN) for command line input
        
        // Check if the guess is correct
        if ($guess === $random_number) {
            echo "\nCongratulations! You guessed the correct number ($random_number) in $attempts attempts.\n";
            echo "Your final score is: $score\n";
            break;  // Exit the loop if the guess is correct
        }
        
        // If the guess is wrong, reduce the score and give a hint
        $score -= 10;
        
        // Provide hints based on the difference between the guess and the random number
        if ($guess < $random_number) {
            echo "Hint: The number is higher than $guess. Try again!\n";
        } else {
            echo "Hint: The number is lower than $guess. Try again!\n";
        }
        
        // If all attempts are used up, the player loses
        if ($attempts === $max_attempts) {
            echo "\nGame Over! You've used all $max_attempts attempts.\n";
            echo "The correct number was: $random_number.\n";
            echo "Your final score is: $score\n";
        }
    }
}

// Set the maximum number of attempts
$max_attempts = 10;

// Start the game
number_guessing_game($max_attempts);

?>