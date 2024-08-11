<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer-master/src/Exception.php';
require './PHPMailer-master/src/PHPMailer.php';
require './PHPMailer-master/src/SMTP.php';

// Database connection
$servername = "localhost"; // or your server address
$username = "arpanihan";
$password = "arpanihan@123";
$database = "portfolio_website";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submitContact'])) {
    // Collect and escape form data to prevent SQL injection
    $fullname = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $company = mysqli_real_escape_string($conn, $_POST['company']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into the database
    $sql = "INSERT INTO contact (fullname, email, phone, company, message) VALUES ('$fullname', '$email', '$number', '$company', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Send email if data is successfully inserted
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->Username = 'nihanarpa4@gmail.com';
            $mail->Password = 'zdrw phrb fsev zbpg';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('nihanarpa4@gmail.com', 'Portfolio Contact Form');
            $mail->addAddress('nihanarpa64@gmail.com', 'user');

            $mail->isHTML(true);
            $mail->Subject = 'Portfolio Website Contact';
            $mail->Body = "<h3>Client's Message</h3>
                            <h4>Fullname: {$fullname}</h4>
                            <h4>Email: {$email}</h4>
                            <h4>Number: {$number}</h4>
                            <h4>Company: {$company}</h4>
                            <h4>Message: {$message}</h4>";

            if ($mail->send()) {
                $_SESSION["status"] = "Thanks for contacting me. I will respond to you soon.";
            } else {
                $_SESSION["status"] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        } catch (Exception $e) {
            $_SESSION["status"] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        $_SESSION["status"] = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit(0);
} else {
    exit(0);
}
?>
