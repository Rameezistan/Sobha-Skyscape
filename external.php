<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $form_name = htmlspecialchars($_POST['form_name']);
    $project_value = htmlspecialchars($_POST['project_value']);
    $lead_type = htmlspecialchars($_POST['lead_type']);
    $project_name = htmlspecialchars($_POST['project_name']);
    $community_name = htmlspecialchars($_POST['community_name']);
    $city_name = htmlspecialchars($_POST['city_name']);
    $userIam = htmlspecialchars($_POST['userIam']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);

    // Basic validation
    if (!empty($userIam) && !empty($name) && !empty($email) && !empty($phone)) {
        // Email recipient
        $to = "esensibles@gmail.com"; // Replace with your email address

        // Email subject
        $subject = "From Oak Hills";

        // Email message
        $message = "
        <html>
        <head>
            <title>New Lead from Skyscape Avenue</title>
        </head>
        <body>
            <p>Form Name: $form_name</p>
            <p>Project Value: $project_value</p>
            <p>Lead Type: $lead_type</p>
            <p>Project Name: $project_name</p>
            <p>Community Name: $community_name</p>
            <p>City Name: $city_name</p>
            <p>User I am: $userIam</p>
            <p>Name: $name</p>
            <p>Email: $email</p>
            <p>Phone: $phone</p>
        </body>
        </html>
        ";

        // Email headers
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: no-reply@example.com" . "\r\n"; // Replace with your from email address

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            header("Location: index.html?status=success");
            exit();
        } else {
            echo "Failed to send email.";
        }
    } else {
        echo "All fields are required.";
    }
} else {
    echo "Invalid request.";
}
?>
w