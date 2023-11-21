<?php
if(isset($_POST['contact-form'])){
  
   $name       = @trim(stripslashes($_POST['username'])); 
   $email      =  @trim(stripslashes($_POST['email']));
   $subject  =  @trim(stripslashes($_POST['subject'])); 
   $message12  =  @trim(stripslashes($_POST['message'])); 
 

   $to = "info@alphafinglobe.com"; // this is your Email address
   $subject = "Contact Enquiry From Alpha FinGlobe Website";

   $headers = "From: Contact Alpha FinGlobe <noreply@alphafinglobe.com/>\r\n";
   $headers .= "Reply-To: noreply@alphafinglobe.com/\r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
   $returnpath = '-f noreply@alphafinglobe.com/';

   $message = 'Hello Sir <Br> You have received new Contact Enquiry From Alpha FinGlobe Website ';
   $message .= '<h3>Follwing are the Contact details</h3>';
   $message .= '<table><tr><td>Date :</td><td>'.date("d-m-Y").'</td></tr><tr><td>Name :</td><td>'.$name.'</td></tr><tr><td>Mail :</td><td>'.$email.'</td></tr>';
   $message .= '<tr><td>Subject :</td><td>'.$subject.'</td></tr><tr><td>Message :</td><td>'.$message12.'</td></tr>';
   $message .= '</table><br><br>Thank You <br><b>This is auto Generated Email.Plase do not reply on this mail</b>';
   /*$success = @mail($email_to, $name, $body, 'From: <'.$email_from.'>');*/
   
   $mail= mail($to,$subject,$message,$headers,$returnpath);
   if($mail == 1){
    echo "<script type='text/javascript'>alert('Thank You. We will contact you soon')</script>"; 
    echo "<script>window.location='contact.html';</script>"; 
}else{
    echo "<script type='text/javascript'>alert('Sorry. Try Again Letter')</script>"; 
}
 }
?> 