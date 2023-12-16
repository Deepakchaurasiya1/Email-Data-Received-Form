<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
//     $name = htmlspecialchars($_POST["email"]);
//     $response = "Hello, $name! Your data was received successfully.";
//     echo $response;
// } else {
//     echo "Error: Invalid request.";
// }
?>

<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"]))
   
    $email = htmlspecialchars($_POST["email"]);
    $confirmemail = htmlspecialchars($_POST["confirmemail"]);
    $password = htmlspecialchars($_POST["password"]); 
    $country = htmlspecialchars($_POST["country"]); 
    $subject = "Form Submission";
    $body = "
        <html>
        <head>
            <title>$subject</title>
        </head>
        <body>
            <h2>Form Submission</h2>
            <table>
                <tr>
                    <td><strong>Email:</strong></td>
                    <td>$email</td>
                </tr>
                <tr>
                    <td><strong>Confrim Email:</strong></td>
                    <td>$confirmemail</td>
                </tr>
                <tr>
                    <td><strong>Password:</strong></td>
                    <td>$password</td>
                </tr>
                <tr>
                    <td><strong>Country:</strong></td>
                    <td>$country</td>
                </tr>
            </table>
        </body>
        </html>
    ";
    $mail = new PHPMailer(true);
    try {
        // $mail->SMTPDebug = 2;                                       
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com;';                    
        $mail->SMTPAuth   = true;                             
        $mail->Username   = 'deepakeglobalsoftsolution@gmail.com';                 
        $mail->Password   = 'duvg aika epdr zpne';                        
        $mail->SMTPSecure = 'tls';                              
        $mail->Port       = 587;  
    
        $mail->setFrom('deepakeglobalsoftsolution@gmail.com');           
        $mail->addAddress('deepakeglobalsoftsolution@gmail.com');
        // $mail->addAddress('receiver2@gfg.com', 'Name');
        
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->send();
        echo "Mail has been sent successfully!";
     
     // $response = "Hello, $name! Your data was received successfully.";
     // echo $response;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    
?>