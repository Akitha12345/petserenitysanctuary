<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted and process the data
    if (isset($_POST["email"])) {
        $email = $_POST["email"];

        // Here, you can add your email subscription logic
        // For example, sending an email to the site owner, saving to a database, etc.

        // In this example, we're just redirecting to a "thank you" page
        header("Location: thank-you.html");
        exit;
    }
}
?>