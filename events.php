<?php
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}
// List of events
 $json = array();

 // Query that retrieves events
 $cal = DB::query('SELECT * FROM appointments');
    if(!$cal){
        http_response_code(500);
        $app->render('internal_error.html.twig');
    }

    $calendar=array();
         
        foreach($cal as $c){
            $calTemp = array(
                'doctorId' => $c[doctorId],
                'patientId' =>$c[patientId],
                'start' => $c[date] . ' ' . $c[startTime],
                'end' => $c[date] . ' ' .$c[endTime],
                'title' => $c[type]               
            );
            array_push($calendar, $calTemp);
        
    }

 
 // sending the encoded result to success page
 echo json_encode($calendar);
 // sending the encoded result to success page
 //echo json_encode($resultat->fetchAll(PDO::FETCH_ASSOC));

?>


