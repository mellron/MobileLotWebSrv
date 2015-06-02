
<?php

require_once './Utility/SqlJSON.php';

if($_SERVER['REQUEST_METHOD'] === "POST") {
   
    /* require the user as the parameter */
    if(filter_input(INPUT_POST,'sStateCD')) {

        header('Content-type: application/json');

         \UTIL\SqlJSON::CreateConnection();

        if(\UTIL\SqlJSON::IsConnected()) {   

                    $result = \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList");

                     echo  $result  ;

     }
     else
     if(filter_input(INPUT_POST,'BasicSearch')) 
     {
         
     }
     else
     if(filter_input(INPUT_POST,'getAutoByVinID')) 
     {
         
     }
     else
     if(filter_input(INPUT_POST,'getNumberOfAutoImages')) 
     {
         
     }
     else
     if(filter_input(INPUT_POST,'getModels')) 
     {
         
     }
     else
     if(filter_input(INPUT_POST,'getMakes')) 
     {
         
     }
     else
     if(filter_input(INPUT_POST,'getValidLocations')) 
     {
         
     }
     else
     if(filter_input(INPUT_POST,'sStateCD')) 
     {
         
     }
     
        
 


    }
}