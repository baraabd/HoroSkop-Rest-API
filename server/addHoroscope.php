<?php

session_start();
include './horoscopeList.php';
    
if (isset($_SERVER['REQUEST_METHOD'])){    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        if(isset($_POST['myDate'])) {
            $dateEnter = $_POST["myDate"];
            $myDateMD = $dateEnter[2] . $dateEnter[3] . $dateEnter[4] . $dateEnter[5];
            
            if(!isset($_SESSION['myHoroscope'])) {
                $_SESSION['myHoroscope'] = getHoroscope($horoscopeList,$myDateMD);  
                   
                                  
            }else{                   
                //json_encode("SESSION has already set");                    
            }
        }else {                
            //json_encode("date is not set in body");                                        
        }
    }else {
        //json_encode("PUT not set in method request");
    }
} else {        
    //json_encode("No valid request");
} 
?>