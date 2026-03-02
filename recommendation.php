<?php
// Sample destinations dataset
$destinations = [
    ["name" => "buddha temple", "budget" => "medium", "season" => "winter"],
    ["name" => "temple", "budget" => "low", "season" => "summer"],
    ["name" => "tapkeshwar", "budget" => "medium", "season" => "winter"],
    ["name" => "fun and food kingdom", "budget" => "high", "season" => "summer"]
    
];

// Get user input (from form)
$budget = strtolower($_POST['budget'] ?? "");
$season = strtolower($_POST['season'] ?? "");


$recommendations = [];

// Simple matching logic
foreach ($destinations as $place) {
    $score = 0;
    if ($place['budget'] == $budget) $score++;
    if ($place['season'] == $season) $score++;
    
    
    if ($score >= 2) { // at least 2 preferences match
        $recommendations[] = $place['name'];
    }
}

// Output result
if (!empty($recommendations)) {
    echo "<h3>Recommended Destinations for You:</h3><ul>";
    foreach ($recommendations as $rec) {
        echo "<li>$rec</li>";
    }
    echo "</ul>";
} else {
    echo "<p>No exact matches found, try changing filters!</p>";
}
?>



ctrl shift n