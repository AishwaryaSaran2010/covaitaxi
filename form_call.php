<?php
  // Check if the form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve the selected destinations from the form
      $fromDestination = $_POST["from_destination"];
      $toDestination = $_POST["to_destination"];

      // Display the selected destinations
      echo "<h2>Your selected destinations:</h2>";
      echo "<p>From: $fromDestination</p>";
      echo "<p>To: $toDestination</p>";
  }
  ?>