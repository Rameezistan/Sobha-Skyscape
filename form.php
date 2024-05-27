<?php
            if (!empty($_POST["send"])) {
                // Check if the key exists before accessing it
                $userName = isset($_POST["userName"]) ? $_POST["userName"] : '';
                $userEmail = isset($_POST["userEmail"]) ? $_POST["userEmail"] : '';
                $userPhone = isset($_POST["userPhone"]) ? $_POST["userPhone"] : '';
                $userIam = isset($_POST["userIam"]) ? $_POST["userIam"] : '';
                
                $toEmail = "esensibles@gmail.com";
                $company = "Inquiry from Sobha Orbis";
                
                $fromName = "Sobha Orbis"; // Change this to your desired name
                $fromEmail = "sobhaorbis.moving-to-dubai.com"; // Change this to your desired email
                $headers = "From: $fromName <$fromEmail>\r\n";
                $headers .= "Reply-To: $fromEmail\r\n";
                $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                
                // Create the email message
                $emailBody = "Name: " . $userName . "\r\n";
                $emailBody .= "Email: " . $userEmail . "\r\n";
                $emailBody .= "Phone: " . $userPhone . "\r\n";
                $emailBody .= "I am: " . $userIam . "\r\n";
                
                // Send the email
                if (mail($toEmail, $company, $emailBody, $headers)) {
                    $message = "Your contact information is received successfully.";
                }
            }
        ?>
.