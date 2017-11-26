<?php

class MonthInfo {

    var $month;
    var $dates;

    function setMonth($par) {

        $this->month = $par;
    }

    function getMonth() {

        echo $this . month;
    }

    function setDates($par) {

        $this->dates = $par;
    }

    function getDates() {

        echo $this . dates;
    }

}

class DateInfo {
    /* Member variables */

    var $dayOfWeek;
    var $day;
    var $month;

    /* Member functions */

    function setDayOfWeek($par) {

        $this->dayOfWeek = $par;
    }

    function getDayOfWeek() {

        echo $this->dayOfWeek;
    }

    function setDay($par) {

        $this->day = $par;
    }

    function getDay() {

        echo $this->day;
    }

    function setMonth($par) {

        $this->month = $par;
    }

    function getMonth() {

        echo $this->month;
    }

}

class Date {

    var $dow;
    var $day;
    var $month;
    var $dateStr;

    function setDow($par) {

        $this->dow = $par;
    }

    function getDow() {

        echo $this->dow;
    }

    function setDay($par) {

        $this->day = $par;
    }

    function getDay() {

        echo $this->day;
    }

    function setMonth($par) {

        $this->month = $par;
    }

    function getMonth() {

        echo $this->month;
    }

    function setDateStr($par) {

        $this->dateStr = $par;
    }

    function getDateStr() {

        echo $this->dateStr;
    }

}

class Time {

    var $hour;
    var $minute;

    function setHour($par) {

        $this->hour = $par;
    }

    function getHour() {

        echo $this->hour;
    }

    function setMinute($par) {

        $this->minute = $par;
    }

    function getMinute() {

        echo $this->minute;
    }

}

class TimeSlot {

    var $start;
    var $end;

    function setStart($par) {

        $this->start = $par;
    }

    function getStart() {

        echo $this->start;
    }

    function setEnd($par) {

        $this->end = $par;
    }

    function getEnd() {

        echo $this->end;
    }

}

class DoctorSchedule {

    var $date;
    var $times;
    var $appointments;

    function setDate($par) {

        $this->date = $par;
    }

    function getDate() {

        echo $this->date;
    }

    function setTimes($par) {

        $this->times = $par;
    }

    function getTimes() {

        echo $this->times;
    }

    function setAppointments($par) {

        $this->appointments = $par;
    }

    function getAppointments() {

        echo $this->appointments;
    }

}

function get_hours_range($start, $end, $step) {

    $times = array();

    foreach (range($start, $end, $step) as $timestamp) {

        $hour_mins = gmdate('H:i', $timestamp);

        if (!empty($format))
            $times[$hour_mins] = gmdate($format, $timestamp);
        else
            $times[$hour_mins] = $hour_mins;
    }

    return $times;
}

if (false) {

    $app = new \Slim\Slim();

    $log = new Logger('main');
}

///*************** Patient's Profiles ***********************/////////////////

$app->get('/patient/myaccount', function() use ($app) {
    
    if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'patient') {
        $app->render('access_denied.html.twig');
        return;
    }
    $app->render('patient/myaccount.html.twig');
});


$app->get('/patient/mybooking', function() use ($app) {
    
    if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'patient') {
        $app->render('access_denied.html.twig');
        return;
    }

    $myappointments = DB::query("SELECT p.id, dr.firstName, dr.lastName, p.date, p.startTime FROM appointments as p, doctors as dr WHERE p.patientId = %i and p.doctorId = dr.id and p.readStatus <> 2 order by date asc", $_SESSION['user']['id']);

    $app->render('patient/mybooking.html.twig', array('myapp' => $myappointments, 'userSession' => $_SESSION['user']));
});


$app->post('/:appid/deleteappointment', function($appid) use ($app) {
    
    if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'patient') {
        $app->render('access_denied.html.twig');
        return;
    }

    DB::update('appointments', array('readStatus' => 2), "id = %d", $appid);
    
    $data = new stdClass();
    if (DB::affectedRows() == true) {
        $data->success = true;
    } else {
        $data->success = false;
    }
    
    echo json_encode($data);
});


/////////////******* Search in Doctor's List based on speciallity **************////////////////
$app->get('/bookappointment', function() use ($app) {  
    
    $row = DB::query("SELECT DISTINCT speciality FROM doctors");

    $app->render('patient/makeAppointment.html.twig', array('r' => $row, 'userSession' => $_SESSION['user']));
});



$app->post('/bookappointment', function() use ($app) {

    $speciality = $app->request()->post('speciality');

    $drList = DB::query("SELECT * FROM doctors WHERE speciality = %s", $speciality);

    $app->render('drList.html.twig', array('drList' => $drList, 'userSession' => $_SESSION['user']));
});



//////////*********Show doctor's describtion and Available Time **************//////////////////

$app->get('/doctors/:id/:drname', function($id, $drname) use ($app) {

    $row = DB::queryFirstRow("SELECT * FROM doctors WHERE id = %i ", $id);
    
     if (!$row) {
        $app->render('admin/not_found.html.twig');
        return;
    }

    $app->render('doctors/drdescription.html.twig', array('dr' => $row, 'userSession' => $_SESSION['user']));
});


$app->get('/avtime/:id/:start', function ($id, $start) use ($app) {

    $data = array();
    
    $format = 'Y-m-d';
    $start_date_obj = DateTime::createFromFormat($format, $start);
    $start_date_obj_cp = DateTime::createFromFormat($format, $start);
    //$s = strtotime($date_format->format('d/m/Y H:i'));

    //$startDate = strtotime($s); // DateTime::createFromFormat("Y-m-d", $start);
    //$endDate = strtotime("+6 days", $startDate);
    
    $startDate = $start_date_obj->format($format);
    $endDate = $start_date_obj->add(new DateInterval("P6D"))->format($format);

    //$timeRow = DB::query("SELECT * FROM dailyschedules WHERE doctorId = %i and date >= %s and date < %s", $id, gmdate("Y-m-d", $startDate), gmdate("Y-m-d", $endDate));
    $timeRow = DB::query("SELECT * FROM dailyschedules WHERE doctorId = %i and date >= %s and date < %s", $id, $startDate, $endDate);

    //$timeApp = DB::query("SELECT * FROM appointments WHERE doctorId = %i and date >= %s and date < %s order by date, startTime", $id, gmdate("Y-m-d", $startDate), gmdate("Y-m-d", $endDate));
    $timeApp = DB::query("SELECT * FROM appointments WHERE doctorId = %i and date >= %s and date < %s order by date, startTime", $id, $startDate, $endDate);
        
    for ($i = 0; $i < 6; $i++) {
        if($i > 0){
            $currentDate = $start_date_obj_cp->add(new DateInterval("P1D"));
        } else {
            $currentDate = $start_date_obj_cp;
        }
        $currentDateStr = $currentDate->format($format);
        //$currentDate = strtotime("+" . "$i" . " days", $startDate);        
        //$currentDateStr = gmdate("Y-m-d", $currentDate);
       
        //$x = new stdClass();
        //$a = array();
        
        $value = new DoctorSchedule();
        $date = new Date();
        //$date->setMonth(date("M", $currentDate));
        //$date->setDay(date("d", $currentDate));
        //$date->setDow(date("D", $currentDate));
        
        $date->setMonth($currentDate->format('M'));
        $date->setDay($currentDate->format('d'));
        $date->setDow($currentDate->format('D'));
        
        $date->setDateStr($currentDateStr);

        $value->setDate($date);
        $times = array();
        $appointments = array();
        
        foreach ($timeRow as $r) {
            $d = $r['date'];
            $t1 = $r['startTime'];
            $t2 = $r['endTime'];
            
            //array_push($a, gmdate("Y-m-d", $endDate));

            if ($d == $currentDateStr) {
                $slot = new TimeSlot();
                $start = new Time();
                $start->setHour(((int) substr($t1, 0, 2)));
                $start->setMinute(((int) substr($t1, 3, 5)));
                $end = new Time();
                $end->setHour(((int) substr($t2, 0, 2)));
                $end->setMinute(((int) substr($t2, 3, 5)));
                $slot->setStart($start);
                $slot->setEnd($end);
                array_push($times, $slot);
            }
        }

        //$x->d = $a;
        //array_push($data, $x);

        $found_current_date = false;
        foreach ($timeApp as $ar) {
            $d = $ar['date'];
            if ($d == $currentDateStr) {
                $t = substr($ar['startTime'], 0, 5);
                array_push($appointments, $t);
                $found_current_date = true;
            } else {
                if ($found_current_date) {
                    break;
                }
            }
        }

        $value->setTimes($times);
        $value->setAppointments($appointments);

        array_push($data, $value);
    }
    //header('Content-Type: application/json;charset=utf-8');
    echo json_encode($data);
});



/////////*********** PAYMENT *********///////////////

$app->post('/prepayment', function() use ($app) {
    
    if (!$_SESSION['user'] || $_SESSION['user']['role'] != 'patient') {
        $app->render('access_denied.html.twig');
        return;
    }
$doctorId = $app->request()->post('doctorId');    
$paypal_email = 'winotojan@gmail.com';
$return_url = 'http://example.com/payment-successful.htm';
$cancel_url = 'http://example.com/payment-cancelled.htm';
$notify_url = 'http://example.com/paypal/payments.php';

$item_name = 'Fee for Visiting';
$item_amount = 50.00;

// Include Functions
include("functions.php");


// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){

	// Firstly Append paypal account to querystring
	$querystring .= "?business=".urlencode($paypal_email)."&";	
	
	// Append amount& currency (£) to quersytring so it cannot be edited in html
	
	//The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
	$querystring .= "item_name=".urlencode($item_name)."&";
	$querystring .= "amount=".urlencode($item_amount)."&";
	
	//loop for posted values and append to querystring
	foreach($_POST as $key => $value){
		$value = urlencode(stripslashes($value));
		$querystring .= "$key=$value&";
	}
	
	// Append paypal return addresses
	$querystring .= "return=".urlencode(stripslashes($return_url))."&";
	$querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
	$querystring .= "notify_url=".urlencode($notify_url);
	
	// Append querystring with custom field
	//$querystring .= "&custom=".USERID;
	
	// Redirect to paypal IPN
	header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
	exit();

}else{
	
	// Response from Paypal
	
	// read the post from PayPal system and add 'cmd'
	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value) {
		$req .= "&$key=$value";
	}
	
	// assign posted variables to local variables
	$data['item_name']			= $_POST['item_name'];
	$data['item_number'] 		= $_POST['item_number'];
	$data['payment_status'] 	= $_POST['payment_status'];
	$data['payment_amount'] 	= $_POST['mc_gross'];
	$data['payment_currency']	= $_POST['mc_currency'];
	$data['txn_id']				= $_POST['txn_id'];
	$data['receiver_email'] 	= $_POST['receiver_email'];
	$data['payer_email'] 		= $_POST['payer_email'];
	$data['custom'] 			= $_POST['custom'];
		
	// post back to PayPal system to validate
	$header = "POST /cgi-bin/webscr HTTP/1.0\r\n";
	$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
	$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
	
	$fp = fsockopen ('ssl://www.sandbox.paypal.com', 443, $errno, $errstr, 30);	
	
	if (!$fp) {
		// HTTP ERROR
	} else {	
				mail('ash@evoluted.net', '0', '0');
		fputs ($fp, $header . $req);
		while (!feof($fp)) {
			$res = fgets ($fp, 1024);
			if (strcmp ($res, "VERIFIED") == 0) {
						
				// Validate payment (Check unique txnid & correct price)
				$valid_txnid = check_txnid($data['txn_id']);
				$valid_price = check_price($data['payment_amount'], $data['item_number']);
				// PAYMENT VALIDATED & VERIFIED!
				if($valid_txnid && $valid_price){				
					$orderid = updatePayments($data);		
					if($orderid){
					    DB::insert('invoices', array(
                                            'downpayment' => $data['payment_amount'],
                                            'appointmentId' => $data['item_number'],
                                            'email' => $data['payer_email'],
                                            'paymentId' => $data['txn_id']
                        ));
						// Payment has been made & successfully inserted into the Database								
					}else{								
						// Error inserting into DB
						// E-mail admin or alert user
					}
				}else{					
					// Payment made but data has been changed
					// E-mail admin or alert user
				}						
			
			}else if (strcmp ($res, "INVALID") == 0) {
			
				// PAYMENT INVALID & INVESTIGATE MANUALY! 
				// E-mail admin or alert user
			}		
		}		
	fclose ($fp);
	}	
}});
