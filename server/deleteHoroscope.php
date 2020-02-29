<?php
session_start();

include "./horoscopeList.php";

if($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    if(isset($_SESSION['myHoroscope'])){
        session_unset();
        ?>               
        <script
        type="text/javascript">$('#deleteHoroscope').hide()
        type="text/javascript">$('#updateHoroscope').hide()                
        type="text/javascript">$('#addHoroscope').show()                
        </script>

        <?php
        //json_encode("SESSION was deleted");                    
    } else{       
        //json_encode("SESSION was not deleted");
    }
}

?>