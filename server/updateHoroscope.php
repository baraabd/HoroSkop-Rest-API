<?php

session_start();
parse_str(file_get_contents('php://input'), $_PUT);
include "./horoscopeList.php";

if (isset($_SERVER['REQUEST_METHOD'])){
    if ($_SERVER['REQUEST_METHOD'] === 'PUT') {        
        if(isset($_PUT['myDate'])) {
            $dateEnter = $_PUT["myDate"];
            $myDateMD = $dateEnter[2] . $dateEnter[3] . $dateEnter[4] . $dateEnter[5];        
            if(isset($_SESSION['myHoroscope'])){
                session_unset();        
                $_SESSION['myHoroscope'] = getHoroscope($horoscopeList,$myDateMD);
                ?>               
                <script
                type="text/javascript">$('#addHoroscope').hide()
                type="text/javascript">$('#updateHoroscope').show()                
                type="text/javascript">$('#deleteHoroscope').show()                
                </script>

                <?php
                //json_encode( $_SESSION['myHoroscope']);        
            }else{
               // json_encode("SESSION has not set");
            }
        }else {        
           // json_encode("Date is not set in body");                                
        }
    }else {    
        //json_encode("PUT not set in method request");
    }
} else {        
    //json_encode("No valid request");
}


?>