<?php 

    $horoscopeList = array (     
        "Stenbocken" => "1222:1231", 
        "Stenbocken" => "0101:0119",
        "Vattumannen"=> "0120:0218",
        "Fiskarna"=> "0219:0320",
        "Väduren"=> "0321:0419",
        "Oxen"=> "0420:0520",
        "Tvillingarna"=>"0521:0621",
        "Kräftan"=>"0622:0722",
        "Lejonet"=>"0723:0822",
        "Jungfrun"=>"0823:0922",
        "Vågen"=>"0923:1022",
        "Skorpionen"=>"1023:1121",
        "Skytten"=>"1122:1221"
    );

    function getHoroscope($horoscopeList,$myDateMD){                 
        foreach($horoscopeList as $sign =>$dateString){              
            $from = substr($dateString, 0, 4);
            $to = substr($dateString, 5, 4);
            if((int)$myDateMD >= (int)$from && (int)$myDateMD <= (int)$to){
                $horoscope = $sign ;
                return $horoscope;
            }
         }       
    }    

?>