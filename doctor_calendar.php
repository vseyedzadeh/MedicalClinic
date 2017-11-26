<?php
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

$app->get('/mycalendar', function() use ($app, $log) {
    if(!($_SESSION['staffSession'])){
        $app->render('access_denied.html.twig');
        return;
    }
    $app->render('admin/doctor_calendar.html.twig', array('staffSession' => $_SESSION['staffSession']));
});

$app->get('/calx', function() use ($app, $log) {
if(!($_SESSION['staffSession'])){
        $app->render('access_denied.html.twig');
        return;
    }
    $drId = $_SESSION['staffSession']['id'];
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');
        while (true){
          $cal = DB::query('SELECT * FROM appointments WHERE (readStatus = 0 OR readStatus = 2) AND archiveStatus = 0 AND doctorId = %i',$drId);
          
        if(empty($cal)){           
            echo "retry: 10000\n";          
            ob_flush();
            flush();
  }
    $count = sizeof($cal);
    if ($count > 0) {
        foreach ($cal as $c) {
            if ($c['readStatus'] == 0) {
                echo "event: message\n";
                echo "data: " . $count . "New Appointment(s)" . "\n\n";
                ob_flush();
                flush();
                DB::update('appointments', array(
                    'readStatus' => 1
                        ), "doctorId=%i", 1);
            } else {
                echo "event: message\n";
                echo "data: " . $count . "Cancel Appointment(s)" . "\n\n";
                ob_flush();
                flush();
                DB::update('appointments', array(
                    'archiveStatus' => 1
                        ), "readStatus = 2 AND doctorId=%i", 1);
            }
        }          
        }
        sleep(10);
        }
});


$app->get('/events', function() use ($app, $log) {
    if(!($_SESSION['staffSession'])){
        $app->render('access_denied.html.twig');
        return;
    }
    $json = array();
    $cal = DB::query('SELECT a.id as id, d.id as doctorId, d.firstName as doctorFirstName, '
                    . 'd.lastName as doctorLastName, p.id as patientId, p.firstName as firstName, '
                    . 'p.lastName as lastName, a.date, a.startTime, a.endTime, a.patientMessage as msg, '
                    . 'a.doctorNote as note, a.readStatus as status, a.archiveStatus as archiveStatus, a.type as type FROM doctors as d '
                    . 'JOIN appointments as a ON d.id = a.doctorId JOIN patients AS p ON a.patientId = p.id WHERE a.archiveStatus = 0');

    if (!$cal) {
        http_response_code(500);
        $app->render('internal_error.html.twig');
    }
    $calendar = array();
    foreach ($cal as $c) {
        $calTemp = array(
            'id' => $c['id'],
            'patientId' => $c['patientId'],
            'doctorId' => $c['doctorId'],
            'doctorName' => $c['doctorFirstName'] . ' ' . $c['doctorLastName'],
            'title' => $c['firstName'] . ' ' . $c['lastName'],
            'start' => $c['date'] . ' ' . $c['startTime'],
            'end' => $c['date'] . ' ' . $c['endTime'],
            'patientmsg' => $c['msg'],
            'doctornote' => $c['note']
        );
        array_push($calendar, $calTemp);
    }
    // sending the encoded result to success page
    echo json_encode($calendar);

});



$app->post('/add_events', function() use ($app, $log) {
    if(!($_SESSION['staffSession'])){
        $app->render('access_denied.html.twig');
        return;
    }
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $url = $_POST['url'];

    DB::insertUpdate('appointments', array(
        'doctorId' => $doctorId,
        'date' => $dateSql,
        'startTime' => $start,
        'endTime' => $end
    ));
});

$app->post('/add_note_event', function() use ($app, $log) {
    if(!($_SESSION['staffSession'])){
        $app->render('access_denied.html.twig');
        return;
    }
    $note = $_POST['note'];
    $id = $_POST['id'];
    DB::update('appointments', ['doctorNote' => $note], 'id=%i', $id);
});

$app->post('/load_history', function() use ($app, $log) {
    if(!($_SESSION['staffSession'])){
        $app->render('access_denied.html.twig');
        return;
    }
    $patientId = $_POST['patientId'];
    $history = DB::query('SELECT d.firstName as dfirstName, d.lastName as dlastName, a.date as date, a.patientMessage as message, a.doctorNote as note, p.firstName as pfirstName, p.lastName as plastName FROM doctors AS d JOIN appointments as a ON d.id = a.doctorId JOIN patients as p on a.patientId = p.id WHERE a.patientId = %i and a.date <= CURRENT_DATE() order by a.date ASC', $patientId);
    if (!$history) {
        if(empty($history)){
       $patient = DB::queryFirstRow('SELECT * FROM patients WHERE id = %i', $patientId);
        $app->render('admin/patient_history.html.twig', array('p' => $patient));
        }else{
             http_response_code(500);
        $app->render('internal_error.html.twig');

        }
    }else{
        $app->render('admin/patient_history.html.twig', array('hh' => $history));
    }
});
