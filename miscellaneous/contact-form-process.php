<?php
// if (isset($_POST['fcf-button'])) {

//     $email_to = "rimorcapital@gmail.com";
//     $email_subject = "New form submissions";
    

//     function problem($error)
//     {
//         echo "We are very sorry, but there were error(s) found with the form you submitted. ";
//         echo "These errors appear below.<br><br>";
//         echo $error . "<br><br>";
//         echo "Please go back and fix these errors.<br><br>";
//         die();
//     }

//     // validation expected data exists
//     if (
//         !isset($_POST['Name']) ||
//         !isset($_POST['Email']) ||
//         !isset($_POST['Message'])
//     ) {
//         problem('We are sorry, but there appears to be a problem with the form you submitted.');
//     }

//     $name = $_POST['Name']; // required
//     $email = $_POST['Email']; // required
//     $message = $_POST['Message']; // required

//     $error_message = "";
//     $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

//     if (!preg_match($email_exp, $email)) {
//         $error_message .= 'The Email address you entered does not appear to be valid.<br>';
//     }

//     $string_exp = "/^[A-Za-z .'-]+$/";

//     if (!preg_match($string_exp, $name)) {
//         $error_message .= 'The Name you entered does not appear to be valid.<br>';
//     }

//     if (strlen($message) < 2) {
//         $error_message .= 'The Message you entered do not appear to be valid.<br>';
//     }

//     if (strlen($error_message) > 0) {
//         problem($error_message);
//     }

//     $email_message = "Form details below.\n\n";

//     // function clean_string($string)
//     // {
//     //     $bad = array("content-type", "bcc:", "to:", "cc:", "href");
//     //     return str_replace($bad, "", $string);
//     // }

//     // $email_message .= "Name: " . clean_string($name) . "\n";
//     // $email_message .= "Email: " . clean_string($email) . "\n";
//     // $email_message .= "Message: " . clean_string($message) . "\n";

//     // create email headers
//     $headers = 'From: ' . $email . "\r\n" .
//         'Reply-To: ' . $email . "\r\n" ;
//          'X-Mailer: PHP/' . phpversion();
    
    

//     $email_body = "You have recieved a new message from the user $name. \n".
//         "email address: $email\n".
//         "Here is the message:\n $message".
    
//     mail($email_to, $email_subject, $email_body, $headers);
if(isset($_POST['submit'])){
    $to = "rimorcapital@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
}
?>

    <!-- include your success message below -->

    <!-- Thank you for contacting us. We will be in touch with you very soon. -->
