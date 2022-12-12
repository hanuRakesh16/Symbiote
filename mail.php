<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';
// include 'checkout.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
                           $name = $_POST['name'];
							$email = $_POST['email'];
							$contact = $_POST['contact'];
							$address = $_POST['address'];
							$zip = $_POST['zip'];
							$uid = $_SESSION['user'];
                           
                            $id = $_GET['id'];
                            $run_cart = mysqli_query($conn,"SELECT * FROM tbl_cart WHERE id ='$id'");
                            while($fetch_cart=mysqli_fetch_array($run_cart)){
                                $p_id = $fetch_cart['p_id'];
                                $total = $fetch_cart['total_price'];
                                }
                            

    try{
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'rockstar.hr27@gmail.com'; // Gmail address which you want to use as SMTP server
        $mail->Password = 'your_password'; // Gmail address Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = '587';

        $mail->setFrom('rockstar.hr27@gmail.com'); // Gmail address which you used as SMTP server
        $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

        $mail->isHTML(true);
        $mail->Subject = 'Order Confirmation';
        $mail->Body = "<h3>Name : $name <br>Email: $email <br>Address : $address <br> Total : $total </h3>";

        $mail->send();
        $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
    } catch (Exception $e){
        $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
    }
}
?>
