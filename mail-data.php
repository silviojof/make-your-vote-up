<?php

    // Only process POST reqeusts.
    if (isset($_POST["email"])) {
        // Get the form fields and remove whitespace.

        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

        // Check that data was sent to the mailer.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oops! There was a problem with your submission. Please complete the form and try again.";
            exit;
        } else {
            $sender = "wendi@myvu.org";

            $to = $email;
            $subject = "MYVU E-mail";
            $message = "You are receiving this from PHP";
            $headers = "From: MYVU <$sender>";

            $didItSend = mail($to, $subject, $message, $headers);

            if($didItSend) {
              http_response_code(200);
              echo "Thank you! Your message has been sent";
            } else {
              http_response_code(500);
              echo "Oops! Something went wrong and we could not send your message";
            }
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
