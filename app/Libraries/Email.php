<?php

namespace app\Libraries;

use app\Libraries\MySql;

// ambition to make page body mails / system mails
// (header links -> .js funtionality / footer html markup functionality)
Class Email
{

    public function sendMail($email, $subject, $message)
    {
        // mail();
    }

        // Send mail instance on link click for support contact
        // misschien ook meteen een naar verzender sturen dat support is verzonden en contact wordt opgenomen
        // $to      = 'info@swartwerk.nl';
        // $subject = '!! Support Request from website CV-plus';
        // $message = 'Support request from';
        // $headers = 'From: website_cv-plus@swartwerk.nl' . "\r\n" .
        //     'Reply-To: admin@swartwerk.nl' . "\r\n" .
        //     'X-Mailer: PHP/' . phpversion();

        // mail($to, $subject, $message, $headers);
        
}