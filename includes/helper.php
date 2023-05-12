<?php
session_start();
include "connect.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    @$target = $_GET['target'];
    $response = array();
    $response['message'] = "nothing yet";
    if ($target == 'searchlink') {
        $link = $_GET['link'];
        $search = "SELECT * FROM survey_set WHERE surveylink = ? ";
        $execution = $conn->prepare($search);
        $execution->execute(array($link));
        $found = $execution->rowCount();
        if ($found > 0) {
            $results = $execution->fetchAll(PDO::FETCH_OBJ);
            foreach ($results as $row) {
                $id = $row->id;
                $start = $row->start_date;
                $end = $row->end_date;
                //calculating days between ending dates and today
                $from = new DateTime($start);
                $to = new DateTime($end);
                $today = date('Y-m-d');
                $today = new DateTime($today);
                $allinterval = $from->diff($to);
                $frominterval = $from->diff($today);
                $tointerval = $today->diff($to);
                $num_days = $allinterval->days;
                $fromday1 = $frominterval->days;
                echo "all days interval" . $num_days . "from day1  to today" . $fromday1;
                if ($num_days < $fromday1) {
                    $response['message'] = "Survey has ended";
                    $response['value'] = 0;
                } 
                elseif($fromday1 < $num_days)                
                {
                    $response['message'] = "Survey is not yet started";
                    $response['value'] = 0;
                    
                }
                else {
                    $response['message'] = "survey found ";
                    $response['value'] = 1;
                    $response['id'] = $row->id;                  
    
                }
            }
        }

         
         else{

            $response['message'] = "no survey found ";
            $response['value'] = 0;
        }
        echo json_encode($response);

    }
    if ($target == 'login') {
        $username = $_GET['username'];
        $password = $_GET['password'];
        $hashed = md5($password);
        $selectuser = "SELECT id FROM users WHERE email = ? AND password = ?";
        $login = $conn->prepare($selectuser);
        $login->execute(array($username, $hashed));
        $results = $login->fetchAll(PDO::FETCH_OBJ);
        foreach ($results as $row) {
            $userid = $row->id;
        }
        $found = $login->rowCount();
        if ($found > 0) {
            $response['message'] = "You are welcome " . $username;
            $response['value'] = 1;
            $response['userid'] = $userid;
            $_SESSION['userid'] = $userid;

        } else {
            $response = array();
            $response['message'] = "no user found ";
            $response['value'] = 0;
        }
        echo json_encode($response);


    }
}

?>