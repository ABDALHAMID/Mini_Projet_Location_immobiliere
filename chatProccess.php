<?php
// your_php_script.php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    // Get the user's message
    $userMessage = strtolower($_POST['message']); // Convert to lowercase for case-insensitive comparison

    // Define keywords and their corresponding values
    $keywords = array(
        'logement' => 'Pour decouvrir d\'autres logements visitez la page Logements  ',
        'prix' => 'les prix entre 200mad et 1000mad',
        'type' => 'Vous pouvez trouver des appartements , des villas , des maison , des salles , portes ouvertes ',
        // Add more keywords as needed
    );

    // Check for keywords in the user's message
    $matchedKeywords = array();
    foreach ($keywords as $key => $value) {
        if (strpos($userMessage, $key) !== false) {
            $matchedKeywords[$key] = $value;
        }
    }

    // Prepare the bot response
    $botResponse = array(
        'message' => 'The ',
        'values' => $matchedKeywords,
    );
    

    // Send the response back to the client
    echo json_encode($botResponse);
} else {
    // Handle other cases or return an error response
    echo json_encode(array('error' => 'Invalid request.'));
}
?>
