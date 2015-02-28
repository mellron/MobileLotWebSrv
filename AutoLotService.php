

<?php

require_once './Utility/SqlJSON.php';
   
/* require the user as the parameter */
if(filter_input(INPUT_POST,'sStateCD')) {

    header('Content-type: application/json');
 
     \UTIL\SqlJSON::CreateConnection();
           
    if(\UTIL\SqlJSON::IsConnected()) {   
           
                $result = \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList");

                 echo  $result  ;
            
    }
   
   
}