<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $form_name = isset($_POST['form_name']) ? htmlspecialchars($_POST['form_name']) : '';
    $project_value = isset($_POST['project_value']) ? htmlspecialchars($_POST['project_value']) : '';
    $lead_type = isset($_POST['lead_type']) ? htmlspecialchars($_POST['lead_type']) : '';
    $project_name = isset($_POST['project_name']) ? htmlspecialchars($_POST['project_name']) : '';
    $community_name = isset($_POST['community_name']) ? htmlspecialchars($_POST['community_name']) : '';
    $city_name = isset($_POST['city_name']) ? htmlspecialchars($_POST['city_name']) : '';
    $user_status = isset($_POST['user_status']) ? htmlspecialchars($_POST['user_status']) : '';
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';

    // Debugging output
    error_log("Form Name: $form_name");
    error_log("Project Value: $project_value");
    error_log("Lead Type: $lead_type");
    error_log("Project Name: $project_name");
    error_log("Community Name: $community_name");
    error_log("City Name: $city_name");
    error_log("User Status: $user_status");
    error_log("Name: $name");
    error_log("Email: $email");
    error_log("Phone: $phone");

    // Basic validation
    if (!empty($user_status) && !empty($name) && !empty($email) && !empty($phone)) {
        // Email recipient
        $to = "recipient@example.com"; // Replace with your email address

        // Email subject
        $subject = "New Lead from Skyscape Avenue";

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
            <p>User Status: $user_status</p>
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
            // Redirect to index.html on success
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
