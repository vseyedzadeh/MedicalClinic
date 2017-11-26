<?php

if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}



$app->get('/payment', function() use($app) {

    $app->render('payment.html.twig');
});

