<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted and process the data
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Here, you can add your contact form handling logic
        // For example, sending an email to the site owner, saving to a database, etc.

        // In this example, we're just displaying the form data as an example
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Message: " . $message . "<br>";
    }
}
?>