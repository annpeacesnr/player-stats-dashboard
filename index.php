<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Stats</title>
    <!-- Link to the CSS file -->
    <link rel="stylesheet" href="styles.css">  
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
</head>
<body>


<?php
// Include the database connection file
include('db_connection.php');

// Fetch all player data from the players table
$sql = "SELECT id, firstname, surname, shirt_number, age, image FROM players";  
$result = $conn->query($sql);

echo '
<div class="title-with-wings">
    <img src="leftwing.png" class="title-wing left" alt="">
    <h1>ANGELO FC</h1>
    <img src="rightwing.png" class="title-wing right" alt="">
</div>
';





if ($result->num_rows > 0) {


    // Container div for centering the table and player cards
    echo "<div class='table-container'>";

    // Display player data as cards
    while ($row = $result->fetch_assoc()) {
        // Convert the BLOB image data to Base64 encoding
        $imageData = base64_encode($row['image']);
        $imageSrc = 'data:image/jpeg;base64,' . $imageData;  // Assuming the image is JPEG format
        
        // Display each player in a card-like layout
        echo "<div class='player-card'>";
        
        // Display player image on top
        echo "<img src='" . $imageSrc . "' alt='" . $row['firstname'] . " " . $row['surname'] . "' />";
        
        // Display player data underneath the image
        echo "<div><strong>" . $row['firstname'] . " " . $row['surname'] . "</strong></div>";
        echo "<div><strong>Shirt Number:</strong> " . $row['shirt_number'] . "</div>";
        echo "<div><strong>Age:</strong> " . $row['age'] . "</div>";
        
        // Close the card div
        echo "</div>";
    }

    // Close the container div
    echo "</div>";
} else {
    echo "No player data found!";
}







// Close the connection
$conn->close();
?>

</body>
</html>





