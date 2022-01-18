<?php
    ob_start(); 
    function sendConfirmMail($usersMail){
        $to = $usersMail;
        $subject = "Tack för ditt mail!";    
        $message = "Jag återkommer så fort jag bara kan";
        $headers = "From:admin@rasmusbergstrom.se \r\n";
        $headers .= "MIME-Version: 1.0 \r\n";
        $headers .= "Content-type: text/plain; charset=utf-8 \r\n";
        $headers .= "Content-Transfer-Encoding: 8bit \r\n";

        $retval = mail($to, '=?UTF-8?B?'.base64_encode($subject).'?=', $message, $headers);
        if( $retval == true ) {
           return true;
        }else {
           return false;
        }
    }
    function sendMailToAdmin($usermessage, $from){
        $to = 'admin@rasmusbergstrom.se';
        $subject = "Kontakt";    
        $message = $usermessage;
        $headers = 'From:' . $from;
       
        $retval = mail($to,$subject,$message,$headers);
        
        if( $retval == true ) {
            return true;
        }else {
           return true;
        }
    }

    $userName = '';
    $userEmail = '';
    $userMessage = ''; 
    
    $errorcodes = array('name' => '', 'email' => '', 'message' => '');

    if(isset($_POST['submit'])){
        //Kollar om namn är ifyllt
        if(empty($_POST['name'])){
            $errorcodes['name'] = "Du måste fylla i ditt namn";
        }else{
            $userName = $_POST['name'];
        }
        //Kollar om email är ifyllt
        if(empty($_POST['email'])){
            $errorcodes['email'] = "Du måste fylla i din epost";
        }else{
            $userEmail = $_POST['email'];
        }
        //Kollar om det finns ett meddelande
        if(empty($_POST['message'])){
            $errorcodes['userMessage'] = "Du måste skriva ett meddelande";
        }else{
            $userMessage = $_POST['message'];
        }

        //Kolla om det finns errorkoder
        if(array_filter($errorcodes)){
            foreach($errorcodes as $error){
                echo $error;
            }
            echo "Det finns errors";
        } else {
            //Skicka ett bekräftelsemail till användaren 
            $mailsent = sendConfirmMail($userEmail);
            //Skicka mail till admin
            $adminMailSent = sendMailToAdmin($userMessage, $userEmail);   
            if($mailsent && $adminMailSent ){
                header('Location: success.php'); 
                die();
            }
        } 
    }





