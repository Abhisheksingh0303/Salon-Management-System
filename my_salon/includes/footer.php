<?php
include('includes/dbconnection.php');
error_reporting(0);
?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('mailer/Exception.php');
require('mailer/PHPMailer.php');
require('mailer/SMTP.php');


if (isset($_POST['sub'])) {
    $name = $_POST['email'];
    $mail = new PHPMailer(true);
    $email = $_POST['email'];
    $query = mysqli_query($con, "insert into tblsubscriber(Email) value('$email')");
    try {
        //Server settings

        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = 'abhishek16333@gmail.com'; //SMTP username
        $mail->Password = 'twnesoqlgyfhznmi'; //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
        $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('abhishek16333@gmail.com', 'Abhishek Singh');
        $mail->addAddress($_POST['email']); //Add a recipient


        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Hello Dear; thanks for subscribing our Salon Website!';
        $mail->Body = 'Dear Customer, We are excited to welcome you to our newsletter community! 
        As a valued subscriber, you will be the first to know about our latest services, promotions, and events. 
        Heres what you can expect to receive in your inbox,  
        Special Offer: To thank you for subscribing, we are offering a 10% discount on your first visit to our salon. Simply mention this newsletter when booking your appointment to redeem the offer.
        Grooming Tips: Our team of experts will be sharing valuable grooming tips and advice in our newsletter, so you can look and feel your best every day.
        We appreciate your support and look forward to keeping in touch with you. Please dont hesitate to reach out if you have any questions or feedback.

        Best regards,
        
        Abhishek Mens salon.';


        $mail->send();
        echo "<script>alert('Thank you for subscribing. A confirmation email has been sent to your inbox.')</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>



<div class="footer">
    <!-- footer-->
    <div class="container">
        <div class="footer-block">
            <!-- footer block -->
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h2 class="widget-title">Salon Address</h2>
                        <ul class="listnone contact">
                            <?php

                            $ret = mysqli_query($con, "select * from tblpage where PageType='contactus' ");
                            $cnt = 1;
                            while ($row = mysqli_fetch_array($ret)) {

                                ?>
                                <li><i class="fa fa-map-marker"></i>
                                    <?php echo $row['PageDescription']; ?>
                                </li>
                                <li><i class="fa fa-phone"></i>
                                    <a href="tel:9435059030">
                                        <?php echo $row['MobileNumber']; ?>
                                    </a>
                                </li>

                                <li><i class="fa fa-envelope-o"></i>
                                    <a href="mailto:aayurdhafoundation@gmail.com">
                                        <?php echo $row['Email']; ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="footer-widget footer-social">
                        <!-- social block -->
                        <h2 class="widget-title">Social Feed</h2>
                        <ul class="listnone">
                            <li>
                                <a href="https://www.facebook.com/ab.abhishek.1806?mibextid=ZbWKwL"> <i
                                        class="fa fa-facebook"></i> Facebook </a>
                            </li>
                            <li><a href="https://www.linkedin.com/in/abhishek-singh-531889240/"><i
                                        class="fa fa-linkedin"></i> Linked In</a></li>
                            <li><a href="https://www.instagram.com/shekabhi_03/"><i class="fa fa-instagram"></i>
                                    Instagram</a></li>

                        </ul>
                    </div>
                    <!-- /.social block -->
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="footer-widget widget-newsletter">
                        <!-- newsletter block -->
                        <h2 class="widget-title">Newsletters</h2>
                        <p>Enter your email address to receive new discount and other useful information right to your
                            inbox.</p>
                        <form method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter your email address"
                                    name="email">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" value="submit" name="sub">Subscribe <i
                                            class="fa fa-gratipay"></i></button>
                                </span>
                            </div>
                        </form>
                        <!-- /input-group -->
                    </div>
                    <!-- newsletter block -->
                </div>
            </div>
            <div class="tiny-footer">
                <!-- tiny footer block -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright-content">
                            <p><i class="fa fa-copyright"></i> Men Salon Management System 2023 || Created by
                                <span>Abhishek singh</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.tiny footer block -->
        </div>
        <!-- /.footer block -->
    </div>
</div>