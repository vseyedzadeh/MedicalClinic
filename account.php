<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$app->map('/passreset/request', function() use ($app, $log){
    if($app->request()->isGet()){
        //state 1: first show
        $app->render('passreset_request.html.twig');
        return;
    }
    //inpost -receving submission
    $email = $app->request()->post('email');
    $user = DB::queryFirstRow("SELECT * FROM patients WHERE email= %s", $email);    
    if($user){
        /*Version 2: insertUpdate */
        $secretToken = generateRandomString(50);
        DB::insertUpdate('passresets', array(
            'userId' => $user['id'],
            'secretToken' => $secretToken,
            'expiryDateToken' => date("Y-m-d H:i:s", strtotime("+5 minutes"))
        ));
        $url = 'http://'. $_SERVER['SERVER_NAME'].'/passreset/token/'. $secretToken;
        $emailBody = $app->view()->render('passreset_email.html.twig', array(
            'name' => $user['firstName']." ".$user['lastName'],  // or 'name' or firstname , ...
            'url' => $url 
        ));
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html/r/n";
        $headers .= "From: Noreply <noreply@ipd10.com>\r\n";
        $headers .= sprintf("To: %s <%s>\r\n", htmlentities($user['firstName']), $user['email']);
        
        mail($toEmail, "Your password reset for " . $_SERVER['SERVER_NAME'], $emailBody, $headers);
        $log->info('Email sent for password reset for user id=' . $user['id']);
        $app->render('passreset_request_success.html.twig');
    } else { // State 3: failed request, email not registered
        $app->render('passreset_request.html.twig', array('error' => true));
    }
})->via('GET', 'POST');


$app->map('/passreset/token/:secretToken', function($secretToken) use ($app, $log) {
    $row = DB::queryFirstRow("SELECT * FROM passresets WHERE secretToken=%s", $secretToken);
    
    if (!$row) { // row not found
        $app->render('passreset_notfound_expired.html.twig');
        
        return;
        
    }
    if (strtotime($row['expiryDateToken']) < time()) {
        // row found but token expired
        $app->render('passreset_notfound_expired.html.twig');
        
        return;
        
    }
    //
    $user = DB::queryFirstRow("SELECT * FROM patients WHERE id=%d", $row['userId']);
    if (!$user) {
        $log->err(sprintf("Passreset for token %s user id=%d not found", $row['secretToken'], $row['userId']));
        $app->render('error_internal.html.twig');
        return;
    }
    if ($app->request()->isGet()) { // State 1: first show
        $app->render('passreset_form.html.twig', array(
            'name' => $user['firstName'], 'email' => $user['email']
        ));
    } else { // receiving POST with new password
        $pass1 = $app->request()->post('pass1');
        $pass2 = $app->request()->post('pass2');
        // FIXME: verify quality of the new password using a function
        $errorList = array();
        if ($pass1 != $pass2) {
            array_push($errorList, "Passwords don't match");
        } else { // TODO: do a better check for password quality (lower/upper/numbers/special)
            if (strlen($pass1) < 2 || strlen($pass1) > 50) {
                array_push($errorList, "Password must be between 2 and 50 characters long");
            }
        }
        if ($errorList) { // 3. failed submission
            $app->render('passreset_form.html.twig', array(
                'errorList' => $errorList,
                'name' => $user['firstName'],
                'email' => $user['email']
            ));
        } else { // 2. successful submission
            DB::update('patients', array('password' => $pass1), 'id=%d', $user['id']);
            $app->render('passreset_form_success.html.twig');
        }
    }
})->via('GET', 'POST');
