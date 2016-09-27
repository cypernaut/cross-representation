<html>
    <head>
        <title>
            Formular
        </title>
    <meta http-equiv="refresh" content="3;url=http://cross-representation.eu">
    </head>
    <body>

    <?php
    $empf = "demo@localhost.com";
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $company = $_POST['company'];  
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];
    $from = 'from: '.$firstname. " " .$surname.' <'.$email.'>\n';
//    $from .= 'reply-to: '.$email.'\n';
//    $from .= 'Content-Type text/html\n';
    $betreff = $firstname. " ". $surname.' has sent you an email.';
    
    $message .= "\n \n Vorname: ". $firstname. "\n Nachname: ". $surname. "\n Institution: ". $company. "\n Email-Adresse: ". $email. "\n Telefon: ". $telephone;    
//    nl2br($message);
//    ob_start();
//    include 'test.php'
//    $string = ob_get_clean();    
    mail ($empf, $betreff, $message, $from);
    
    echo "Thank you $firstname. Your message was sent successfully!";
    
    ?>
    
    <br> 
    <br> If you are not forwarded automatically, please click <a href="http://cross-representation.eu">here</a>

        
    </body>
    
</html>
