<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $firstname = trim($_POST['firstname']);
    $lastname = trim($_POST['lastname']);
    $age = trim($_POST['age']);
    $contact = trim($_POST['contact']);
    $address = trim($_POST['address']);

    $ph_phone_num_pattern = '/^(09\d{9}|(\+639)\d{9})$/';


    if (empty($firstname) || empty($lastname) || empty($age) || empty($contact) || empty($address)) {
        echo "
        <script>
            window.alert('Please fill up all the fields');
            window.location.href = '/registration.php';
        </script>
        ";
        exit;
    }

    if (!preg_match($ph_phone_num_pattern, $contact)) {
        echo "
        <script>
            window.alert('Invalid phone number');
            window.location.href = '/registration.php';
        </script>
        ";
        exit;
    }


    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Form Submission Result</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
                background-color: #f0f2f5;
            }
            .result-card {
                background-color: #fff;
                border-radius: 8px;
                padding: 20px;
                width: 300px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .result-card h2 {
                color: #333;
                text-align: center;
                margin-top: 0;
            }
            .result-card p {
                font-size: 1em;
                color: #555;
                margin: 8px 0;
            }
            .result-card strong {
                color: #333;
            }

            a {
                text-decoration: none;
                width: 100%;
                display: flex;
                justify-content: center;
            }

            button {
                background-color: #181938;
                padding: 0.7rem;
                color: white;
                border: none;
                cursor: pointer;
                border-radius: 5px;
            }
            button:hover {
                background-color: #3b3c5a;
            }
        </style>
    </head>
    <body>
        <div class='result-card'>
            <h2>Form Submission Result</h2>
            <p><strong>First Name:</strong> " . htmlspecialchars($firstname) . "</p>
            <p><strong>Last Name:</strong> " . htmlspecialchars($lastname) . "</p>
            <p><strong>Age:</strong> " . htmlspecialchars($age) . "</p>
            <p><strong>Contact:</strong> " . htmlspecialchars($contact) . "</p>
            <p><strong>Address:</strong> " . htmlspecialchars($address) . "</p>
            <a href='/registration.php'><button>Return to Registration</button></a>
        </div>
    </body>
    </html>";
}
?>
