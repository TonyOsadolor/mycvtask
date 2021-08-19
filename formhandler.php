<?php
//Calling Classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Importing Time Zone
date_default_timezone_set("Africa/Lagos");

//Calling Required Files
require 'vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/src/SMTP.php';

//Load Composer's autoloader
require 'vendor/autoload.php';

if(isset($_POST['send'])){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    $datesent = date("Y-m-d H:i:s");
    $myemail = "tonyentertain@gmail.com";
    $othernames = "Anthony Osadolor";
    $year = date('Y');
    
     /* Adding Email Function to Successful Signup */
            //Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);

        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();
            $mail->Host = 'localhost';
            $mail->SMTPAuth = false;
            $mail->SMTPAutoTLS = false; 
            $mail->Port = 25;
            
            //Recipients
            //Because Yahoo mail blocks messages sent from their servers with Contact Form, I have to use the Domain Email*/
            $mail->setFrom('support@tonytechstudios.com.ng', 'Support Team');
            $mail->addAddress($myemail);
            $mail->addBCC($email);
            $mail->WordWrap = 50;      // Set word wrap to 50 characters
            
            //Calling Mail and Subject
            $mail->isHTML(true);
            $mail->Subject = "New Contact from Your CV Page";
            
            //Setting the Email Body Already prepared in HTML
            $mail->Body = "<!DOCTYPE html>
        <html>
            <head>

                <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
            </head>
            <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }

            tr:nth-child(even) {
              background-color: #dddddd;
            }
            .container{
              width: 100%;
              padding-right: 15px;
              padding-left: 15px;
              margin-right: auto;
              margin-left: auto;
            }
            
            @media (min-width: 576px) {
              .container, .container-sm {
                max-width: 540px;
              }
            }
            
            @media (min-width: 768px) {
              .container, .container-sm, .container-md {
                max-width: 720px;
              }
            }
            
            @media (min-width: 992px) {
              .container, .container-sm, .container-md, .container-lg {
                max-width: 960px;
              }
            }
            
            @media (min-width: 1200px) {
              .container, .container-sm, .container-md, .container-lg, .container-xl {
                max-width: 1140px;
              }
            }
            .card {
              position: relative;
              display: -ms-flexbox;
              display: flex;
              -ms-flex-direction: column;
              flex-direction: column;
              min-width: 0;
              word-wrap: break-word;
              background-color: #fff;
              background-clip: border-box;
              border: 1px solid rgba(0, 0, 0, 0.125);
              border-radius: 0.25rem;
            }
            .card-body {
              -ms-flex: 1 1 auto;
              flex: 1 1 auto;
              min-height: 1px;
              padding: 1.25rem;
            }
            </style>
            <body style='line-height: 20px; margin: 2% auto;background-color='#f5eaea'>
                <div class='container'>
                    <div class='form-row' style='padding:5px;'>
                        <div class='col-md-12' style='margin:2% auto;background-color:white;border-radius:5px;box-shadow:0px 0px 5px 0px;padding:20px;max-width:70%;'>
                            <div class='header-content' style='background-color:#fff;padding:2px;border-radius:5px;margin-bottom:7px;'>
                                <h3 style='color: #fb9902;text-align:center;'>$name is trying to Contact you.</h3>
                                    <p style='text-align:justify;'>
                                        <center>Hello! Anthony $name is trying to contact you, <br>after going through your CV online. <br>Here is what He/She sent to you: </center>
                                    </p>
                                    <center><h4>Please find below your Basic Information:</h4></center>
                            </div>
                            <div class='body-content' style='border-radius:5px;padding:15px;background-color:white;box-shadow:0px 2px 8px 0px;'>
                                <table class='table table-striped table-bordered'>
                                    <div class='container' style='padding:5px;'>
                                    <tr>
                                        <td>Name:</td>
                                        <td><span><b>$name</b></span></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><span><b>$email</b></span></td>
                                    </tr>
                                    <tr>
                                    </tr>
                                    </div>
                                </table>
                                <div class='card'>
                                    <div class='card-body'>
                                        $message
                                    </div>
                                </div>
                                <div class='message' style='margin: 0px 5px 5px 5px; padding:10px;'>
                                    <p class='text-center' style='font-weight: bold;'>
                                        A copy of this mail has been sent to: $email; for record purpose only.
                                    </p>
                                </div>
                                <div>
                                    <div class='mb-1'>$othernames <b>||</b> &copy; All rights reserved $year.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
        </html>";
            
        $mail->send();
                /* Adding Email Function to Successful Signup */
                echo "<script>alert('Message Sent!')</script>";
                echo "<script>location.href='index.php'</script>";
            } catch (Exception $e) {
                //Displaying Error Message
                echo "<script>alert('Message Not Successful')</script>";
                echo "<script>location.href='index.php'</script>";
            }
} else {
    echo "<script>alert('Sorry, This is Forbidden')</script>";
    echo "<script>location.href='index.php'</script>";
}

?>
