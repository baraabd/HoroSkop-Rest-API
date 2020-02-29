<?php
    session_start();
    include "./horoscopeList.php";
    
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        if(isset($_SESSION['myHoroscope'])){            
           echo json_encode($_SESSION['myHoroscope']);  
                         
        } else {
            //json_encode("SESSION has already set");                    
        }
    } else {
        //json_encode("GET not set in method request");
    }

?>