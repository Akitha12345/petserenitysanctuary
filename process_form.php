<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted and process the data
    if (isset($_POST["author"]) && isset($_POST["email"]) && isset($_POST["comment"])) {
        $author = $_POST["author"];
        $email = $_POST["email"];
        $comment = $_POST["comment"];

        // Here, you can add your form handling logic
        // For example, you can store the data in a database, send an email, etc.

        // In this example, we are displaying the submitted data as an example
        echo "Full Name: " . $author . "<br>";
        echo "Email Address: " . $email . "<br>";
        echo "Question: " . $comment . "<br>";
    }
}
?>
